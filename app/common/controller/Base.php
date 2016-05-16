<?php

/*
 * Copyright (c) 2013 rc All rights reserved.
 *  Author: Mike 
 */

namespace app\common\controller;

use think\Controller;
use think\Session;

class Base extends Controller {

    public function _initialize() {
        $name = session('user');
        $uid = session('uid');
        if (!$name || !$uid) {
            echo $this->error('尚未登陆，请登录', url('admin/login/login'));
            exit();
        } else {
            $auth = new \auth\Auth();
            if (!$auth->check($name, $uid)) {
                echo $this->error('你没有操作权限',$_SERVER['HTTP_REFERER']);
                exit();
            }
        }
    }

}
