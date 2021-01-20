<?php

use SBC\Helper;
/*
 * Plugin Name: WP The Best
 * Text Domain: sbc
 */
require_once __DIR__ . '/vendor/autoload.php';

define('SBC_PLUGIN_DIR', plugin_dir_path(__FILE__));
new Helper();

/**
 * Registers the plugin migrations
 * @return void
 */
function my_plugin_register_migrations() {

    var_dump(defined('WP_CLI') && WP_CLI);
    // Boot the CLI interface
    if(!class_exists('\IgniteKit\WP\Migrations\CLI\Boot')) {
        return;
    }
    \IgniteKit\WP\Migrations\CLI\Boot::start();

    // Register the migrations table migration
    \SBC\Database\CreateMigrationsTable::register();

    // Register the other migrations
    // NOTE: The squence is important!
    \SBC\Database\Migrations\CreateFruitsTable::register();
    // ... other

}
add_action('plugins_loaded', 'my_plugin_register_migrations');


