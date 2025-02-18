<?php
/**
 * Plugin Name: Wandumi Books Plugin
 * Description: A simple plugin for managing books with a custom post type and taxonomy.
 * Version: 1.0
 * Author: Wandumi Sichali
 * Text Domain: my-wandumi-books-plugin
 */

defined('ABSPATH') || exit;

require_once plugin_dir_path(__FILE__) . 'includes/class-wandumi-books-post-type.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-wandumi-books-taxonomy.php';

function mbp_init() {
    $book_post_type = new Wandumi_Books_Post_Type();
    $book_post_type->register();

    $book_taxonomy = new Wandumi_Books_Taxonomy();
    $book_taxonomy->register();
}

add_action('init', 'mbp_init');
