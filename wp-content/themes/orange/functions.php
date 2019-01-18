<?php
// widget
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'id' => 'sidebar-1',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="widget_title">',
        'after_title' => '</h2>',
    )
);

// thumbnail
add_theme_support('post-thumbnails');
set_post_thumbnail_size(300, 200, true);
?>