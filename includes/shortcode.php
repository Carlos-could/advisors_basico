<?php

if(!defined ('ABSPATH')) exit;

//------------------------------------------------------------ shortcode chart

function chart_shortcode_funcion()
{
  ob_start();

  include('html_canva_chart.php');
  $data = ob_get_contents();

  ob_end_clean();

  return $data;
 }

 function chart_shortcode_funcion_init() {
	add_shortcode( 'advisors_chart', 'chart_shortcode_funcion' );
}

add_action( 'init', 'chart_shortcode_funcion_init' );


//------------------------------------------------------------ shortcode tabelle

function tabelle_shortcode_funcion()
{
  ob_start();
  include('html_tabelle.php');
  $data = ob_get_contents();
  ob_end_clean();

  return $data;
 }

 function tabelle_shortcode_funcion_init() {
	add_shortcode( 'advisors_tabelle', 'tabelle_shortcode_funcion');
}

add_action( 'init', 'tabelle_shortcode_funcion_init' );
