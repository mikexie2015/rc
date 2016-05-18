<?php

//配置文件
return [
    'view_replace_str' => [
        '__Css' => '/public/css/' . MODULE_NAME,
        '__Js' => '/public/js/' . MODULE_NAME,
        '__SELF' => strip_tags($_SERVER[c('URL_REQUEST_URI')]),
        '__Pub' => '/public/static',
        '__Pic' => '/public/static',
    ]
];
