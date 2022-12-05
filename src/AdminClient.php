<?php

namespace OpenIM;

use OpenIM\admin\Admin;
use OpenIM\help\Config;

class AdminClient
{
    /**
     * 管理员接口
     * @var Admin
     */
    public $admin;

    public function __construct($config)
    {
        Config::setConfig($config);

        $this->admin = new Admin();
    }
}