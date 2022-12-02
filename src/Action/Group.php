<?php

namespace OpenIM\action;

use OpenIM\help\Url;
use OpenIM\help\Utils;

class Group
{
    /**
     * 取消禁言群组
     * @param string $token
     * @param string $groupID
     * @return array
     */
    public function cancelMuteGroup(string $token, string $groupID): array
    {
        return Utils::send(Url::$cancelMuteGroup, ['groupID' => $groupID], '取消禁言群组失败', $token);
    }

    /**
     * 取消禁言群成员
     * @param string $token
     * @param string $groupID
     * @param string $userID
     * @return array
     */
    public function cancelMuteGroupMember(string $token, string $groupID, string $userID): array
    {
        return Utils::send(Url::$cancelMuteGroupMember, ['groupID' => $groupID, 'userID' => $userID], '取消禁言群成员失败', $token);
    }

    /**
     * 创建群组
     * @param string $token
     * @param int $groupType
     * @param string $groupID
     * @param string $groupName
     * @param string $faceURL
     * @param string $introduction
     * @param string $notification
     * @param string $ownerUserID
     * @param array $memberList
     * @param string $ex
     * @return array
     */
    public function createGroup(string $token, int $groupType, string $groupID, string $groupName, string $faceURL, string $introduction,
                                string $notification, string $ownerUserID, array $memberList, string $ex = ''): array
    {
        $data = [
            'ex' => $ex,
            'faceURL' => $faceURL,
            'groupID' => $groupID,
            'groupName' => $groupName,
            'groupType' => $groupType,
            'introduction' => $introduction,
            'memberList' => $memberList,
            'notification' => $notification,
            'ownerUserID' => $ownerUserID,
        ];
        return Utils::send(Url::$createGroup, $data, '创建群组失败', $token);
    }

    /**
     * 解散群组
     * @param string $token
     * @param string $groupID
     * @return array
     */
    public function dismissGroup(string $token, string $groupID): array
    {
        return Utils::send(Url::$dismissGroup, ['groupID' => $groupID], '解散群组失败', $token);
    }

    /**
     * 获取全部群成员列表
     * @param string $token
     * @param string $groupID
     * @param int $offset
     * @param int $count
     * @return array
     */
    public function getGroupAllMemberList(string $token, string $groupID, int $offset = 0, int $count = 20): array
    {
        $data = [
            'groupID' => $groupID,
            'offset' => $offset,
            'count' => $count,
        ];
        return Utils::send(Url::$getGroupAllMemberList, $data, '获取全部群成员列表失败', $token);
    }

    /**
     * 获取群成员信息
     * @param string $token
     * @param string $groupID
     * @param array $memberList
     * @return array
     */
    public function getGroupMembersInfo(string $token, string $groupID, array $memberList): array
    {
        return Utils::send(Url::$getGroupMembersInfo, ['groupID' => $groupID, 'memberList' => $memberList], '获取群成员信息失败', $token);
    }

    /**
     * 通过群ID列表获取群信息
     * @param string $token
     * @param array $groupIDList
     * @return array
     */
    public function getGroupsInfo(string $token, array $groupIDList): array
    {
        return Utils::send(Url::$getGroupsInfo, ['groupIDList' => $groupIDList], '通过群ID列表获取群信息失败', $token);
    }

    /**
     * 获取用户加入群列表
     * @param string $token
     * @param string $fromUserID
     * @return array
     */
    public function getJoinedGroupList(string $token, string $fromUserID): array
    {
        return Utils::send(Url::$getJoinedGroupList, ['fromUserID' => $fromUserID], '获取用户加入群列表失败', $token);
    }

    /**
     * 获取用户收到的加群信息列表
     * @param string $token
     * @param string $fromUserID
     * @return array
     */
    public function getRecvGroupApplicationList(string $token, string $fromUserID): array
    {
        return Utils::send(Url::$getRecvGroupApplicationList, ['fromUserID' => $fromUserID], '获取用户收到的加群信息列表失败', $token);
    }

    /**
     * 获取用户加群申请列表
     * @param string $token
     * @param string $userID
     * @return array
     */
    public function getUserReqGroupApplicationList(string $token, string $userID): array
    {
        return Utils::send(Url::$getUserReqGroupApplicationList, ['userID' => $userID], '失败', $token);
    }

    /**
     * 处理加群消息
     * @param string $token
     * @param string $groupID 要处理的群ID
     * @param string $fromUserID 要处理的用户ID
     * @param string $handleMsg 处理结果信息
     * @param int $handleResult 处理结果 1为同意加群 2为拒绝加群
     * @return array
     */
    public function groupApplicationResponse(string $token, string $groupID, string $fromUserID, string $handleMsg, int $handleResult = 1): array
    {
        $data = [
            'groupID' => $groupID,
            'fromUserID' => $fromUserID,
            'handleMsg' => $handleMsg,
            'handleResult' => $handleResult,
        ];
        return Utils::send(Url::$groupApplicationResponse, $data, '处理加群消息失败', $token);
    }

    /**
     * 将用户拉入群组
     * @param string $token
     * @param string $groupID 要拉进的群组ID
     * @param array $invitedUserIDList 要邀请的用户ID列表
     * @param string $reason 原因
     * @return array
     */
    public function inviteUserToGroup(string $token, string $groupID, array $invitedUserIDList, string $reason): array
    {
        $data = [
            'groupID' => $groupID,
            'invitedUserIDList' => $invitedUserIDList,
            'reason' => $reason,
        ];
        return Utils::send(Url::$inviteUserToGroup, $data, '将用户拉入群组失败', $token);
    }

    /**
     * 加入群聊
     * @param string $token
     * @param string $groupID 申请的群ID
     * @param string $reqMessage 申请进群信息
     * @param string $inviterUserID 邀请的用户id
     * @param int $joinSource 加入来源
     * @return array
     */
    public function joinGroup(string $token, string $groupID, string $reqMessage, string $inviterUserID, int $joinSource = 0): array
    {
        $data = [
            'groupID' => $groupID,
            'reqMessage' => $reqMessage,
            'inviterUserID' => $inviterUserID,
            'joinSource' => $joinSource,
        ];
        return Utils::send(Url::$joinGroup, $data, '加入群聊失败', $token);
    }

    /**
     * 把用户踢出群组
     * @param string $token
     * @param string $groupID
     * @param array $kickedUserIDList
     * @param string $reason
     * @return array
     */
    public function kickGroup(string $token, string $groupID, array $kickedUserIDList, string $reason): array
    {
        $data = [
            'groupID' => $groupID,
            'kickedUserIDList' => $kickedUserIDList,
            'reason' => $reason,
        ];
        return Utils::send(Url::$kickGroup, $data, '把用户踢出群组失败', $token);
    }

    /**
     * 禁言群组
     * @param string $token
     * @param string $groupID
     * @return array
     */
    public function muteGroup(string $token, string $groupID): array
    {
        return Utils::send(Url::$muteGroup, ['groupID' => $groupID], '禁言群组失败', $token);
    }

    /**
     * 禁言群成员
     * @param string $token
     * @param string $groupID
     * @param string $userID
     * @param int $mutedSeconds
     * @return array
     */
    public function muteGroupMember(string $token, string $groupID, string $userID, int $mutedSeconds = 0): array
    {
        $data = ['groupID' => $groupID, 'userID' => $userID, 'mutedSeconds' => $mutedSeconds];
        return Utils::send(Url::$muteGroupMember, $data, '禁言群成员失败', $token);
    }

    /**
     * 当前用户退出群聊
     * @param string $token
     * @param string $groupID
     * @return array
     */
    public function quitGroup(string $token, string $groupID): array
    {
        return Utils::send(Url::$quitGroup, ['groupID' => $groupID], '退出群聊失败', $token);
    }

    /**
     * 设置群信息
     * @param string $token
     * @param string $groupID 要修改的群ID
     * @param string $groupName
     * @param string $notification
     * @param string $introduction
     * @param int $needVerification 加群验证 0为申请需要同意 邀请直接进 1为所有人进群需要验证，除了群主管理员邀请进群 2为直接进群
     * @return array
     */
    public function setGroupInfo(string $token, string $groupID, string $groupName, string $faceURL, string $notification, string $introduction,
                                 int    $lookMemberInfo = 0, int $needVerification = 0, int $applyMemberFriend = 0, string $ex = ''): array
    {
        $data = [
            'applyMemberFriend' => $applyMemberFriend,
            'ex' => $ex,
            'faceURL' => $faceURL,
            'groupID' => $groupID,
            'groupName' => $groupName,
            'introduction' => $introduction,
            'notification' => $notification,
            'lookMemberInfo' => $lookMemberInfo,
            'needVerification' => $needVerification,
        ];
        return Utils::send(Url::$setGroupInfo, $data, '设置群信息失败', $token);
    }

    /**
     * 修改群成员信息
     * @param string $token
     * @param string $userID
     * @param string $groupID
     * @param int $roleLevel
     * @param string $nickName
     * @param string $faceURL
     * @param string $ex
     * @return array
     */
    public function setGroupMemberInfo(string $token, string $userID, string $groupID, int $roleLevel = 1, string $nickName = '', string $faceURL = '', string $ex = ''): array
    {
        $data = [
            'groupID' => $groupID,
            'userID' => $userID,
            'roleLevel' => $roleLevel,
            'nickname' => $nickName,
            'userGroupFaceUrl' => $faceURL,
            'ex' => $ex
        ];
        return Utils::send(Url::$setGroupMemberInfo, $data, '修改群成员信息失败', $token);
    }

    /**
     * 转让群主
     * @param string $token
     * @param string $groupID
     * @param string $oldOwnerUserID
     * @param string $newOwnerUserID
     * @return array
     */
    public function transferGroup(string $token, string $groupID, string $oldOwnerUserID, string $newOwnerUserID): array
    {
        $data = ['groupID' => $groupID, 'oldOwnerUserID' => $oldOwnerUserID, 'newOwnerUserID' => $newOwnerUserID];
        return Utils::send(Url::$transferGroup, $data, '转让群主失败', $token);
    }
}