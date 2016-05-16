<?php

namespace app\admin\controller;

use think\Controller;

class User extends Controller {

    public function index() {
        $user = db('user')->select();
        $this->assign([
            'user' => $user,
        ]);
        return $this->fetch();
    }

}
