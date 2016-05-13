<?php

/* 
 * Copyright (c) 2013 rc All rights reserved.
 *  Author: Mike 
 */
[
        'view_replace_str' => [
        '__Css' =>__ROOT.'/public/css/'.MODULE_NAME,
        '__Js'=>__ROOT.'/public/js/'.MODULE_NAME,
        '__SELF' => strip_tags($_SERVER[c('URL_REQUEST_URI')]),
        '__Pub'=>__ROOT.'/public/static',
        '__Pic'=>__ROOT.'/public/static',
    ]
];

