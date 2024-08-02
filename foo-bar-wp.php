<?php
/**
 * Plugin Name: Foo Bar WP
 * Plugin URI: https://example.com
 * Description: Custom plugin.
 * Version: 0.1.0
 * Author: WordPress Team
 * Author URI: https://make.wordpress.org/plugins/
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: foo-bar-wp
 */

add_action(
  'init',
  function () {
    $number = mt_rand( 10, 100 );
    echo $number;

    // By default I am not that bad. Only addon tells me such.
    echo 'I am bad';

    $qargs = array(
      'post_type'      => 'post',
      'post_status'    => 'publish',
      'posts_per_page' => 1000,
      'no_found_rows'  => true,
    );
  }
);
