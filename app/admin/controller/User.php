<?php

namespace app\admin\controller;

use think\Controller;
use app\common\controller\Base;

class User extends Base {

    public function index() {
        $user = model('user')->all('', 'product');
        $this->assign([
            'user' => $user,
        ]);
        return $this->fetch();
    }

    public function edit() {
        if (input('uid')) {
            $user = db('member')->where('uid', input('uid'))->find();
            return view('', ['user' => $user]);
        } else {
            return $this->error('地址错误');
        }
    }

    public function add() {
        if (IS_POST) {
            if (input('pwd') == input('pwd1')) {
                $add = [
                    'username' => input('user'),
                    'nickname' => input('nickname'),
                    'pwd' => input('pwd'),
                    'logintime' => time(),
                    'loginip' => getClientIp(),
                    'status' => 1,
                ];
                if (model('member')->add($add)) {
                    return $this->success('添加用户成功', 'index');
                }
            } else {
                return $this->error('两次输入密码不一致');
            }
        } else {
            return $this->fetch();
        }
    }

    public function update() {
        if (IS_POST) {
            d($_POST);
        } else {
            return $this->error('违法操作');
        }
    }

}
