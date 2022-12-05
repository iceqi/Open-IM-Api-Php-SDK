<?php

namespace OpenIM\help;

class Config
{
    private static $config = [
        'platform' => 1,
        'host' => 'http://127.0.0.1:10002',
        'admin_host' => 'http://127.0.0.1:10006',
        'secret' => 'openIM123',
    ];

    /**
     * 设置配置项
     * @param array $config
     * @return void
     */
    public static function setConfig(array $config)
    {
        self::$config = array_merge(self::$config, $config);
    }

    /**
     * @return string
     */
    public static function getSecret(): string
    {
        return self::$config['secret'];
    }

    /**
     * @return int
     */
    public static function getPlatform(): int
    {
        return self::$config['platform'];
    }

    /**
     * @return string
     */
    public static function getHost(): string
    {
        return self::$config['host'];
    }

    /**
     * @return string
     */
    public static function getAdminHost(): string
    {
        return self::$config['admin_host'];
    }
}