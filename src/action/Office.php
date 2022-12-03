<?php

namespace OpenIM\action;

use OpenIM\help\Url;
use OpenIM\help\Utils;

class Office
{
    public function commentOneWorkMoment(string $token): array
    {
        return Utils::send(Url::$commentOneWorkMoment, [], '失败', $token);
    }

    public function createOneWorkMoment(string $token): array
    {
        return Utils::send(Url::$createOneWorkMoment, [], '失败', $token);
    }

    public function deleteComment(string $token): array
    {
        return Utils::send(Url::$deleteComment, [], '失败', $token);
    }

    public function deleteOneWorkMoment(string $token): array
    {
        return Utils::send(Url::$deleteOneWorkMoment, [], '失败', $token);
    }

    public function getUserFriendWorkMoments(string $token): array
    {
        return Utils::send(Url::$getUserFriendWorkMoments, [], '失败', $token);
    }

    public function getUserWorkMoments(string $token): array
    {
        return Utils::send(Url::$getUserWorkMoments, [], '失败', $token);
    }

    public function getWorkMomentById(string $token): array
    {
        return Utils::send(Url::$getWorkMomentById, [], '失败', $token);
    }

    public function likeOneWorkMoment(string $token): array
    {
        return Utils::send(Url::$likeOneWorkMoment, [], '失败', $token);
    }
}