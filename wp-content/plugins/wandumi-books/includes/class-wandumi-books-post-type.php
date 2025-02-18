<?php

class Wandumi_Books_Post_Type {
    public function register() {
        $labels = array(
            'name'               => 'Books',
            'singular_name'      => 'Book',
            'menu_name'          => 'Books',
            'name_admin_bar'     => 'Book',
            'add_new'            => 'Add New',
            'add_new_item'       => 'Add New Book',
            'new_item'           => 'New Book',
            'edit_item'          => 'Edit Book',
            'view_item'          => 'View Book',
            'all_items'          => 'All Books',
            'search_items'       => 'Search Books',
            'parent_item_colon'  => 'Parent Books:',
            'not_found'          => 'No books found.',
            'not_found_in_trash' => 'No books found in Trash.',
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable'=> true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => 'books'),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'supports'           => array('title', 'editor', 'thumbnail'),
            'show_in_rest'       => true,
            'publicly_queryable' => true,
        );

        register_post_type('books', $args);
    }
}
