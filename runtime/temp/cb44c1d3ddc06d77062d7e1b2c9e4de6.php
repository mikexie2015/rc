<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:55:"D:\wamp\www\rc\public/../app/admin\view\user\index.html";i:1463389566;s:56:"D:\wamp\www\rc\public/../app/admin\view\public\base.html";i:1463389247;}*/ ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="__Css/common.css" />
        <script type="text/javascript" src="__Js/common.js"></script>
        <link rel="stylesheet" type="text/css" href="__Pub/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="__Pub/css/docs.css" />
        <link rel="stylesheet" type="text/css" href="__Pub/css/global.css" />
        <script type="text/javascript" src="__Pub/js/global.js"></script>
        <script type="text/javascript" src="__Pub/jquery-2.0.3.min.js"></script>
        
<title>用户管理</title>
<link rel="stylesheet" type="text/css" href="__Css/style.css" />

    </head>
    <body>
        
<center>
    <table border="1">
        <tr>
            <th>用户ID</th>
            <th>用户名</th>
            <th>操作</th>
        </tr>
        <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
            <td class="id"><?php echo $vo['uid']; ?></td>
            <td class="name"><?php echo $vo['username']; ?></td>
            <td class="act"><a href="<?php echo url(''); ?>"><span>编辑</span></a><a href="<?php echo url(''); ?>"><span>权限</span></a><a href="<?php echo url(''); ?>"><span>删除</span></a></td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
</center>

    </body>
</html>
