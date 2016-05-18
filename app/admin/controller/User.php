<?php

namespace app\admin\controller;

use think\Controller;
use app\common\controller\Base;

class User extends Base {

    public function index() {
        $user = db('member')->select();
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

    public function update() {
        if (IS_POST) {
            d($_POST);
        } else {
            return $this->error('违法操作');
        }
    }
}
