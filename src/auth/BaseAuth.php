<?php
// +----------------------------------------------------------------------
// |  User: Yangchi  |  Email:17734027950@189.com  | Time:2017/12/28 17:19
// +----------------------------------------------------------------------
namespace Yangapi\auth;

use Yangapi\exception\UnauthorizedException;
use think\Exception;
use think\Request;

class BaseAuth
{
    /**
     * 执行授权验证
     * @param $auth
     * @return bool
     * @throws AuthException
     * @throws Exception
     */
    public static function auth($auth)
    {
        $request = Request::instance();
        return $auth->authenticate($request);
    }

}