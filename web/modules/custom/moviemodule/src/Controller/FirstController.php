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
      .'&page=1&include_adult=false', [
      'headers' => [
        'Accept' => 'text/plain',
      ],
    ]
    );

    if ($request->getStatusCode() != 200) {
      return [];
    }

    $posts = $request->getBody()->getContents();
    $build = [
      '#markup' => $posts,
    ];
    return $build;
  }

  public function simpleContent()
  {
    return[
      '#type'=>'markup',
      '#markup' => t("Hello world, time flies like an arrow"),
    ];
  }


  public function variableContent($name_1,$name_2)
  {
    return[
      '#type'=>'markup',
      '#markup' => t("Hello world, @name_1 and @name_2",
         ['@name_1'=> $name_1, '@name_2' => $name_2]),
    ];
  }


}




