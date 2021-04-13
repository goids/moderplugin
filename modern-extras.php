<?php
/**
 * Plugin Name: Modern Talent Hub Extra
 * Plugin URI: https://github.com/goids/moderplugin
 * Description: Plugin for load libraries for web site
 * Version: 1.0
 * Author: Goide
 */

add_action('wp_enqueue_scripts', 'moderntalenthub_enqueue_custom_js');
function moderntalenthub_enqueue_custom_js() {
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js', array(), false, true);
    wp_enqueue_script('gsapTextPlugin', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/TextPlugin.min.js', array(), false, true);
    wp_enqueue_script('gsapEasePack', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/EasePack.min.js', array(), false, true);
}