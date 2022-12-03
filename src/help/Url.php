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
     * 取消禁言群组
     * @var string
     */
    static $cancelMuteGroup = '/group/cancel_mute_group';

    /**
     * 取消禁言群成员
     * @var string
     */
    static $cancelMuteGroupMember = '/group/cancel_mute_group_member';

    /**
     * 创建群组
     * @var string
     */
    static $createGroup = '/group/create_group';

    /**
     * 解散群组
     * @var string
     */
    static $dismissGroup = '/group/dismiss_group';

    /**
     * 获取全部群成员列表
     * @var string
     */
    static $getGroupAllMemberList = '/group/get_group_all_member_list';

    /**
     * 获取群成员信息
     * @var string
     */
    static $getGroupMembersInfo = '/group/get_group_members_info';

    /**
     * 通过群ID列表获取群信息
     * @var string
     */
    static $getGroupsInfo = '/group/get_groups_info';

    /**
     * 获取用户加入群列表
     * @var string
     */
    static $getJoinedGroupList = '/group/get_joined_group_list';

    /**
     * 获取用户收到的加群信息列表
     * @var string
     */
    static $getRecvGroupApplicationList = '/group/get_recv_group_applicationList';

    /**
     * 获取用户加群申请列表
     * @var string
     */
    static $getUserReqGroupApplicationList = '/group/get_user_req_group_applicationList';

    /**
     * 处理加群消息
     * @var string
     */
    static $groupApplicationResponse = '/group/group_application_response';

    /**
     * 将用户拉入群组
     * @var string
     */
    static $inviteUserToGroup = '/group/invite_user_to_group';

    /**
     * 加入群聊
     * @var string
     */
    static $joinGroup = '/group/join_group';

    /**
     * 把用户踢出群组
     * @var string
     */
    static $kickGroup = '/group/kick_group';

    /**
     * 禁言群组
     * @var string
     */
    static $muteGroup = '/group/mute_group';

    /**
     * 禁言群成员
     * @var string
     */
    static $muteGroupMember = '/group/mute_group_member';

    /**
     * 当前用户退出群聊
     * @var string
     */
    static $quitGroup = '/group/quit_group';

    /**
     * 设置群信息
     * @var string
     */
    static $setGroupInfo = '/group/set_group_info';

    /**
     * 修改群成员信息
     * @var string
     */
    static $setGroupMemberInfo = '/group/set_group_member_info';

    /**
     * 转让群主
     * @var string
     */
    static $transferGroup = '/group/transfer_group';

    /**
     * 管理员批量发送群聊单聊消息
     * @var string
     */
    static $batchSendMsg = '/msg/batch_send_msg';

    /**
     * 清空用户消息
     * @var string
     */
    static $clearMsg = '/msg/clear_msg';

    /**
     * 根据seq列表删除消息
     * @var string
     */
    static $delMsg = '/msg/del_msg';

    /**
     * 管理员发送/撤回消息
     * @var string
     */
    static $manageSendMsg = '/msg/manage_send_msg';

    /**
     * 获取用户所有会话
     * @var string
     */
    static $getAllConversations = '/msg/get_all_conversations';

    /**
     * 根据会话ID获取会话
     * @var string
     */
    static $getConversation = '/msg/get_conversation';

    /**
     * 根据会话ID列表获取会话
     * @var string
     */
    static $getConversations = '/msg/get_conversations';

    /**
     * 评论一条工作圈
     * @var string
     */
    static $commentOneWorkMoment = '/office/comment_one_work_moment';
    /**
     * 创建一条工作圈
     * @var string
     */
    static $createOneWorkMoment = '/office/create_one_work_moment';

    /**
     * 删除一条评论
     * @var string
     */
    static $deleteComment = '/office/delete_comment';

    /**
     * 删除一条工作圈
     * @var string
     */
    static $deleteOneWorkMoment = '/office/delete_one_work_moment';

    /**
     * 查询自己大工作圈页面
     * @var string
     */
    static $getUserFriendWorkMoments = '/office/get_user_friend_work_moments';

    /**
     * 查询用户工作圈
     * @var string
     */
    static $getUserWorkMoments = '/office/get_user_work_moments';

    /**
     * 通过ID获取工作圈
     * @var string
     */
    static $getWorkMomentById = '/office/get_work_moment_by_id';

    /**
     * 点赞一条工作圈
     * @var string
     */
    static $likeOneWorkMoment = '/office/like_one_work_moment';

    /**
     * 创建部门
     * @var string
     */
    static $createDepartment = '/organization/create_department';

    /**
     * 创建部门用户
     * @var string
     */
    static $createDepartmentMember = '/organization/create_department_member';

    /**
     * 组织架构导入用户
     * @var string
     */
    static $createOrganizationUser = '/organization/create_organization_user';

    /**
     * 删除部门
     * @var string
     */
    static $deleteDepartment = '/organization/delete_department';

    /**
     * 删除组织架构中某个用户
     * @var string
     */
    static $deleteOrganizationUser = '/organization/delete_organization_user';

    /**
     * 删除部门中某个用户
     * @var string
     */
    static $deleteUserInDepartment = '/organization/delete_user_in_department';

    /**
     * 获取部门中所有成员
     * @var string
     */
    static $getDepartmentMember = '/organization/get_department_member';

    /**
     * 获取子部门列表
     * @var string
     */
    static $getSubDepartment = '/organization/get_sub_department';

    /**
     * 获取部门中的所有用户
     * @var string
     */
    static $getUserInDepartment = '/organization/get_user_in_department';

    /**
     * 更新部门信息
     * @var string
     */
    static $updateDepartment = '/organization/update_department';

    /**
     * 更新组织架构中的用户
     * @var string
     */
    static $updateOrganizationUser = '/organization/update_organization_user';

    /**
     * 更新部门中某个用户
     * @var string
     */
    static $updateUserInDepartment = '/organization/update_user_in_department';

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