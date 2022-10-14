<?php
if(!defined ('ABSPATH')) exit;

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
            plugin_dir_url(__FILE__).'../admin/img/edi_icon.png',
            '2'
        );
    }

    function advisor_page_html() {
        ?>
        <div class="wrap" style="text-align: center">
          <h1>Advisor's Studio Plugin</h1>
          <p>Die konsolidierte Investmentplattform</p>
          <section>
            <h2>Shortcodes</h2>
            <h3>Chart:  <strong>[advisors_chart]</strong></h3>
            <p>Fügen Sie den folgenden Shortcode ein und das Chart-Grafik wird angezeigt</p>
            <h3>Tabelle: </h3>
            <p>Fügen Sie den folgenden Shortcode ein und die Tabelle wird angezeigt</p>

          </section>

        </div>
        <?php
    }
}
