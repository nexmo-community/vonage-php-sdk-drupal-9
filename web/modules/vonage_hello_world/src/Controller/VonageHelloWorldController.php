<?php

namespace Drupal\vonage_hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Vonage Hello World routes.
 */
class VonageHelloWorldController extends ControllerBase {
  protected $client;

  public function __construct(\Vonage\Client $client) {
    $this->client = $client;
  }

  public static function create(\Symfony\Component\DependencyInjection\ContainerInterface $container) {
    $client = $container->get(\Vonage\Client::class);
    return new static($client);
  }
  
  public function build() {
    \Drupal::service('page_cache_kill_switch')->trigger();

    $response = $this->client->sms()->send(
      new \Vonage\SMS\Message\SMS(
        'TO_NUMBER',
        'VONAGE_NUMBER',
        'This was sent from Drupal!'
      )
    );

    $status = $response->current()->getStatus();
    if ($status == 0) {
      $message = "The message was sent successfully";
    } else {
      $message = "The message failed with status: " . $status;
    }
    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t($message),
    ];

    return $build;
  }

}
