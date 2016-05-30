<?php

/**
 * @Copyright (c) 2016 rc All rights reserved.
 * @Author: Mikexie <1413519894@qq.com 
 */

namespace app\home\controller;

use think\Controller;

/**
 * Description of Sell
 *
 * @author Mikexie <1413519894@qq.com 
 */
class Sell extends Controller {

    //put your code here
    public function index() {
        $sell = model('product')->all('', 'user');
        $this->assign([
            'sell' => $sell,
        ]);
//        p(alltoarray($sell));die;
        return $this->fetch();
    }

}
