<?php

/*
Plugin Name: Advisors
Plugin URI:
Description: Die konsolidierte Investmentplattform
Version: 1.0
Author: Carlos
Author URI:
License: GPLv2
*/

function Activar (){
}
function Desactivar (){
}
register_activation_hook(__FILE__, 'Activar');
register_deactivation_hook(__FILE__, 'Desactivar');

//------------------------------------------------------------ Menu admin/img/edi_icon.png
new AdvisorChart;

class AdvisorChart {
    function __construct() {
        add_action('admin_menu', array($this, 'advisor_menu') );
    }
    function advisor_menu() {
        add_menu_page (
            "Advisor's Studio",
            "Advisor's Studio",
            'manage_options',
            'advisor_menu',
            array($this, 'advisor_page_html'),
            plugin_dir_url(__FILE__).'admin/img/edi_icon.png',
            '2'
        );
    }

    function advisor_page_html() {
        ?>
        <div class="wrap" style="text-align: center">
          <h1 style="text-align: center;"><?php echo esc_html( get_admin_page_title() ); ?></h1>
          <p>Die konsolidierte Investmentplattform</p>
          <section>
            <h3>shorcode chart:  <strong>[advisors_chart]</strong></h3>
            <h3>shorcode chart:  <strong>[advisors_tabelle]</strong></h3>
          </section>

        </div>
        <?php
    }
}

/*
* Añade un Shortcode
*/
require_once plugin_dir_path(__FILE__) . 'includes/shortcode.php';


/*
* Añade un Hojas de Estilo y JavaScript
*/
require_once plugin_dir_path(__FILE__) . 'includes/scripts.php';


/*
* Enviar datos Tabelle
*/
require_once plugin_dir_path(__FILE__) . 'includes/response_tabelle.php';

/*
* Enviar datos Chart
*/
require_once plugin_dir_path(__FILE__) . 'includes/response_chart.php';
