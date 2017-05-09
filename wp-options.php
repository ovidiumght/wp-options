<?php
/**
 * Plugin Name:     Wp Options
 * Plugin URI:      http://thesolidphp.com
 * Description:     Simple plugin to exemplify creating a WordPress plugin using Angular 2
 * Author:          Ovidiu Maghetiu <ovidiumght@gmail.com>
 * Author URI:      http://thesoildphp.com
 * Text Domain:     wp-options
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Wp_Options
 */

function wpoptions_menu() {
    add_menu_page( 'WP Options Menu Page',
        'WP Options',
        'manage_options', 'wpo/options', 'wpoptions_content', 'dashicons-tickets', 6  );
}

function wpoptions_content(){
    echo "
        <app-root></app-root>
        <script type=\"text/javascript\" src=\"http://localhost:4200/inline.bundle.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:4200/polyfills.bundle.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:4200/styles.bundle.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:4200/vendor.bundle.js\"></script>
        <script type=\"text/javascript\" src=\"http://localhost:4200/main.bundle.js\"></script>";
}

add_action('admin_menu', 'wpoptions_menu');