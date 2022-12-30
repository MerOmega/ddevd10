<?php

/**
 * @file
 * controller wired to moviemodule
 */

namespace Drupal\moviemodule\Controller;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use GuzzleHttp\ClientInterface;

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

  public function apiConnect($query) {
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
    $decode = json_decode($actors);
    var_dump($decode->results[0]->name);
//    $build = [
//      '#markup' => $actors,
//    ];
//    return $build;
    return [
      '#theme' => 'my_template',
      '#test_var' => $decode->results[0]->name,
    ];
  }

  public function simpleContent()
  {
      $build = \Drupal::formBuilder()->getForm('Drupal\moviemodule\Form\SearchForm');
    return $build;
  }


  public function variableContent($name_1)
  {
    $value = $this->apiConnect($name_1);
    return [
      '#theme' => 'my_template',
      '#test_var' => $this->t('Test Value'),
    ];
  }


}




