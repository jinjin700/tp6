<?php

namespace app\middleware;

use think\facade\Session;
use think\facade\Request;
use think\Response;

class SimpleAuth
{
    // 不需要权限检查的路由
    protected $except = [
        'login',
        'public/.*' // 假设以public开头的路由都不需要权限检查，这里用正则表达式
    ];

    public function handle($request, \Closure $next): Response
    {
        $currentPath = $request->path();
        $isExcept = false;
        foreach ($this->except as $exceptPath) {
            if ($currentPath === $exceptPath) {
                $isExcept = true;
                break;
            }
            if (preg_match('/^' . $exceptPath . '$/', $currentPath)) {
                $isExcept = true;
                break;
            }
        }
        if ($isExcept) {
            return $next($request);
        }
        // 2. 初始化游客身份
        if (!Session::has('user')) {
            Session::set('user', [
                'id' => 0,
                'name' => '游客',
                'role' => 6
            ]);
        }

        $user = Session::get('user');
        if ($user['role'] < 5) {
            return redirect('/no - permission')->with('msg', '权限不足，禁止访问');
        }

        return $next($request);
    }
}