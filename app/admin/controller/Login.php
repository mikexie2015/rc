<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\admin\controller;

use think\Controller;

class Login extends Controller {

    function index() {
        if ($_POST) {
            p($_POST);
        } else {
            echo VIEW_PATH;
            return $this->fetch();
        }
    }

    function register() {
        if ($_POST) {
            
        } else {
            return $this->fetch();
        }
    }

}
