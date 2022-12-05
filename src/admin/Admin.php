<?php

namespace OpenIM\admin;

use OpenIM\help\AdminUrl;
use OpenIM\help\Url;
use OpenIM\help\Utils;

class Admin
{
    /**
     * 管理员登录
     * @return array
     */
    public function login(): array
    {
        return Utils::send(AdminUrl::$login, ['adminID' => 'openIMAdmin'], '管理员登录出错','',true);
    }
}