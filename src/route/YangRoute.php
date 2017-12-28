<?php
// +----------------------------------------------------------------------
// | User: Yangchi  |  17734027950@189.cn | Time:2017/12/28 17:22
// +----------------------------------------------------------------------
namespace Yangapi\route;

use  think\App;
use think\Route;
use think\Request;
use  Yangapi\controller\Wiki;

class DawnRoute
{
    public static function wiki()
    {
        $pathInfo = Request::instance()->pathinfo();

        if (false === stripos($pathInfo, 'wiki')) {
            // 请求方式非法 则用默认请求方法
            return;
        }
        Route::any('wiki/apiInfo', function () {
            $controller = new Wiki();
            return App::invokeMethod([$controller, 'apiInfo']);
        });
        Route::any('wiki', function () {
            $controller = new Wiki();
            return App::invokeMethod([$controller, 'index']);
        });
    }
}