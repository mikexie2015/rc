<?php

namespace app\admin\controller;

use think\Controller;
use app\common\controller\Base;
use app\admin\model\Member;

class User extends Base {

    public function index() {
//        $user = \app\admin\model\Member::all();
        $user = model('member')->get('1');
        d($user->product->toarray());die;
//        $user = db('member')->select();
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
                if (db('member')->insert($add)) {
                    return $this->success('添加用户成功');
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
