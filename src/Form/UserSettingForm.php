<?php


/**
 * @file
 * Contains \Drupal\ga_login\Form\UserSettingForm.
 */

namespace Drupal\ga_login\Form;


use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


/**
 * Implements an example form.
 */
class UserSettingForm extends FormBase {
  /**
   * @var AccountInterface $account
   */
  protected $account;

  /**
   * Class constructor.
   */
  public function __construct(AccountInterface $account) {
    $this->account = $account;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    // Instantiates this form class.
    return new static(
      // Load the service required to construct this class.
      $container->get('current_user')
    );
  }

  /**
   * {@inheritdoc}.
   */
  public function getFormID() {
    return 'example_form';
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    // Get current user data.
   
     return [
      '#markup' => t('<p>Two-factor authentication (TFA) provides additional security for your account. With TFA enabled,you</br> log in to the site with one time generated verification code in addition to your username and password.</p>'
          . '<p>1- Whenever you sign in you will enter your username and password as usual.</p>'
          . '<p>2- Then, you need to enter an one time authentication code that you can find from your Google Authenticator mobile app or desktop client</p>'),
    ];
	$user = $this->currentUser();
    
   

  }
  
  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // ...
  }
}
