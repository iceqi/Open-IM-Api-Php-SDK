<?php

namespace OpenIM\action;

use OpenIM\help\Url;
use OpenIM\help\Utils;

class User
{
    /**
     * 检查列表账户注册状态
     * @param string $token
     * @param array $checkUserIDList
     * @return array
     */
    public function accountCheck(string $token, array $checkUserIDList): array
    {
        return Utils::send(Url::$accountCheck, ['checkUserIDList' => $checkUserIDList], '检查列表账户注册状态错误', $token);
    }

    /**
     * 获取所有用户uid列表
     * @param string $token
     * @return array
     */
    public function getAllUsersUid(string $token): array
    {
        return Utils::send(Url::$getAllUsersUid, [], '获取所有用户uid列表错误', $token);
    }

    /**
     * 获取自己的信息
     * @param string $token
     * @param string $userID
     * @return array
     */
    public function getSelfUserInfo(string $token, string $userID): array
    {
        return Utils::send(Url::$getSelfUserInfo, ['userID' => $userID], '获取自己的信息错误', $token);
    }

    /**
     * 获取用户信息
     * @param string $token
     * @param array $userIDList
     * @return array
     */
    public function getUsersInfo(string $token, array $userIDList): array
    {
        return Utils::send(Url::$getUsersInfo, ['userIDList' => $userIDList], '获取用户信息错误', $token);
    }

    /**
     * 获取用户在线状态
     * @param string $token
     * @param array $userIDList
     * @return array
     */
    public function getUsersOnlineStatus(string $token, array $userIDList): array
    {
        return Utils::send(Url::$getUsersOnlineStatus, ['userIDList' => $userIDList], '获取用户在线状态错误', $token);
    }

    /**
     * 设置全局免打扰
     * @param string $token
     * @param int $globalRecvMsgOpt
     * @return array
     */
    public function setGlobalMsgRecvOpt(string $token, int $globalRecvMsgOpt): array
    {
        return Utils::send(Url::$setGlobalMsgRecvOpt, ['globalRecvMsgOpt' => $globalRecvMsgOpt], '设置全局免打扰错误', $token);
    }

    /**
     * 修改用户信息
     * @param string $token
     * @param string $userId
     * @param array $data
     * @return array
     */
    public function updateUserInfo(string $token, string $userId,array $data): array
    {
//        $data = [
//            'userID' => $userId,
//            'nickname' => 'string',
//            'faceURL' => 'string',
//            'gender' => 1,
//            'birth' => 'string',
//            'phoneNumber' => 'string',
//            'email' => 'string',
//            'ex' => 'string',
//        ];
        $data = array_merge(['userID' => $userId],$data);
        return Utils::send(Url::$updateUserInfo, $data, '修改用户信息错误', $token);
    }
}