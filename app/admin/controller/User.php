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

}
