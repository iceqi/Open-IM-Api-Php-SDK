# OpenIM接口SDK
> https://github.com/orgs/OpenIMSDK 
> 
> https://doc.rentsoft.cn:8000/swagger/index.html#/ 接口文档

### 安装

```
composer require adcbguo/Open-IM-Api-Php-SDK
```

### 使用
```
$IM = new Client(['host' => env('IM.API_HOST'),'secret'=>env('IM.SECRET')]);
var_dump($IM->auth->userRegister('uid', '郭小凡'));
var_dump($IM->auth->parseToken('tokenStr'));
var_dump($IM->auth->forceLogout('tokenStr','4984984'));
var_dump($IM->auth->userToken('4984984'));
```