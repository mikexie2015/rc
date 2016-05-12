<?php
/*
 * 打印函数
 */
function p($param) {
    echo '<pre>' . print_r($param, TRUE) . '<pre>';
}

function hook($tags,$param) {
    think\Hook::listen($tag, $params);
}