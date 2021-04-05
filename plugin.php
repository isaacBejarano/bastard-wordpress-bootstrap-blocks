<?php

/**
 * Plugin Name: Bastard Blocks
 * Author: Isaac Bejarano
 * Version: 1.1.0
 * License: MIT
 */

function loadBastardBlocks() {
   wp_register_script( 
    'bastard-blocks', // handler
    plugin_dir_url(__FILE__) . '/js/bastard-blocks.js', // source
    array('wp-blocks', 'wp-i18n', 'wp-editor'), // dependencies
    false, // version
    true // enque in head
  );  

  // Enqueue Scripts
  wp_enqueue_script('bastard-blocks'); 
}

add_action('enqueue_block_editor_assets', 'loadBastardBlocks');
