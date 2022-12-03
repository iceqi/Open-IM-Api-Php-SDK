<?php

namespace OpenIM\action;

use OpenIM\help\Url;
use OpenIM\help\Utils;

class Organization
{
    public function createDepartment(string $token): array
    {
        return Utils::send(Url::$createDepartment, [], '失败', $token);
    }

    public function createDepartmentMember(string $token): array
    {
        return Utils::send(Url::$createDepartmentMember, [], '失败', $token);
    }

    public function createOrganizationUser(string $token): array
    {
        return Utils::send(Url::$createOrganizationUser, [], '失败', $token);
    }

    public function deleteDepartment(string $token): array
    {
        return Utils::send(Url::$deleteDepartment, [], '失败', $token);
    }

    public function deleteOrganizationUser(string $token): array
    {
        return Utils::send(Url::$deleteOrganizationUser, [], '失败', $token);
    }

    public function deleteUserInDepartment(string $token): array
    {
        return Utils::send(Url::$deleteUserInDepartment, [], '失败', $token);
    }

    public function getDepartmentMember(string $token): array
    {
        return Utils::send(Url::$getDepartmentMember, [], '失败', $token);
    }

    public function getSubDepartment(string $token): array
    {
        return Utils::send(Url::$getSubDepartment, [], '失败', $token);
    }

    public function getUserInDepartment(string $token): array
    {
        return Utils::send(Url::$getUserInDepartment, [], '失败', $token);
    }

    public function updateDepartment(string $token): array
    {
        return Utils::send(Url::$updateDepartment, [], '失败', $token);
    }

    public function updateOrganizationUser(string $token): array
    {
        return Utils::send(Url::$updateOrganizationUser, [], '失败', $token);
    }

    public function updateUserInDepartment(string $token): array
    {
        return Utils::send(Url::$updateUserInDepartment, [], '失败', $token);
    }
}