<?php

/**
 * @file
 * controller wired to moviemodule
 * Use to query and create peoples entity such as Directors, actors
 */

namespace Drupal\moviemodule\Controller;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use GuzzleHttp\ClientInterface;
use Drupal\node\Entity\Node;
use Drupal\Core\Routing\TrustedRedirectResponse;
use Drupal\Core\Url;

class MovieController extends ControllerBase{
  /**
   * The HTTP client.
   *
   * @var \GuzzleHttp\ClientInterface
   */
  protected $httpClient;

  /**
   * {@inheritdoc}
   *
   * @param \GuzzleHttp\ClientInterface $http_client
   *  The HTTP client.
   */
  public function __construct(ClientInterface $http_client) {
    $this->httpClient = $http_client;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('http_client')
    );
  }

  /**
   * Makes an HTTP GET request to the specified URL and returns the data from the response body.
   *
   * @param string $query
   *   The query string to be appended to the URL.
   *
   * @return array
   *   An array containing data from the response body.
   */

  public function apiConnect(string $query):array {
    $request = $this->httpClient->
    request(
      'GET',
      'https://api.themoviedb.org/3/search/person?api_key=7dddb325f57844046ce6315eeb90960f&language=en-US&query='
      .$query
      .'&page=1&include_adult=false',
    );

    if ($request->getStatusCode() != 200) {
      return [];
    }
    $actors = $request->getBody()->getContents();
    $decode = json_decode($actors)->results;
    return [
      '#theme' => 'my_template',
      '#test_var' => $decode,
    ];
  }

  /**
   * Makes an HTTP GET request to the specified URL and creates a new node with the data from the response body.
   *
   * @param int $id
   *   The ID of the actor.
   *
   * @return \Drupal\Core\Routing\TrustedRedirectResponse
   *   A trusted redirect response object that redirects the user to the form for editing the newly created node.
   */
  public function createActor(int $id): TrustedRedirectResponse
  {
    $request = $this->httpClient->
    request(
      'GET',
      "https://api.themoviedb.org/3/person/
      ".$id."
      ?api_key=7dddb325f57844046ce6315eeb90960f&language=en-US"
      ,
    );
    if ($request->getStatusCode() != 200) {
      return [];
    }
    $actors =  json_decode($request->getBody()->getContents());
    $node = Node::create([
      'type' => 'actor',
      'title' => $actors->name,
      'body' => [
        'summary' => '',
        'value' => $actors->biography,
        'format' => 'full_html',
      ],
      'field_urlportrait' =>[
        'summary' => '',
        'value' => "<img src=\"https://image.tmdb.org/t/p/w500".$actors->profile_path."\">",
        'format' => 'full_html',
      ],
    ]);
    $node->save();
    $url = Url::fromRoute('entity.node.edit_form', ['node' => $node->id()])->toString();
    $response = new TrustedRedirectResponse($url);
    return $response->send();
  }

   /**
   * Returns the form object of the SearchForm form.
   * To allow the user to search for a certain actor/director
   * @return \Drupal\Core\Form\FormInterface
   *   The form object for the SearchForm form.
   */

    public function formContent()
  {
    $build = \Drupal::formBuilder()->getForm('Drupal\moviemodule\Form\SearchForm');
    return $build;
  }


}




