<?php

//配置文件
return [
    'view_replace_str' => [
        '__Css' =>'/public/css/'.MODULE_NAME,
        '__SELF__' => strip_tags($_SERVER[config('URL_REQUEST_URI')]),
    ]
];
