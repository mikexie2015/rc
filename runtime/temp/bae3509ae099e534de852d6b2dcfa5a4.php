<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:55:"D:\wamp\www\rc\public/../app/home\view\index\index.html";i:1463106473;s:55:"D:\wamp\www\rc\public/../app/home\view\public\base.html";i:1463106473;}*/ ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        


    </head>
    <body>
        
<ul>
    <?php if(is_array($hooks)): $i = 0; $__LIST__ = $hooks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$va): $mod = ($i % 2 );++$i;?>
    <li><?php echo $va['name']; ?>:<?php echo $va['addons']; ?></li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>

        
    </body>
</html>
