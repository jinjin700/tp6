<?php
namespace app\controller;
use think\facade\View;
class User{
    public function index(){
        // 获取用户信息
        // $user = session('user');
        // $data = [
        //     'name'=>'张三',
        //     'age'=>18
        // ];
        // return View::fetch('index',$data);
        return View::fetch('index');
    }
}