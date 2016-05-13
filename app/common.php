<?php

/*
 * 打印函数
 */

function p($param) {
    echo '<pre>' . print_r($param, TRUE) . '<pre>';
}

function hook($tags, $param) {
    think\Hook::listen($tag, $params);
}

function m($param) {
    return think\Db::table($param);
}

function s($param, $value) {
    return cache($param, $value);
}

function c($name = '', $value = null, $range = '') {
    if (is_null($value) && is_string($name)) {
        return \think\Config::get($name, $range);
    } else {
        return \think\Config::set($name, $value, $range);
    }
}
