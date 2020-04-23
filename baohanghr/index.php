<?php
//入口文件
# 前台开启伪静态路由;
date_default_timezone_set('PRC');
define("FRONT_ROUTE_HTML", false);
error_reporting(0);
ini_set('display_errors',false);
//error_reporting(0);
//ini_set('display_errors',false);
//引入核心启动类
include "silephp/core/Framework.class.php";
Framework::run();
# 添加注释

