<?php

$args = array(
    'show_option_all' => '',
    'orderby' => 'name',
    'order' => 'ASC',
    'style' => 'list',
    'show_count' => 0,
    'hide_empty' => 1,
    'use_desc_for_title' => 1,
    'child_of' => 0,
    'feed' => '',
    'feed_type' => '',
    'feed_image' => '',
    'exclude' => '',
    'exclude_tree' => '',
    'include' => '',
    'hierarchical' => 1,
    'title_li' => null,
    'show_option_none' => __('No categories'),
    'number' => null,
    'echo' => 1,
    'depth' => 0,
    'current_category' => 0,
    'pad_counts' => 0,
    'taxonomy' => 'category',
    'walker' => null
);


add_theme_support('post-thumbnails');
set_post_thumbnail_size(50, 50, true); // Normal post thumbnails
add_image_size('single-post-thumbnail', 147, 100); // Permalink thumbnail size

add_filter('show_admin_bar', '__return_false');


?>