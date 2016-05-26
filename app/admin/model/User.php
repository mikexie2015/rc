<?php

namespace app\admin\model;

use think\Model;

class User extends Model {

    protected $pk = 'uid';
    protected static $table = 'member';

    public function product() {
        return $this->hasOne('\app\common\model\Product', 'uid');
    }

}
