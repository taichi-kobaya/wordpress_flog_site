<?php
add_action('init', function(){
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size('150,150,true');
});
