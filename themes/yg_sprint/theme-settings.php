<?php

/**
 * @file
 * Provides an additional config form for theme settings.
 */

use Drupal\Core\Form\FormStateInterface;

function yg_sprint_form_system_theme_settings_alter(array &$form, FormStateInterface $form_state) {
  $form['yg_sprint_settings']= array(
    '#type' => 'details',
    '#title' => t('YG Sprint Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#group' => 'bootstrap',
    '#weight' => 10,
  );
#social links    
  $form['yg_sprint_settings']['social_links'] = array(
    '#type' => 'details',
    '#title' => t('Social Links'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['yg_sprint_settings']['social_links']['facebook_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook'),
    '#description' => t('Please enter your facebook url'),
    '#default_value' => theme_get_setting('facebook_url'),
  );
  $form['yg_sprint_settings']['social_links']['twitter_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter'),
    '#description' => t('Please enter your twitter url'),
    '#default_value' => theme_get_setting('twitter_url'),
  );
  $form['yg_sprint_settings']['social_links']['dribbble_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Dribbble'),
    '#description' => t('Please enter your dribbble url'),
    '#default_value' => theme_get_setting('dribbble_url'),
  );
  $form['yg_sprint_settings']['social_links']['google_plus_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Plus'),
    '#description' => t('Please enter your google-plus url'),
    '#default_value' => theme_get_setting('google_plus_url'),
  );
  $form['yg_sprint_settings']['social_links']['instagram_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Instagram'),
    '#description' => t('Please enter your instagram url'),
    '#default_value' => theme_get_setting('instagram_url'),
  );
  $form['yg_sprint_settings']['social_links']['linkedin_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Linkedin'),
    '#description' => t('Please enter your linkedin url'),
    '#default_value' => theme_get_setting('linkedin_url'),
  );
#Footer
  $form['yg_sprint_settings']['footer'] = array(
    '#type' => 'details',
    '#title' => t('Footer'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['yg_sprint_settings']['footer']['aboutus'] = array(
    '#type' => 'details',
    '#title' => t('About Us'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['yg_sprint_settings']['footer']['aboutus']['about_title'] = array(
    '#type' => 'textfield',
    '#title' => t('About-Us Title'),
    '#description' => t('Please enter footer about title'),
    '#default_value' => theme_get_setting('about_title'),
    '#required' => TRUE,
  ); 
  $about_description = theme_get_setting('about_description');
  $form['yg_sprint_settings']['footer']['aboutus']['about_description'] = array(
    '#type' => 'text_format',
    '#title' => t('About-Us Description'),
    '#description' => t('Please enter footer description...'),
    '#default_value' => $about_description['value'],
    '#foramt'        => $about_description['format'],
  );
  $form['yg_sprint_settings']['footer']['contact'] = array(
    '#type' => 'details',
    '#title' => t('Contact Us'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['yg_sprint_settings']['footer']['contact']['contact_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Contact Title'),
    '#description' => t('Please enter footer contact title'),
    '#default_value' => theme_get_setting('contact_title'),
    '#required' => TRUE,
  ); 
  $address = theme_get_setting('address');
  $form['yg_sprint_settings']['footer']['contact']['address'] = array(
    '#type' => 'text_format',
    '#title' => t('Address'),
    '#description' => t('Please enter address'),
    '#default_value' => $address['value'],
    '#foramt'        => $address['format'],
  );
  $form['yg_sprint_settings']['footer']['contact']['email'] = array(
    '#type' => 'email',
    '#title' => t('Email'),
    '#description' => t('Please enter email-id'),
    '#default_value' => theme_get_setting('email'),
  );
  $form['yg_sprint_settings']['footer']['contact']['phone'] = array(
    '#type' => 'textfield',
    '#title' => t('Phone Number'),
    '#description' => t('Please enter phone number'),
    '#default_value' => theme_get_setting('phone'),
  );
    
}
 
