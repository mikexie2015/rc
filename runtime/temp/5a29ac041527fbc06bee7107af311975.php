<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:56:"D:\wamp\www\rc\public/../app/admin\view\login\index.html";i:1463469467;s:56:"D:\wamp\www\rc\public/../app/admin\view\public\base.html";i:1463471385;}*/ ?>
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
        
<title>登陆</title>
<link rel="stylesheet" type="text/css" href="__Css/style.css" />

    </head>
    <body>
        <div class="topBar">
            <div class="userBar">
                <ul>
                    <li>你好，冯康的发放<em title="<?php echo session('user'); ?>"><?php echo session('user'); ?></em></li>
                    <li><a href="<?php echo url(''); ?>">修改密码</a></li>
                    <li><a href="<?php echo url(''); ?>">修改昵称</a></li>
                    <li><a href="<?php echo url(''); ?>">退出</a></li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
        
<div class='main'>
    <div class="login-ad fl">
        <a href=""><img style="width: 800px;height: 400px;" src="http://pub.chinaunix.net/uploadfile/201204/20120422043659419.jpg"></a>
    </div>
    <div class="login fr">
        <div class="login-head">
            <h2>用户登录</h2>
            <p><span><span class="pull-left"><span>还没有账号? <a href="<?php echo url('User/register'); ?>">立即注册</a></span> </span></p>
        </div>
        <div class="login-box">
            <form class="login-form" action="__SELF" method="post">
                <div class="control-group">
                    <label class="control-label" for="inputEmail">用户名</label>
                    <div class="controls">
                        <input type="text" id="inputEmail" class="span3" placeholder="请输入用户名"  ajaxurl="/member/checkUserNameUnique.html" errormsg="请填写1-16位用户名" nullmsg="请填写用户名" datatype="*1-16" value="" name="username">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword">密码</label>
                    <div class="controls">
                        <input type="password" id="inputPassword"  class="span3" placeholder="请输入密码"  errormsg="密码为6-20位" nullmsg="请填写密码" datatype="*6-20" name="password">
                    </div>
                </div>
                <!--                <div class="control-group">
                                    <label class="control-label" for="inputPassword">验证码</label>
                                    <div class="controls">
                                        <input type="text" id="inputPassword" class="span3" placeholder="请输入验证码"  errormsg="请填写5位验证码" nullmsg="请填写验证码" datatype="*5-5" name="verify">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label"></label>
                                    <div class="controls">
                                        <img class="verifyimg reloadverify" alt="点击切换" src="<?php echo url('verify'); ?>" style="cursor:pointer;">
                                    </div>
                                    <div class="controls Validform_checktip text-warning"></div>
                                </div>-->
                <div class="control-group">
                    <div class="controls" id='btn'>
                        <!--                        <label class="checkbox">
                                                    <input type="checkbox"> 自动登陆
                                                </label>-->
                        <button type="submit" class="btn" >登 陆</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



    </body>
</html>
