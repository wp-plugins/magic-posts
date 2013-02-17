<?php

/*
Plugin Name: Magic Posts
Plugin URI: http://wordpress.org/extend/plugins/magic-posts/
Description: Create Custom Post Types with simple scaffolds.
Version: 0.0.2
Author: Guilherme Baptista
Author URI: http://gbaptista.com
License: MIT
*/

/*

  phpunit test/test_magic-posts.php

  instance      site          init_custom_posts
  admin         admin_menu
  custom_posts  custom_post
  meta_boxes    meta_box      save_meta_boxes
  scaffolds     scaffold

*/

require_once('lib/magic-posts.php');

function Magic_Posts() { return Magic_Posts::instance(); }
add_action('plugins_loaded', 'Magic_Posts');