<?php

namespace app\home\controller;

use think\Controller;
use think\Db;

class Index extends Controller {

    public function index() {
        $hooks = Db::table('hooks')->field('name,addons')->select();
//        p($hooks);
        $this->assign([
            'hooks' => $hooks,
        ]);
        return $this->fetch();
    }

}
