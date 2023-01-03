<?php

/**
 * @file
 * controller wired to moviemodule
 */

namespace Drupal\moviemodule\Controller;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use GuzzleHttp\ClientInterface;
use Drupal\node\Entity\Node;
use Drupal\Core\Routing\TrustedRedirectResponse;
use Drupal\Core\Url;

class FirstController extends ControllerBase{

  protected $httpClient;

  /**
   * {@inheritdoc}
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
    ]);
    $node->save();
    $url = Url::fromRoute('entity.node.edit_form', ['node' => $node->id()])->toString();
    $response = new TrustedRedirectResponse($url);
    return $response->send();
  }


  public function simpleContent()
  {
    $build = \Drupal::formBuilder()->getForm('Drupal\moviemodule\Form\SearchForm');
    return $build;
  }


}




