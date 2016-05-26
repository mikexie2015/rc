<?php
/**
 * 后台首页
 * @author Mikexie<1413519894@qq.com>
 */
namespace app\admin\controller;

use app\common\controller\Base;
use think\Session;

class Index extends Base {

    public function index() {
//        dump(Session::get());
        return $this->fetch();
    }

}
