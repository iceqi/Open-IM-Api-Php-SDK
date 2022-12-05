<?php

namespace OpenIM\action;

use OpenIM\help\Url;
use OpenIM\help\Utils;

class Msg
{
    public function batchSendMsg(string $token, string $sendID, string $senderNickname, string $senderFaceURL, int $sessionType, int $contentType, string $content): array
    {
        $data = [
            'senderPlatformID' => 0,
            'sendID' => $sendID,
            'senderNickname' => $senderNickname,
            'senderFaceURL' => $senderFaceURL,
            'sessionType' => $sessionType,
            'contentType' => $contentType,
            'content' => ['text' => $content]
        ];
        return Utils::send(Url::$batchSendMsg, [], '失败', $token);
    }

    public function clearMsg(string $token): array
    {
        return Utils::send(Url::$clearMsg, [], '失败', $token);
    }

    public function delMsg(string $token): array
    {
        return Utils::send(Url::$delMsg, [], '失败', $token);
    }

    /**
     * 管理员发送消息
     * @param string $token
     * @param string $sendID
     * @param string $senderFaceURL
     * @param string $senderNickname
     * @param string $content
     * @param string $recvID
     * @return array
     */
    public function manageSendMsg(string $token, string $sendID, string $senderFaceURL, string $senderNickname, string $content, string $recvID): array
    {
        $data = [
            'senderPlatformID' => 0,
            'sendID' => $sendID,
            'senderFaceURL' => $senderFaceURL,
            'senderNickname' => $senderNickname,
            'contentType' => 101,
            'content' => ['text' => $content],
            'recvID' => $recvID,
            'SessionType' => 1
        ];
        return Utils::send(Url::$manageSendMsg, $data, '发送消息失败', $token);
    }

    public function getAllConversations(string $token): array
    {
        return Utils::send(Url::$getAllConversations, [], '失败', $token);
    }

    public function getConversation(string $token): array
    {
        return Utils::send(Url::$getConversation, [], '失败', $token);
    }

    public function getConversations(string $token): array
    {
        return Utils::send(Url::$getConversations, [], '失败', $token);
    }
}