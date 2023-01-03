<?php
/**
 * @File
 * Form to search into api
 */
namespace Drupal\moviemodule\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SearchForm extends FormBase{

  /**
   * {@inheritdoc}
   */
  public function getFormId()
  {
    return 'searchform_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $form['keyword'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Search by Actor/Director'),
      '#size' => 60,
      '#maxlength' => 128,
      '#required' => TRUE,
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Search'),
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    // Validate the form values.
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state):RedirectResponse {
    // Retrieve the search query from the form state.
    $search_query = $form_state->getValue('keyword');

    // Redirect the user to the /other-controller-route route, passing the
    // search_query query parameter in the URL.
    $response = new RedirectResponse('/movieapi/search/'.$search_query, 302, [
      'query' => [
        'search_query' => $search_query,
      ],
    ]);
    return $response->send();
  }
}
