<?php

declare(strict_types=1);

/**
 * @file
 * Theme settings form for takebropro theme.
 */

use Drupal\Core\Form\FormState;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function takebropro_form_system_theme_settings_alter(array &$form, FormState $form_state): void {

  $form['takebropro'] = [
    '#type' => 'details',
    '#title' => t('takebropro'),
    '#open' => TRUE,
  ];

  $form['takebropro']['example'] = [
    '#type' => 'textfield',
    '#title' => t('Example'),
    '#default_value' => theme_get_setting('example'),
  ];

}
