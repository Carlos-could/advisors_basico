<?php
if(!defined ('ABSPATH')) exit;

  function edisoft_menu() {
      add_menu_page (
          "Edisoft",
          "Edisoft",
          'manage_options',
          'edisoft_menu',
          'edisoft_page_html',
          plugin_dir_url(__FILE__).'../admin/img/edi_icon.png',
          '2'
      );
  }

  function edisoft_page_html() {
?>
  <div class="wrap" style="text-align: center">
    <img style="width:120px; max-height: 100%; " src=" <?php echo plugin_dir_url(__FILE__).'../admin/img/logo.png' ; ?> ">
    <div class="">
      <p>Die konsolidierte Investmentplattform</p>
    </div>

    <section>
      <p><strong>Kopieren Sie den Shortcode, den Sie zu Ihrer Website hinzufügen möchten, <br>und fügen Sie ihn in den WordPress Widget-Shortcode ein.</strong></p>
      <div style="">
        <h1>Chart</strong></h1>
        <h3>Shortcode Chart:  [advisors_chart]</h3>
        <img style="width:220px; max-height: 100%;" src=" <?php echo plugin_dir_url(__FILE__).'../admin/img/chart.png' ; ?> ">

      </div>
      <div >
        <h1>Tabelle</h1>
        <h3>Shortcode Tabelle:  [advisors_tabelle]</h3>
        <img style="width:220px; max-height: 100%;" src=" <?php echo plugin_dir_url(__FILE__).'../admin/img/tabelle.png' ; ?> ">
      </div>
    </section>

  </div>
<?php
    }

  add_action('admin_menu', 'edisoft_menu') ;
