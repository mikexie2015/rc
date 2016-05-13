<?php

/*
 * Copyright (c) 2013 rc All rights reserved.
 *  Author: Mike 
 */

namespace app\common\controller;

use think\Controller;

class Base extends Controller {

    function _initialize() {
        if (!session('uid') || !session('username')) {
            return $this->redirect('admin/Index/login');
        }
    }

}
