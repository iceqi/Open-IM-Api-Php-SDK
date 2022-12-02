<?php

namespace OpenIM\help;

class Url
{
    /**
     * 强制登出
     * @var string
     */
    static $forceLogout = '/auth/force_logout';

    /**
     * 解析当前用户token
     * @var string
     */
    static $parseToken = '/auth/parse_token';

    /**
     * 用户注册
     * @var string
     */
    static $userRegister = '/auth/user_register';

    /**
     * 用户登录
     * @var string
     */
    static $userToken = '/auth/user_token';

    /**
     * 添加黑名单
     * @var string
     */
    static $addBlack = '/friend/add_black';

    /**
     * 添加好友
     * @var string
     */
    static $addFriend = '/friend/add_friend';

    /**
     * 同意/拒绝好友请求
     * @var string
     */
    static $addFriendResponse = '/friend/add_friend_response';

    /**
     * 删除好友
     * @var string
     */
    static $deleteFriend = '/friend/delete_friend';

    /**
     * 获取黑名单列表
     * @var string
     */
    static $getBlackList = '/friend/get_black_list';

    /**
     * 获取好友申请列表
     * @var string
     */
    static $getFriendApplyList = '/friend/get_friend_apply_list';

    /**
     * 获取用户的好友列表
     * @var string
     */
    static $getFriendList = '/friend/get_friend_list';

    /**
     * 获取自己的好友申请列表
     * @var string
     */
    static $getSelfFriendApplyList = '/friend/get_self_friend_apply_list';

    /**
     * 批量加好友
     * @var string
     */
    static $importFriend = '/friend/import_friend';

    /**
     * 检查用户之间是否为好友
     * @var string
     */
    static $isFriend = '/friend/is_friend';

    /**
     * 把用户移除黑名单
     * @var string
     */
    static $removeBlack = '/friend/remove_black';

    /**
     * 设置好友备注
     * @var string
     */
    static $setFriendRemark = '/friend/set_friend_remark';

    /**
     * 检查列表账户注册状态，并且返回结果
     * @var string
     */
    static $accountCheck = '/user/account_check';

    /**
     * 获取所有用户uid列表
     * @var string
     */
    static $getAllUsersUid = '/user/get_all_users_uid';

    /**
     * 获取自己的信息
     * @var string
     */
    static $getSelfUserInfo = '/user/get_self_user_info';

    /**
     * 获取用户信息
     * @var string
     */
    static $getUsersInfo = '/user/get_users_info';

    /**
     * 获取用户在线状态
     * @var string
     */
    static $getUsersOnlineStatus = '/user/get_users_online_status';

    /**
     * 设置全局免打扰
     * @var string
     */
    static $setGlobalMsgRecvOpt = '/user/set_global_msg_recv_opt';

    /**
     * 修改用户信息
     * @var string
     */
    static $updateUserInfo = '/user/update_user_info';

    /**
     * 生成地址
     * @param string $path
     * @return string
     */
    public static function buildUrl(string $path): string
    {
        return Config::getHost() . $path;
    }
}