<?php

/**
 * @Copyright (c) 2016 rc All rights reserved.
 * @Author: Mikexie <1413519894@qq.com 
 */

namespace app\home\controller;

use app\common\controller\Base;

/**
 * Description of User class
 *
 */
class User extends Base {

    //put your code here
    public function index() {
        echo '前端用户';
    }

    /**
     * 前端用户登录
     */
    public function login() {
        if (IS_POST) {
            $user = m('member')->where('username', input('username'))->find();
            if ($user) {
                if (md5(input('password')) == $user['pwd']) {
                    $update = [
                        'logintime' => time(),
                        'loginip' => getClientIp(),
                    ];
                    session('uid', $user['uid']);
                    session('user', $user['username']);
                    session('ip', $update['loginip']);
                    session('time', $update['logintime']);
                    m('member')->where('username', $user['username'])->update($update);
                    return $this->success('登陆成功', url('user/index'));
                } else {
                    return $this->error('密码错误','login');
                }
            } else {
                return $this->error('用户不存在','login');
            }
        } else {
            return $this->redirect('login/index');
        }
    }

    /**
     * 注销登录
     */
    public function logout() {
        if (Session::get()) {
            Session::clear();
        }
        return $this->success('退出成功', url('home/index/index'));
    }

}
