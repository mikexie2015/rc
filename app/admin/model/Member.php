<?php

/*
 * Copyright (c) 2013 rc All rights reserved.
 *  Author: Mike 
 */

namespace app\admin\model;

use think\Model;

/**
 * Description of Member
 *
 * @author Administrator
 */
class Member extends Model {

//put your code here
    protected $pk = 'uid';

    public function product() {
        return $this->hasOne('\app\common\model\Product', 'uid');
    }

}
