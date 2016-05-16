<?php

/*
 * Copyright (c) 2013 rc All rights reserved.
 *  Author: Mike 
 */

namespace app\admin\controller;

use think\Session;
use think\Controller;

class Login extends Controller {

    public function login() {
        if ($_POST) {
            $user = m('user')->where('username', input('username'))->find();
            if ($user) {
                if (input('password') == $user['pwd']) {
                    $update = [
                        'logintime' => time(),
                        'loginip' => getClientIp(),
                    ];
                    session('uid', $user['uid']);
                    session('user', $user['username']);
                    session('ip', $update['loginip']);
                    session('time', $update['logintime']);
                    m('user')->where('username', $user['username'])->update($update);
                    return $this->success('登陆成功', url('index/index'));
                } else {
                    return $this->error('密码错误', 'login');
                }
            } else {
                return $this->error('用户不存在', 'login');
            }
        } else {
            return $this->fetch();
        }
    }

    public function logout() {
        if (Session::get()) {
            Session::clear();
        }
        return $this->success('退出成功', url('home/index/index'));
    }

}
