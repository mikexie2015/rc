<?php

/**
 * @Copyright (c) 2016 rc All rights reserved.
 * @Author: Mikexie <1413519894@qq.com 
 */

namespace app\admin\controller;

use think\Controller;

/**
 * Description of Product class
 *
 */
class Product extends Controller {

    //put your code here
    public function index() {
//            $list= model('Product')->with('user')->all();
        $list = model('product')->all([], 'user');
        $this->assign([
            'list'=>$list,
        ]);
        return $this->fetch();
    }

}
