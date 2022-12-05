<?php

namespace OpenIM\help;

class AdminUrl
{
    /**
     * 管理员登录
     * @var string
     */
    static $login = '/cms/admin/login';

    /**
     * 生成后台地址
     * @param string $path
     * @return string
     */
    public static function buildUrl(string $path): string
    {
        return Config::getAdminHost() . $path;
    }
}