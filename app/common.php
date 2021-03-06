<?php

use think\Session;
use think\Cache;
use think\Config;

/**
 * 打印函数,dump
 */
function d($param) {
    dump($param, TRUE);
}

/**
 * 打印函数，print_r
 */
function p($param) {
    if ($param == FALSE) {
        dump($param);
    } else {
        echo '<pre>' . print_r($param, TRUE) . '<pre>';
    }
}

/**
 * 钩子监听函数
 */
function hook($tags, $param) {
    think\Hook::listen($tag, $params);
}

/**
 * 链接数据表
 */
function m($param) {
    return think\Db::table($param);
}

/*
 * 缓存函数
 */

function s($param, $value) {
    return cache($param, $value);
}

/**
 * 配置函数
 */
function c($name = '', $value = null, $range = '') {
    if (is_null($value) && is_string($name)) {
        return \think\Config::get($name, $range);
    } else {
        return \think\Config::set($name, $value, $range);
    }
}

/**
 * 获取客户IP
 */
function getClientIp() {
    return $_SERVER['REMOTE_ADDR'];
}

/**
 * 将字符串转为数组,分隔符为','
 */
function str2arr($param) {
    return explode($glue = ',', $param);
}

/**
 * 将数组转为字符串,分隔符为','
 */
function arr2str($param) {
    return implode($glue = ',', $param);
}

/**
 * 获取model的数组
 */
function data($array, $with) {
    $i = 0;
    $arr = array();
    foreach ($array as $v) {
        $mid = $arr[$i] = $v->getData();
        $k = 0;
        $last = $mid[$with];
        array_pop($arr[$i]);
        if (gettype($last) != 'object') {
            foreach ($last as $j) {
                $arr[$i][$with][$k] = $j->getData();
                $k++;
            }
        } else {
            $arr[$i][$with] = $last->getData();
        }
        $i++;
    }
    return $arr;
}
/**
 * 将模型model的all函数取值全部转化为数组
 */
function alltoarray($data) {
    $arr=array();
    foreach ($data as $k=>$v) {
        $arr[$k]=$v->toarray();
    }
    return $arr;
}