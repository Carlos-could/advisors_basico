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
        <p><strong>Kopieren Sie den Shortcode, den Sie zu Ihrer Website hinzufügen möchten, und fügen Sie ihn in den WordPress Widget-Shortcode ein.</strong></p>
        <div style="">
          <h1>Chart</strong></h1>
          <h3>Shortcode Chart:  [advisors_chart]</h3>
          <img style="max-width:20%" src=" http://localhost/miwordpress/wp-content/plugins/advisors_basico/admin/img/chart.png ">
        </div>
        <div >
          <h1>Tabelle</h1>
          <h3>Shortcode Tabelle:  [advisors_tabelle]</h3>
          <img style="max-width:20%" src=" http://localhost/miwordpress/wp-content/plugins/advisors_basico/admin/img/tabelle.png ">
        </div>
      </section>

    </div>
<?php
    }
}
