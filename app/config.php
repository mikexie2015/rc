<?php

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

return [
    'url_route_on' => true,
    'log' => [
        'type' => 'trace', // 支持 socket trace file
    ],
    'default_module' => 'home',
    'session' => [
        'prefix' => 'rc',
        'type' => '',
        'auto_start' => true,
        'expire' => 1800,
    ],
    //默认错误跳转对应的模板文件
    'dispatch_error_tmpl' => ROOT_PATH . 'public/tpl/dispatch_jump.html',
////默认成功跳转对应的模板文件
    'dispatch_success_tmpl' => ROOT_PATH . 'public/tpl/dispatch_jump.html',
    'url_route_on' => true,
    'url_route_must' => FALSE,
    'base_url' => '',
];
