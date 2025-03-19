<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

// // 首页路由
// Route::get('/', 'index/index');

// 数据接口（静态）
Route::get('api/menu', 'menu/getData');
// //首页
// Route::get('home', 'home/index');
// //登录
// Route::get('login', 'home/login');
 
// Route::get('think', function () {
//     return 'hello,ThinkPHP6!';
// });

// Route::get('hello/:name', 'index/hello');
// 允许访问的路由
Route::get('/', 'index/index');        // 主框架
Route::get('login', 'login/index');    // 登录页

// Route::get('user', 'user/index');    // 用户页