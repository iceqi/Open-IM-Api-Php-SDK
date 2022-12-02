<?php

namespace OpenIM;

use OpenIM\action\Auth;
use OpenIM\action\Friend;
use OpenIM\action\Group;
use OpenIM\action\Msg;
use OpenIM\action\Office;
use OpenIM\action\Organization;
use OpenIM\action\User;
use OpenIM\help\Config;

class Client
{
    /**
     * 鉴权接口
     * @var Auth
     */
    public $auth;

    /**
     * 好友相关
     * @var Friend
     */
    public $friend;

    /**
     * @var Group
     */
    public $group;

    /**
     * @var Msg
     */
    public $msg;

    /**
     * @var Office
     */
    public $office;

    /**
     * @var Organization
     */
    public $organization;

    /**
     * @var User
     */
    public $user;

    public function __construct($config)
    {
        Config::setConfig($config);

        $this->auth = new Auth();

        $this->friend = new Friend();

        $this->group = new Group();

        $this->msg = new Msg();

        $this->office = new Office();

        $this->organization = new Organization();

        $this->user = new User();
    }
}