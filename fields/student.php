<?php

declare(strict_types=1);

// Add field group in acf plugin
if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'Student info',
        'title' => 'Student info',
        'fields' => array(
            array(
                'key' => 'email',
                'label' => 'Email',
                'name' => 'email',
                'type' => 'email',
                'prefix' => '',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array(
                'key' => 'github_profile',
                'label' => 'Github profile',
                'name' => 'github_profile',
                'type' => 'url',
                'prefix' => '',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            )
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'student',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'side',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
    ));

endif;
