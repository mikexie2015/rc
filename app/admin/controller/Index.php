<?php

namespace app\admin\controller;

use app\common\controller\Common;
use think\Session;

class Index extends Common {

    function index() {
        dump(\think\Session::get());
        return $this->fetch();
    }

    function login() {
        if ($_POST) {
            $user = m('member')->where('username', input('username'))->find();
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
                    m('member')->where('username', $user['username'])->update($update);
                    return $this->success('登陆成功', 'index');
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

    function logout() {
        \think\Session::destroy();
        return $this->redirect('login');
    }

}
