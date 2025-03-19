<?php
namespace app\controller;

use think\Response;

class Menu
{
    public function getData()
    {
        // 静态菜单数据
       // 正确加载配置文件
        $menuConfig = include config_path() . 'menudata.php';
        return json(  $menuConfig);
    }
}