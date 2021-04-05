<?php

/**
 * Plugin Name: Bastard Blocks
 * Author: Isaac Bejarano
 * Version: 1.0.0_alpha3
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
  
  wp_register_style(
    'bastard-styles', 
    plugin_dir_url(__FILE__) . '/css/bastard-editor-styles.css'    
  );


  // Enqueue Scripts
  wp_enqueue_script('bastard-blocks'); 
  wp_enqueue_style('bastard-styles');
}

add_action('enqueue_block_editor_assets', 'loadBastardBlocks');

