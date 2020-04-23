<?php
/* Smarty version 3.1.33, created on 2019-08-27 07:12:40
  from 'D:\baohanghr\application\front\views\templates\defualt\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d64d7e8784e31_60979187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4049cb3b93a47b64766a6d12531ba8a2b8710352' => 
    array (
      0 => 'D:\\baohanghr\\application\\front\\views\\templates\\defualt\\index.html',
      1 => 1566889950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:defualt/public/seo.html' => 1,
    'file:defualt/public/header.html' => 1,
  ),
),false)) {
function content_5d64d7e8784e31_60979187 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $_smarty_tpl->_subTemplateRender("file:defualt/public/seo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
layui/css/layui.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
css/main.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
js/flexable.js"><?php echo '</script'; ?>
>


	
</head>
<body>
    <!--导航区域-->
    <div class="bh_nav_box">
        <?php $_smarty_tpl->_subTemplateRender("file:defualt/public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <!--banner区域-->
    <div class="bh_banner">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!--控制图片的点-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banner']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <?php if (empty($_smarty_tpl->tpl_vars['v']->value['lianjie'])) {?>
                        <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>
                        <div class="item active">
                            <a href="javascript:;">
                                <img class="banner_01" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['suoluetu'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupianalt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupians'];?>
">
                                <img class="banner_01_small" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['shoujiduantupian'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupianalt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupians'];?>
">
                                <div class="carousel-caption"></div>
                            </a>
                        </div>
                        <?php } else { ?>
                        <div class="item">
                            <a href="javascript:;">
                                <img class="banner_01" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['suoluetu'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupianalt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupians'];?>
">
                                <img class="banner_01_small" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['shoujiduantupian'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupianalt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupians'];?>
">
                                <div class="carousel-caption"></div>
                            </a>
                        </div>
                        <?php }?>
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>
                        <div class="item active">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['lianjie'];?>
" target="_blank">
                                <img class="banner_01" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['suoluetu'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupianalt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupians'];?>
">
                                <img class="banner_01_small" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['shoujiduantupian'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupianalt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupians'];?>
">
                                <div class="carousel-caption"></div>
                            </a>
                        </div>
                        <?php } else { ?>
                        <div class="item">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['lianjie'];?>
" target="_blank">
                                <img class="banner_01" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['suoluetu'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupianalt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupians'];?>
">
                                <img class="banner_01_small" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['shoujiduantupian'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupianalt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupians'];?>
">
                                <div class="carousel-caption"></div>
                            </a>
                        </div>
                        <?php }?>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left hidden-xs" aria-hidden="true">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/prev.png" alt="">
                </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right hidden-xs" aria-hidden="true">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/next.png" alt="">
                </span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!--右侧资讯窗口-->
    <div class="consulting">
        <div class="consulting_icon01">
            <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/right_iocn01.png" alt="">
            <div class="consulting_prompt"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/prompt_pic.jpg" alt=""></div>
            <p>在线客服</p>
        </div>
        <div class="consulting_icon01 consulting_icon02">
            <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/right_iocn02.png" alt="">
            <span>
                <p>028-81716228 <span class="iconfont icon-dianhua"></span></p>
                <p>028-81716300 <span class="iconfont icon-dianhua phone02"></span></p>
            </span>
            <p>客服电话</p>
        </div>
        <div class="consulting_icon01 consulting_icon03">
            <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/right_iocn03.png" alt="">
            <p>官方微信</p>
            <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/right_erweima.jpg" alt="">
        </div>
        <div class="consulting_icon01 consulting_icon04">
            <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/right_iocn04.png" alt="">
            <p>找工作</p>
            <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/right_erweima.jpg" alt="">
        </div>
    </div>

    <!--产品区域-->
    <div class="bh_procuct">
        <div class="bh_procuct_tit">
            <h3><?php echo $_smarty_tpl->tpl_vars['pin']->value['u1'];?>
</h3>
            <h3><?php echo $_smarty_tpl->tpl_vars['pin']->value['u2'];?>
</h3>
            <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/tit_line.png" alt="">
        </div>
        <div class="bh_procuct_box">
           <div class="layui-container">
               <div class="layui-row neixun">
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sortList']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['id'] == 299) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['child'], 'vv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->value) {
?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tu']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['b']->value['fenlei'] == $_smarty_tpl->tpl_vars['vv']->value['id']) {?>
                                    <div class="box_padding layui-col-lg1-5 layui-col-md4 layui-col-sm6 layui-col-xs6  ">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['vv']->value['u5'];?>
">
                                           <div class="procuct_box_border">
                                               <img src="<?php echo $_smarty_tpl->tpl_vars['b']->value['tubiao'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['b']->value['tupianalt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['b']->value['tupians'];?>
">
                                               <p><?php echo $_smarty_tpl->tpl_vars['vv']->value['u1'];?>
</p>
                                               <p><?php echo $_smarty_tpl->tpl_vars['vv']->value['u9'];?>
</p>
                                               <div class="bh_procuct_box_huiline">
                                                   <div class="bh_procuct_box_hongline"></div>
                                               </div>
                                               <p><?php echo $_smarty_tpl->tpl_vars['b']->value['miaoshu'];?>
</p>
                                           </div>
                                        </a>
                                    </div>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               </div>
           </div>
        </div>
    </div>

    <!--宝航简介-->
    <div class="bh_introduce">
        <div class="bh_introduce_tit">
            <h3><?php echo $_smarty_tpl->tpl_vars['bao']->value['u1'];?>
</h3>
            <h3><?php echo $_smarty_tpl->tpl_vars['bao']->value['u2'];?>
</h3>
            <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/tit_line_white.png" alt="<?php echo $_smarty_tpl->tpl_vars['bao']->value['u2'];?>
">
        </div>
 
            <ul class="introduce_box">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shu']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>
                    <li class="slideli">
                        <p class="txt_1"><span class="animateNum" data-animatetype="num" data-animatetarget="<?php echo $_smarty_tpl->tpl_vars['v']->value['shuzi'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['shuzi'];?>
</span><?php echo $_smarty_tpl->tpl_vars['v']->value['danwei'];?>
</p>
                        <p class="txt_2"><?php echo $_smarty_tpl->tpl_vars['v']->value['miaoshu'];?>
</p>
                    </li>
                    <?php } else { ?>
                    <li class="slideli">
                        <p class="txt_1"><span class="animateNum animateNum_01" data-animatetype="num" data-animatetarget="<?php echo $_smarty_tpl->tpl_vars['v']->value['shuzi'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['shuzi'];?>
</span><?php echo $_smarty_tpl->tpl_vars['v']->value['danwei'];?>
</p>
                        <p class="txt_2"><?php echo $_smarty_tpl->tpl_vars['v']->value['miaoshu'];?>
</p>
                    </li>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <a href="/focus?type=1&sort_id=295" class="introduce_btn">
            <span> <img class="introduce_btn_icon" src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/introduce.icon.png"></span>
            <span>一分钟了解宝航</span>
        </a>
    </div>

    <!--新闻版块-->
    <div class="bh_news">
        <div class="bh_news_container">
            <div class="bh_news_tit">
                <h3><?php echo $_smarty_tpl->tpl_vars['xin']->value['u1'];?>
</h3>
                <h3><?php echo $_smarty_tpl->tpl_vars['xin']->value['u2'];?>
</h3>
                <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/tit_line.png">
            </div>
            <div class="bh_news_left pull-left">
                <a href="/new/detail?id=<?php echo $_smarty_tpl->tpl_vars['zi']->value[0]['id'];?>
&sort_id=310&sort=312">
                    <h3><?php echo $_smarty_tpl->tpl_vars['zi']->value[0]['biaoti'];?>
</h3>
                    <p><?php echo $_smarty_tpl->tpl_vars['zi']->value[0]['jianjie'];?>
</p>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['zi']->value[0]['suoluetu'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['zi']->value[0]['tupianalt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['zi']->value[0]['tupians'];?>
">
                    <a class="bh_news_btn" href="/new?sort_id=310&sort=312">查看更多</a>
                </a>
            </div>
            <div class="bh_news_right pull-right">
                <ul class="news_list_bh">
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zi']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['k']->value != 0) {?>
                            <li>
                                <a href="/new/detail?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&sort_id=310&sort=312">
                                    <div class="pull-left news_list_txt01">
                                        <span class="news_list_txt01_point pull-left"></span>
                                        <h3 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>
</h3>
                                        <p><?php echo $_smarty_tpl->tpl_vars['v']->value['jianjie'];?>
</p>
                                    </div>
                                    <div class="pull-left news_list_txt02">
                                        <p class="news_time"><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['dtime'],5,5);?>
</p>
                                        <span><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/more_icon.png" alt=""></span>
                                    </div>
                                </a>
                            </li>
                        <?php }?>
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
    </div>

    <!--合作伙伴-->
    <div class="bh_cooperation">
        <div class="bh_cooperation_container">
            <div class="bh_cooperation_tit">
                <h3><?php echo $_smarty_tpl->tpl_vars['bu']->value['u1'];?>
</h3>
                <h3><?php echo $_smarty_tpl->tpl_vars['bu']->value['u2'];?>
</h3>
                <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/tit_line.png" alt="">
            </div>
            <ul class="bh_cooperation_box clearfix">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fen']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <li class="col-lg-8 col-md-3 col-sm-3 col-xs-4">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['tubiao'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupianalt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupians'];?>
">
                    </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <a href="/case?sort_id=305" class="cooperation_btn">
                <span>进入精彩案例</span>
                <span> <img class="cooperation_btn_icon" src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/cooperation_icon.png" alt=""></span>
            </a>
        </div>
    </div>

    <!--资质认证-->
    <div class="bh_qualification">
        <div class="bh_qualification_container ">
            <div class="bh_introduce_tit">
                <h3><?php echo $_smarty_tpl->tpl_vars['zhi']->value['u1'];?>
</h3>
                <h3><?php echo $_smarty_tpl->tpl_vars['zhi']->value['u2'];?>
</h3>
                <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/tit_line_white.png" alt="">
            </div>
            <div class="layui-container clearfix">
                <div class="layui-row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['qi']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <div class="box_padding layui-col-lg1-5 layui-col-md4 layui-col-sm6 layui-col-xs6  ">
                            <div class="qualification_box">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['suoluetu'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupianalt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupians'];?>
">
                                <p><?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>
</p>
                            </div>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>

    <!--联系我们-->
    <div class="bh_foot">
        <div class="bh_contact clearfix">
            <div class="bh_contact_container">
                <a href="javascript:;" class="contact_jiantou"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/contact_jiantou.png" alt=""></a>
                <div class="bh_contac_tit">
                    <span class="contac_tit_line_left"></span>
                    <h3>contact</h3>
                    <span class="contac_tit_line_right"></span>
                </div>
                <div class="bh_contact_box">
                    <ul class="clearfix">
                        <li>
                            <div class="img_box">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['dibu']->value['erweima'];?>
" alt="">
                            </div>
                            <span><?php echo $_smarty_tpl->tpl_vars['dibu']->value['biaoti'];?>
</span>
                        </li>
                        <li>
                            <div class="img_box">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['dibu']->value['erweima2'];?>
" alt="">
                            </div>
                            <span><?php echo $_smarty_tpl->tpl_vars['dibu']->value['biaoti2'];?>
</span>
                        </li>
                        <li>
                            <div class="dibunav">
                                <a href="/">首页</a>
                                <a href="/focus?type=1&sort_id=294">聚焦宝航</a>
                                <a href="/product?sort_id=299">产品方案</a>
                                <a href="/case?sort_id=305">精彩案例</a>
                                <a href="/enterprise?sort_id=306">企业风采</a>
                            </div>
                            <h1><?php echo $_smarty_tpl->tpl_vars['dibu']->value['dibumiaoshu'];?>
</h1>
                            <p>地址：<?php echo $_smarty_tpl->tpl_vars['dibu']->value['dizhi'];?>
</p>
                            <p>合作服务热线：<?php echo $_smarty_tpl->tpl_vars['dibu']->value['fuwurexian'];?>
</p>
                            <p>投诉热线：<?php echo $_smarty_tpl->tpl_vars['dibu']->value['tousurexian'];?>
</p>
                        </li>
                        <li>
                            <img class="contact_pic" src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/contact_pic.jpg" alt="">
                            <p>邮编：<?php echo $_smarty_tpl->tpl_vars['dibu']->value['youbian'];?>
</p>
                        </li>
                    </ul>
                </div>
                <div class="youqinglianjie clearfix">
                    <p>友情链接：</p>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['youqinglianjie']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <?php if (empty($_smarty_tpl->tpl_vars['v']->value['lianjie'])) {?>
                    <a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['v']->value['mingcheng'];?>
</a>
                    <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['lianjie'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['mingcheng'];?>
</a>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
        <div class="foot">
            <p><?php echo $_smarty_tpl->tpl_vars['dibu']->value['beianhao'];?>
 <a href="/index/daohang">网站地图</a></p>
        </div>
        <!--右侧资讯窗口-->
        <div class="consulting">
            <div class="consulting_icon01">
                <a class="shangqiao" href="javascript:void(0);">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/right_iocn01.png" alt="">
                    <div class="consulting_prompt"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/prompt_pic.jpg" alt=""></div>
                    <p>在线客服</p>
                </a>
            </div>
            <div class="consulting_icon01 consulting_icon02">
                <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/right_iocn02.png" alt="">
                <span>
                <p>028-60232271 <span class="iconfont icon-dianhua"></span> </p>
                <p>18602854906 <span class="iconfont icon-dianhua phone02"></span> </p>
            </span>
                <p>客服电话</p>
            </div>
            <div class="consulting_icon01 consulting_icon03">
                <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/right_iocn03.png" alt="">
                <p>官方微信</p>
                <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/ewm_01.jpg" alt="" width="200%">
            </div>
            <div class="consulting_icon01 consulting_icon04">
                <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/right_iocn04.png" alt="">
                <p>找工作</p>
                <img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/home/right_erweima.jpg" alt="">
            </div>
        </div>
    </div>
</body>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
<!--公共样式引入-->
<!--<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
js/common.js"><?php echo '</script'; ?>
>-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
js/jquery.running.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
js/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
layui/layui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
js/swiper-4.3.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
js/index.js"><?php echo '</script'; ?>
>
<!--启动简介区域数字变动-->
<?php echo '<script'; ?>
>
    $(function(){
        $('body').running();

        /*移动端滑动导航*/
        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 0,
            slidesPerView:'auto',
            freeMode: false
        });

        /*banner速度*/
        $('.carousel').carousel({
            interval: 3000
        });
    })
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
   $(function(){
    //点击按钮时判断 百度商桥代码中的“我要咨询”按钮的元素是否存在，存在的话就执行一次点击事件
        $(".shangqiao").click(function(event) {
            if ($('#nb_invite_ok').length > 0) {
                $('#nb_invite_ok').click();
            }
        });
   })
<?php echo '</script'; ?>
>
</html><?php }
}
