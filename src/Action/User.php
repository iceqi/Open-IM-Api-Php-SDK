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
     * @param string $nickname
     * @param string $faceUrl
     * @param string $phoneNumber
     * @param int $gender
     * @param string $email
     * @param string $ex
     * @param int $birth
     * @return array
     */
    public function updateUserInfo(string $token, string $userId, string $nickname = '', string $faceUrl = '', string $phoneNumber = '', int $gender = 1, string $email = '', string $ex = '', int $birth = 0): array
    {
        $data = [
            'userID' => $userId,
            'nickname' => $nickname,
            'faceURL' => $faceUrl,
            'gender' => $gender,
            'birth' => $birth,
            'phoneNumber' => $phoneNumber,
            'email' => $email,
            'ex' => $ex
        ];
        return Utils::send(Url::$updateUserInfo, $data, '修改用户信息错误', $token);
    }
}