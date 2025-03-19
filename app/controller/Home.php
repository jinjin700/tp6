<?php
namespace app\controller;

use think\facade\View;

class Home{
    public function index(){
 
    
    
        // return 'hello';
        return View::fetch();
    }
    public function login(){
        // return 'hello';
        return View::fetch('login');
    }
}