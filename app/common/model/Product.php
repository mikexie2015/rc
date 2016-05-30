<?php

/*
 * Copyright (c) 2013 rc All rights reserved.
 *  Author: Mike 
 */

namespace app\common\model;

use think\Model;

/**
 * Description of Product
 *
 * @author Administrator
 */
class Product extends Model {

    //put your code here
//    protected $pk = 'pid';
//    protected static  $table = 'product';

    public function user() {
        return $this->belongsTo('\app\admin\model\User', 'uid');
    }

}
