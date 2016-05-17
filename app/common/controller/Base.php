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
        $user = session('user');
        $uid = session('uid');
        if (!$user || !$uid) {
            echo $this->error('尚未登陆，请登录', url('admin/login/index'));
            exit();
        } else {
            $rule = strtolower(MODULE_NAME . '/' . CONTROLLER_NAME . '/' . ACTION_NAME);
            if (!$this->check($rule, $uid)) {
                $url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
                echo $this->error('你没有操作权限', $url);
                exit();
            }
        }
    }

    final protected function check($rule, $uid) {
        static $auth = null;
        if (!$auth) {
            $auth = new \auth\Auth();
        }
        if (!$auth->check($rule, $uid)) {
            return false;
        }
        return true;
    }

}
