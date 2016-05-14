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
            return $this->error('还未登陆，请登录', url('admin/login/login'));
        }
    }

}
