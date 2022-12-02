<?php

namespace OpenIM\action;

use OpenIM\help\Url;
use OpenIM\help\Utils;

class Auth
{
    /**
     * 强制登出
     * @param string $token
     * @param string $fromUserID
     * @return array
     */
    public function forceLogout(string $token, string $fromUserID): array
    {
        return Utils::send(Url::$forceLogout, ['fromUserID' => $fromUserID], '强制登出错误', $token);
    }

    /**
     * 解析当前用户token
     * @param string $token
     * @return array
     */
    public function parseToken(string $token): array
    {
        return Utils::send(Url::$parseToken, [], '解析当前用户token错误', $token);
    }

    /**
     * 用户注册
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
    public function userRegister(string $userId, string $nickname = '', string $faceUrl = '', string $phoneNumber = '',
                                 int $gender = 1, string $email = '', string $ex = '', int $birth = 0): array
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
        return Utils::send(Url::$userRegister, $data, '注册IM错误');
    }

    /**
     * 用户登录
     * @param string $userID
     * @return array
     */
    public function userToken(string $userID): array
    {
        return Utils::send(Url::$userToken, ['userID' => $userID], '用户登录错误');
    }
}