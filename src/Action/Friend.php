<?php

namespace OpenIM\action;

use OpenIM\help\Url;
use OpenIM\help\Utils;

class Friend
{
    /**
     * 添加黑名单
     * @param string $token
     * @param string $fromUserID
     * @param string $toUserID
     * @return array
     */
    public function addBlack(string $token, string $fromUserID, string $toUserID): array
    {
        $data = ['fromUserID' => $fromUserID, 'toUserID' => $toUserID];
        return Utils::send(Url::$addBlack, $data, '添加黑名单错误', $token);
    }

    /**
     * 添加好友
     * @param string $token
     * @param string $fromUserID
     * @param string $toUserID
     * @param string $reqMsg
     * @return array
     */
    public function addFriend(string $token, string $fromUserID, string $toUserID, string $reqMsg): array
    {
        $data = ['fromUserID' => $fromUserID, 'toUserID' => $toUserID, 'reqMsg' => $reqMsg];
        return Utils::send(Url::$addFriend, $data, '添加好友错误', $token);
    }

    /**
     * 同意/拒绝好友请求
     * @param string $token
     * @param string $fromUserID
     * @param string $toUserID
     * @param string $handleMsg
     * @param int $flag
     * @return array
     */
    public function addFriendResponse(string $token, string $fromUserID, string $toUserID, string $handleMsg, int $flag): array
    {
        $data = [
            'fromUserID' => $fromUserID,
            'toUserID' => $toUserID,
            'handleMsg' => $handleMsg,
            'flag' => $flag
        ];
        return Utils::send(Url::$addFriendResponse, $data, '同意/拒绝好友请求错误', $token);
    }

    /**
     * 删除好友
     * @param string $token
     * @param string $fromUserID
     * @param string $toUserID
     * @return array
     */
    public function deleteFriend(string $token, string $fromUserID, string $toUserID): array
    {
        $data = ['fromUserID' => $fromUserID, 'toUserID' => $toUserID];
        return Utils::send(Url::$deleteFriend, $data, '删除好友错误', $token);
    }

    /**
     * 获取黑名单列表
     * @param string $token
     * @param string $fromUserID
     * @return array
     */
    public function getBlackList(string $token, string $fromUserID): array
    {
        return Utils::send(Url::$getBlackList, ['fromUserID' => $fromUserID], '获取黑名单列表错误', $token);
    }

    /**
     * 获取好友申请列表
     * @param string $token
     * @param string $fromUserID
     * @return array
     */
    public function getFriendApplyList(string $token, string $fromUserID): array
    {
        return Utils::send(Url::$getFriendApplyList, ['fromUserID' => $fromUserID], '获取好友申请列表错误', $token);
    }

    /**
     * 获取用户的好友列表
     * @param string $token
     * @param string $fromUserID
     * @return array
     */
    public function getFriendList(string $token, string $fromUserID): array
    {
        return Utils::send(Url::$getFriendList, ['fromUserID' => $fromUserID], '获取用户的好友列表错误', $token);
    }

    /**
     * 获取自己的好友申请列表
     * @param string $token
     * @param string $fromUserID
     * @return array
     */
    public function getSelfFriendApplyList(string $token, string $fromUserID): array
    {
        return Utils::send(Url::$getSelfFriendApplyList, ['fromUserID' => $fromUserID], '获取自己的好友申请列表错误', $token);
    }

    /**
     * 批量加好友
     * @param string $token
     * @param string $fromUserID
     * @param array $friendUserIDList
     * @return array
     */
    public function importFriend(string $token, string $fromUserID, array $friendUserIDList = []): array
    {
        $data = ['fromUserID' => $fromUserID, 'friendUserIDList' => $friendUserIDList];
        return Utils::send(Url::$importFriend, $data, '批量加好友错误', $token);
    }

    /**
     * 检查用户之间是否为好友
     * @param string $token
     * @param string $fromUserID
     * @param string $toUserID
     * @return array
     */
    public function isFriend(string $token, string $fromUserID, string $toUserID): array
    {
        $data = ['fromUserID' => $fromUserID, 'toUserID' => $toUserID];
        return Utils::send(Url::$isFriend, $data, '检查用户之间是否为好友错误', $token);
    }

    /**
     * 把用户移除黑名单
     * @param string $token
     * @param string $fromUserID
     * @param string $toUserID
     * @return array
     */
    public function removeBlack(string $token, string $fromUserID, string $toUserID): array
    {
        $data = ['fromUserID' => $fromUserID, 'toUserID' => $toUserID];
        return Utils::send(Url::$removeBlack, $data, '把用户移除黑名单错误', $token);
    }

    /**
     * 设置好友备注
     * @param string $token
     * @param string $fromUserID
     * @param string $toUserID
     * @param string $remark
     * @return array
     */
    public function setFriendRemark(string $token, string $fromUserID, string $toUserID, string $remark): array
    {
        $data = ['fromUserID' => $fromUserID, 'toUserID' => $toUserID, 'remark' => $remark];
        return Utils::send(Url::$setFriendRemark, $data, '设置好友备注错误', $token);
    }
}