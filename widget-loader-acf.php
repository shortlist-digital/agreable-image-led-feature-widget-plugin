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
      'key' => $key . '_post',
      'label' => 'Choose a post to feature',
      'name' => 'post',
      'type' => 'post_object',
      'post_type' => $post_types,
      'return_format' => 'object',
      'ui' => 1,
    ),
    array (
      'key' => $key . '_lists',
      'label' => 'Or choose a list',
      'name' => 'lists',
      'type' => 'post_object',
      'post_type' => array (
        0 => 'list',
      ),
      'return_format' => 'object',
	  'instructions' => 'If you select a list, the most recent published post in that list will be featured',
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
