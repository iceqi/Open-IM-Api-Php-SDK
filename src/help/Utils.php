<?php

namespace OpenIM\help;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;

class Utils
{
    /**
     * 生成操作id
     * @return string
     */
    private static function buildOperationID(): string
    {
        return str_replace('.', '', microtime(true));
    }

    /**
     * 发起请求
     * @param string $uri
     * @param array $data
     * @param string $token
     * @return string
     * @throws GuzzleException
     * @throws ValidateException
     */
    private static function request(string $uri, array $data, string $token): string
    {
        $client = new Client();
        $options = [
            RequestOptions::JSON => array_merge(Validate::validateArray($data), [
                'operationID' => self::buildOperationID(),
                'platform' => Config::getPlatform(),
                'secret' => Config::getSecret(),
            ]),
            RequestOptions::HEADERS => [
                'token' => $token,
            ]
        ];
        return $client->post($uri, $options)->getBody()->getContents();
    }

    /**
     * 发送数据
     * @param string $path
     * @param array $data
     * @param string $errMsg
     * @param string $token
     * @return array
     */
    public static function send(string $path, array $data, string $errMsg, string $token = ''): array
    {
        try {
            return json_decode(self::request(Url::buildUrl($path), $data, $token), true);
        } catch (GuzzleException $e) {
            return ['errCode' => $e->getCode(), 'errMsg' => $errMsg];
        } catch (ValidateException $e) {
            return ['errCode' => 400, 'errMsg' => $e->getMessage()];
        }
    }
}