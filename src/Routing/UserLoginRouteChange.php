<?php

/**
 * @file
 * Contains \Drupal\ga_login\Routing\UserLoginRouteChange.
 */

namespace Drupal\ga_login\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 */
class UserLoginRouteChange extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
     if ($route = $collection->get('user.login')) {
  $route->setDefault('_form', '\Drupal\ga_login\Form\NewUserLoginForm');
     }

   }
}
