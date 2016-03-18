<?php


/**
 * @file
 * Contains \Drupal\ga_login\Form\NewUserLoginForm.
 */

namespace Drupal\ga_login\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\user\Form\UserLoginForm;

/**
 * Provides a user login form.
 */
class NewUserLoginForm extends UserLoginForm {

   /**
   * {@inheritdoc}
   */
public function buildForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildForm($form, $form_state);
	$form['tfa'] = array(
	  '#description' => $this->t('Enter the one time password'),
      '#type' => 'number',
      '#title' => t('Authentication Code'),
      '#required' => TRUE,
    );
    return $form;

  }
}
