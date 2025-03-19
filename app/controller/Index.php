<?php
namespace app\controller;

use think\facade\View;

class Index
{
    public function Index()
    {
        return View::fetch();
    }
}