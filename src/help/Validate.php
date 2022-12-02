<?php

namespace OpenIM\help;

class Validate
{
    /**
     * 验证规则
     * @var string[]
     */
    private static $validateRule = [
        'userID' => 'max:64',
        'fromUserID' => 'max:64',
        'nickname' => 'max:255',
        'faceURL' => 'max:255',
        'gender' => 'in:1,2',
        'toUserID' => 'max:64',
        'groupID' => 'max:64',
        'ownerUserID' => 'max:64',
        'groupName' => 'max:255',
        'introduction' => 'max:255',
        'notification' => 'max:255',
        'groupType' => 'in:0,1',
        'oldOwnerUserID' => 'max:64',
        'newOwnerUserID' => 'max:64',
    ];

    /**
     * 验证数组
     * @param array $array
     * @return array
     * @throws ValidateException
     */
    public static function validateArray(array $array): array
    {
        foreach ($array as $field => $value) {
            foreach (self::$validateRule as $key => $rules) {
                if ($field == $key) {
                    $rules = explode('|', $rules);
                    foreach ($rules as $rule) {
                        $rule = explode(':', $rule);
                        self::{$rule[0]}($field, $value, $rule[1]);
                    }
                }
            }
        }
        return $array;
    }

    /**
     * 长度最大验证
     * @param string $field
     * @param int|string $value
     * @param int $len
     * @return void
     * @throws ValidateException
     */
    private static function max(string $field, $value, int $len)
    {
        if (strlen($value) > $len) {
            throw new ValidateException("参数{$field}长度不能超过{$len}位");
        }
    }

    /**
     * 类型in验证
     * @param string $field
     * @param int|string $value
     * @param string $in
     * @return void
     * @throws ValidateException
     */
    private static function in(string $field, $value, string $in)
    {
        if (!in_array($value, explode(',', $in))) {
            throw new ValidateException("参数{$field}类型必须为{$in},当前值{$value}");
        }
    }
}