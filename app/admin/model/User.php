<?php

namespace app\admin\model;

use think\Model;

class User extends Model {

    protected $pk = 'uid';
    protected static $table = 'member';
    protected $validate = [
    ];

    public function product() {
        return $this->hasMany('\app\common\model\Product', 'uid');
    }

}
