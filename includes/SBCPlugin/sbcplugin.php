<?php defined('ABSPATH') or die;


// Autoload plugin.
require 'autoload.php';

if (! function_exists('sbcplugin')) {
    /**
     * @return \SBCPlugin\QueryBuilder\QueryBuilderHandler
     */
    function sbcplugin() {
        static $sbcplugin;

        if (! $sbcplugin) {
            global $wpdb;

            $connection = new SBCPlugin\Connection($wpdb, ['prefix' => $wpdb->prefix]);

            $sbcplugin = new \SBCPlugin\QueryBuilder\QueryBuilderHandler($connection);
        }

        return $sbcplugin;
    }
}
