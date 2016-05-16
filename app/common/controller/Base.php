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
        if (!session('uid') || !session('user')) {
            echo $this->error('尚未登陆，请登录', url('admin/login/login'));
            exit();
        }
    }

}
