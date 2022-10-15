<?php

if(!defined ('ABSPATH')) exit;

//---------------------------------styles und scripts


function advisors_fronted_styles() {
    wp_enqueue_style('tabelle_css', plugins_url('../public/css/tabelle.css', __FILE__) );

    wp_enqueue_script ('highstock', plugins_url('../public/js/lib/highstock.js', __FILE__) );
    wp_enqueue_script ('highstock-data', plugins_url('../public/js/lib/data.js', __FILE__) );

    wp_enqueue_script ('chart-ajax', plugins_url('../public/js/chart-ajax.js', __FILE__),array('jquery'), '1', true );

    wp_enqueue_script ('tabelle-ajax', plugins_url('../public/js/tabelle-ajax.js', __FILE__),array('jquery'), '1', true );

    wp_localize_script ('tabelle-ajax', 'tabelle_ajax_object', array(
      'ajax_url' => admin_url('admin-ajax.php')
    ));

  }
  add_action ('wp_enqueue_scripts', 'advisors_fronted_styles');
