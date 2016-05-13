<?php

namespace app\admin\controller;

use app\common\controller\Base;
use think\Session;

class Index extends Base {

    public function index() {
        dump(Session::get());
        return $this->fetch();
    }

}
