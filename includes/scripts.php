<?php

if(!defined ('ABSPATH')) exit;

//--------------------------------------------------------------- styles

function advisors_fronted_styles() {
    wp_enqueue_script ('chart-js', plugins_url('../public/js/lib/chartjs.min.js', __FILE__) );
    wp_enqueue_script ('datos-chart-js', plugins_url('../public/js/datos_chart.js', __FILE__),array('jquery'), '1', true );


    // wp_register_script('tabla-ajax', get_template_directory_uri().'public/js/tabla-ajax.js',array('jquery'), '1', true);
    // wp_enqueue_script ('tabla-ajax');
    wp_enqueue_script ('tabla-ajax', plugins_url('../public/js/tabla-ajax.js', __FILE__),array('jquery'), '1', true );

    wp_localize_script ('tabla-ajax', 'admin_url', array(
      'ajax_url' => admin_url('admin-ajax.php')
    ));

  }
  add_action ('wp_enqueue_scripts', 'advisors_fronted_styles');
