<?php
function shynh_post_types() {  
  // Blog Post Type
  register_post_type('blog', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions'),
    'rewrite' => array('slug' => 'blogs'),
    'taxonomies' => array('blog-category'),
    'has_archive' => true,
    'hierarchical' => false,
    'public' => true,
    'labels' => array(
      'name' => 'Blogs',
      'add_new_item' => 'Add New Blog',
      'edit_item' => 'Edit Blog',
      'all_items' => 'All Blogs',
      'singular_name' => 'Blog'
    ),
    'menu_icon' => 'dashicons-text-page'
  ));
  
}
add_action('init', 'shynh_post_types');

function shynh_taxonomies() {
  // Blog Taxonomy
  $labels = array(
    'name'              => _x( 'Categories', 'taxonomy general name', 'textdomain' ),
    'singular_name'     => _x( 'Category', 'taxonomy singular name', 'textdomain' ),
    'search_items'      => __( 'Search Categories', 'textdomain' ),
    'all_items'         => __( 'All Categories', 'textdomain' ),
    'parent_item'       => __( 'Parent Category', 'textdomain' ),
    'parent_item_colon' => __( 'Parent Category:', 'textdomain' ),
    'edit_item'         => __( 'Edit Category', 'textdomain' ),
    'update_item'       => __( 'Update Category', 'textdomain' ),
    'add_new_item'      => __( 'Add New Category', 'textdomain' ),
    'new_item_name'     => __( 'New Category Name', 'textdomain' ),
    'menu_name'         => __( 'Category', 'textdomain' ),
  );
  
  register_taxonomy('blog-category', array('blog'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'blog-category'),
));

}
add_action('init', 'shynh_taxonomies', 0);