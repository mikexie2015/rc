<?php

//配置文件
return [
    'view_replace_str' => [
        '__Css' => '/public/css/' . MODULE_NAME,
        '__Js' => ROOT_PATH . '/public/js/' . MODULE_NAME,
        '__SELF' => strip_tags($_SERVER[c('URL_REQUEST_URI')]),
        '__Pub' => ROOT_PATH . '/public/static',
        '__Pic' => ROOT_PATH . '/public/static',
    ]
];
