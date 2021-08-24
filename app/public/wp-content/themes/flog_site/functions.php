<?php
add_action('init', function(){
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size('150,150,true');
});

/* 人気記事一覧
---------------------------------------------------------- */
//記事閲覧数を取得する
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
      return "0 View";
    }
    return $count.' Views';
  }
  //記事閲覧数を保存する
  function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
      $count = 0;
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
    }else{
      $count++;
      update_post_meta($postID, $count_key, $count);
    }
  }
  //headに出力されるタグを削除(閲覧数を重複してカウントするのを防止するため)
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
