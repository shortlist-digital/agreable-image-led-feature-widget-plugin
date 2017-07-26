<?php

$key = 'widget_image_led_feature';
$widgetplacement = self::$config['tab_placement'];
$post_types = get_post_types( array( 'public' => true ) );
unset( $post_types["attachment"] );

$widget_config = array (
  'key' => $key,
  'name' => 'image_led_feature',
  'label' => 'Image led feature',
  'display' => 'block',
  'sub_fields' => array (
    array (
      'key' => $key . '_basic_details_tab',
      'label' => 'Basic Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
    array (
      'key' => $key . '_post_manual',
      'label' => 'Manually insert a post to feature',
      'name' => 'post_manual',
      'type' => 'post_object',
      'post_type' => $post_types,
      'allow_null' => 1,
      'multiple' => 1,
      'return_format' => 'object',
      'ui' => 1,
    ),
    array (
      'key' => $key . '_advanced_details_tab',
      'label' => 'Advanced Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
  ),
);

$widget_config["content-types"] = get_option("options_" . $key . "_available_post_types");
$widget_config["content-sizes"] = array('main'); // main, main-full-bleed, sidebar
