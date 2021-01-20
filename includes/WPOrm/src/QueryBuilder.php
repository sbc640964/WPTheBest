<?php

namespace SBC\WPOrm;

class QueryBuilder
{
    protected $query = null;

    public function __construct()
    {
        require_once (SBC_PLUGIN_DIR . 'includes/SBCPlugin/sbcplugin.php');
        $this->query = sbcplugin();
    }

    public function __call($method, $params)
    {
        return call_user_func_array([$this->query, $method], $params);
    }
}
