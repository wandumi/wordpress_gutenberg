<?php

/**
 * Plugin Name: Wandumi Bookslists Block
 * Description: A custom Gutenberg block for viewing saved books.
 * Version: 1.0
 * Author: Wandumi Sichali
 */

function bookslist_custom_block_script_register(){
    wp_enqueue_script(
        'book-list',
        plugin_dir_url(__FILE__).'books-list.js',
        array('wp-blocks', 'wp-editor', 'wp-components', 'wp-i18n', 'wp-element'),true
    );

}

add_action('enqueue_block_editor_assets','bookslist_custom_block_script_register');

function render_books_list_block() {
    $books = get_posts(array(
        'post_type' => 'books',
        'posts_per_page' => 10
    ));

    if (empty($books)) {
        return '<p>No books found.</p>';
    }

    $output = '<div class="books-list-block">';
    $output .= '<h3>List of Books:</h3>';
    $output .= '<ul>';
    
    foreach ($books as $book) {
        $output .= '<li>' . esc_html(get_the_title($book)) . '</li>';
    }

    $output .= '</ul>';
    $output .= '</div>';

    return $output;
}

function register_books_list_block() {
    register_block_type('books-list/custom-block', array(
        'editor_script'   => 'books-list-block-js',
        'render_callback' => 'render_books_list_block', 
    ));
}
add_action('init', 'register_books_list_block');
