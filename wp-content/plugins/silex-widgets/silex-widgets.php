<?php
/*
Plugin Name: Silex Widgets
Plugin URI: http://silex-consulting.com/
Description: Silex widgets
Version: 1.0.0
*/

function widget1_render() {
?>
  <li id="splash" class='widget widget_splash'>
    <h2><span>Open thinking</span></h2>
    <img src="<?php bloginfo('template_directory'); ?>/image/sr_splash_underlay.png" width="276" alt="" />
  </li>
<?php
}

function silexWidget1_init() {
  wp_register_sidebar_widget('sw1', 'Silex Widget 1', 'widget1_render');
}

add_action("plugins_loaded", "silexWidget1_init");