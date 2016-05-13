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
//        d(Session::get());
        if (!session('uid') || !session('user')) {
            return $this->redirect('admin/login/login');
        }
    }

}
