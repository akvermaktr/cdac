<?php

function admintheme_form_system_theme_settings_alter(&$form, &$form_state) {

    form_load_include($form_state, 'inc', 'system', 'system.admin');
    $form['small_logo'] = array(
        '#type' => 'managed_file',
        '#title' => t('Small Logo'),
        '#description'   => t("Add Small Logo"),
        '#upload_location' => 'public://',
        //'#required' => true,
        '#default_value' => theme_get_setting('small_logo', 'admintheme'),
    );

    $form['layout_options']= array(
    '#type' => 'fieldset',
    '#title' => t('Layout Options'),
    '#collapsible' => true,
    '#collapsed' => true,
    );
    $form['layout_options']['fixed_layout_options'] = array(
    '#type' => 'checkbox',
    '#title' => t('Fixed layout'),
    '#default_value' => theme_get_setting('fixed_layout_options', 'admintheme'),
    '#description' => t("Activate the fixed layout. You can't use fixed and boxed layouts together"),

    );
    $form['layout_options']['box_layout_options'] = array(
    '#type' => 'checkbox',
    '#title' => t('Boxed Layout'),
    '#default_value' => theme_get_setting('box_layout_options', 'admintheme'),
    '#description' => t("Activate the boxed layout"),

    );
     $form['layout_options']['toggle_sidebar'] = array(
    '#type' => 'checkbox',
    '#title' => t('Toggle Sidebar '),
    '#default_value' => theme_get_setting('toggle_sidebar', 'admintheme'),
    '#description' => t("Toggle the left sidebar's state (open or collapse)"),
    );
     $form['layout_options']['skins'] = array(
    '#type' => 'radios',
    '#title' => t('Select Skins '),
    '#default_value' => theme_get_setting('skins', 'admintheme'),
      '#options' => array(
      1 => 'Blue',
      2 => 'Black',
      3 => 'Purple',
      4 => 'Green',
      5 => 'Red',
      6 => 'Yellow',
      7 => 'Blue Light',
      8 => 'Black Light',
      9 => 'Purple Light',
      10 => 'Green Light',
      11 => 'Red Light',
      12 => 'Yellow Light',
      ),
    );
}
