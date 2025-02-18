<?php

class Wandumi_Books_Taxonomy {
    public function register() {
        $labels = array(
            'name'              => 'Genres',
            'singular_name'     => 'Genre',
            'search_items'      => 'Search Genres',
            'all_items'         => 'All Genres',
            'parent_item'       => 'Parent Genre',
            'parent_item_colon' => 'Parent Genre:',
            'edit_item'         => 'Edit Genre',
            'update_item'       => 'Update Genre',
            'add_new_item'      => 'Add New Genre',
            'new_item_name'     => 'New Genre Name',
            'menu_name'         => 'Genres',
        );

        $args = array(
            'hierarchical'      => true,  
            'labels'            => $labels,
            'show_ui'           => true,
            'show_in_rest'      => true,  
        );

        register_taxonomy('genres', array('books'), $args);
    }
}
