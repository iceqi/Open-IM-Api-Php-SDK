<?php

namespace OpenIM\action;

use OpenIM\help\Url;
use OpenIM\help\Utils;

class Msg
{
    public function batchSendMsg(string $token, string $sendID, string $senderNickname, string $senderFaceURL, int $sessionType, int $contentType,string $content): array
    {
        $data = [
            'senderPlatformID' => 0,
            'sendID' => $sendID,
            'senderNickname' => $senderNickname,
            'senderFaceURL' => $senderFaceURL,
            'sessionType' => $sessionType,
            'contentType'=>$contentType,
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

    public function manageSendMsg(string $token): array
    {
        return Utils::send(Url::$manageSendMsg, [], '失败', $token);
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