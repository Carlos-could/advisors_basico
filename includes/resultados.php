<?php

if(!defined ('ABSPATH')) exit;


function funciona() {


    header('Content-type: application/json');
    echo json_encode();
    die();

}

add_action('wp_ajax_nopriv_funciona', 'funciona');
add_action('wp_ajax_funciona', 'funciona');