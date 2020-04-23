<?php
/* Smarty version 3.1.33, created on 2019-08-27 05:49:21
  from 'D:\baohanghr\application\front\views\templates\defualt\focus.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d64c461c71754_70186667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e1985bb819aa380ecd91e59e16c63b7a1d43e8f' => 
    array (
      0 => 'D:\\baohanghr\\application\\front\\views\\templates\\defualt\\focus.html',
      1 => 1566884935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:defualt/public/seo.html' => 1,
    'file:defualt/public/header.html' => 1,
    'file:defualt/public/footer.html' => 1,
  ),
),false)) {
function content_5d64c461c71754_70186667 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><?php $_smarty_tpl->_subTemplateRender("file:defualt/public/seo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
layui/css/layui.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
css/video.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
css/iconfont.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
css/main.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
js/flexable.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"><?php echo '</script'; ?>
>
</head>
<body>
    <!--导航区域-->
    <div class="bh_nav_box">
        <?php $_smarty_tpl->_subTemplateRender("file:defualt/public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!--banner区域-->
    <div class="bh_banner bh_banner-product">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['lianjie'];?>
" target="_blank">
                        <img class="banner_02" src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['suoluetu'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['tupianalt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['tupians'];?>
">
                    </a>
                    <div class="carousel-caption"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper-product">
        <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['lianjie'];?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['shoujiduantupian'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['tupianalt'];?>
">
        </a>
    </div>

    <!--tab切换区域-->
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
        <div class="swiper-container">
            <ul class="layui-tab-title swiper-wrapper">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sortList']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                   <?php if ($_smarty_tpl->tpl_vars['v']->value['id'] == 294) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['child'], 'vv', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['vv']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['k']->value+1 == $_smarty_tpl->tpl_vars['type']->value*1) {?>
                                <li class="layui-this swiper-slide"><?php echo $_smarty_tpl->tpl_vars['vv']->value['u1'];?>
</li>
                            <?php } else { ?>
                                <li class="swiper-slide"><?php echo $_smarty_tpl->tpl_vars['vv']->value['u1'];?>
</li>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
        <!--面包屑导航-->
        <div id="nav_crumbs2">
            <a href="/"><?php echo $_smarty_tpl->tpl_vars['sortList']->value[0]['u1'];?>
</a> >
            <a href="<?php echo $_smarty_tpl->tpl_vars['sortList']->value[1]['u5'];?>
"><?php echo $_smarty_tpl->tpl_vars['sortList']->value[1]['u1'];?>
</a>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sortList']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['id'] == 294) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['child'], 'vv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['vv']->value['id'] == $_smarty_tpl->tpl_vars['id']->value) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['vv']->value['u5'];?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['u1'];?>
</a>
                        <?php }?>
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
        <div class="layui-tab-content">
            <!--公司介绍区域-->
            <?php if ($_smarty_tpl->tpl_vars['type']->value == 1) {?>
                <div class="layui-tab-item layui-show">
                    <div class="tabs_box01 clearfix">
                        <div class="introduce_pic pull-left">
                            <!--<img src="<?php echo $_smarty_tpl->tpl_vars['gong']->value['suoluetu'];?>
" alt="">-->
                            <div class="m-video" data-src="<?php echo $_smarty_tpl->tpl_vars['gong']->value['shipin'];?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['gong']->value['suoluetu'];?>
" alt="">
                                <span class="iconfont icon-bofang"  style="cursor: pointer"></span>
                            </div>
                        </div>
                        <div class="introduce_text pull-left">
                            <h3><?php echo $_smarty_tpl->tpl_vars['gong']->value['biaoti'];?>
</h3>
                            <p><?php echo $_smarty_tpl->tpl_vars['gong']->value['jianjie'];?>
</p>
                        </div>
                    </div>
                    <div class="tabs_box02 clearfix">
                        <div class="tabs_box02_left pull-left">
                            <h3 class="tabs_box02_left_move"><?php echo $_smarty_tpl->tpl_vars['gong']->value['biaoti1'];?>
</h3>
                            <p class="tabs_box02_left_move"><?php echo $_smarty_tpl->tpl_vars['gong']->value['jianjie1'];?>
</p>
                        </div>
                        <div class="tabs_box02_right tabs_box02_left pull-left">
                            <h3><?php echo $_smarty_tpl->tpl_vars['gong']->value['biaoti2'];?>
</h3>
                            <p><?php echo $_smarty_tpl->tpl_vars['gong']->value['jianjie2'];?>
</p>
                        </div>
                    </div>
                    <div class="tabs_box03">
                        <div class="layui-container" id="tabs_box03">
                            <div class="layui-row tabs_box03_container">
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
                                                <?php if ($_smarty_tpl->tpl_vars['vv']->value['id'] == $_smarty_tpl->tpl_vars['b']->value['fenlei']) {?>
                                                    <div class="tabs_box03_list layui-col-lg1-5 layui-col-md4 layui-col-sm6 layui-col-xs6 white">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['vv']->value['u5'];?>
">
                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['b']->value['tubiao'];?>
" alt="">
                                                            <p><?php echo $_smarty_tpl->tpl_vars['vv']->value['u1'];?>
</p>
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
            <?php } else { ?>
                <div class="layui-tab-item layui-hidden">
                    <div class="tabs_box01 clearfix">
                        <div class="introduce_pic pull-left">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['gong']->value['suoluetu'];?>
" alt="">
                        </div>
                        <div class="introduce_text pull-left">
                            <h3><?php echo $_smarty_tpl->tpl_vars['gong']->value['biaoti'];?>
</h3>
                            <p><?php echo $_smarty_tpl->tpl_vars['gong']->value['jianjie'];?>
</p>
                        </div>
                    </div>
                    <div class="tabs_box02 clearfix">
                        <div class="tabs_box02_left pull-left">
                            <h3 class="tabs_box02_left_move"><?php echo $_smarty_tpl->tpl_vars['gong']->value['biaoti1'];?>
</h3>
                            <p class="tabs_box02_left_move"><?php echo $_smarty_tpl->tpl_vars['gong']->value['jianjie1'];?>
</p>
                        </div>
                        <div class="tabs_box02_right tabs_box02_left pull-left">
                            <h3><?php echo $_smarty_tpl->tpl_vars['gong']->value['biaoti2'];?>
</h3>
                            <p><?php echo $_smarty_tpl->tpl_vars['gong']->value['jianjie2'];?>
</p>
                        </div>
                    </div>
                    <div class="tabs_box03">
                        <div class="layui-container">
                            <div class="layui-row tabs_box03_container">
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
                                                <?php if ($_smarty_tpl->tpl_vars['vv']->value['id'] == $_smarty_tpl->tpl_vars['b']->value['fenlei']) {?>
                                                    <div class="tabs_box03_list layui-col-lg1-5 layui-col-md4 layui-col-sm6 layui-col-xs6 white">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['vv']->value['u5'];?>
">
                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['b']->value['tubiao'];?>
" alt="">
                                                            <p><?php echo $_smarty_tpl->tpl_vars['vv']->value['u1'];?>
</p>
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
            <?php }?>
            <!--企业文化区域-->
            <?php if ($_smarty_tpl->tpl_vars['type']->value == 2) {?>
                <div class="layui-tab-item layui-show">
                    <div class="culture clearfix">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wen']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>
                                <div class="culture_01  culture_this pull-left" style="background: url(<?php echo $_smarty_tpl->tpl_vars['v']->value['beijingtu'];?>
)">
                                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>
</p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['jianjie'];?>
</p>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['tubiao'];?>
" alt="">
                                </div>
                            <?php } else { ?>
                                <div class="culture_01 pull-left" style="background: url(<?php echo $_smarty_tpl->tpl_vars['v']->value['beijingtu'];?>
)">
                                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>
</p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['jianjie'];?>
</p>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['tubiao'];?>
" alt="">
                                </div>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            <?php } else { ?>
                <div class="layui-tab-item">
                    <div class="culture clearfix">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wen']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>
                                <div class="culture_01  culture_this pull-left" style="background: url(<?php echo $_smarty_tpl->tpl_vars['v']->value['beijingtu'];?>
)">
                                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>
</p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['jianjie'];?>
</p>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['tubiao'];?>
" alt="">
                                </div>
                            <?php } else { ?>
                                <div class="culture_01 pull-left" style="background: url(<?php echo $_smarty_tpl->tpl_vars['v']->value['beijingtu'];?>
)">
                                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>
</p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['jianjie'];?>
</p>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['tubiao'];?>
" alt="">
                                </div>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            <?php }?>
            <!--企业资质-->
            <?php if ($_smarty_tpl->tpl_vars['type']->value == 3) {?>
                <div class="layui-tab-item layui-show">
                    <div class="layui-row qualification_list ">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['qi']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <div class="qualification_list_box layui-col-md4">
                                <div class="qualification_list_box_1">
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
                    <div class="page ">
                        <ul class="clearfix">
                            <?php echo $_smarty_tpl->tpl_vars['pageinfo']->value;?>

                        </ul>
                    </div>
                </div>
            <?php } else { ?>
                <div class="layui-tab-item">
                    <div class="layui-row qualification_list ">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['qi']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <div class="qualification_list_box layui-col-md4">
                                <div class="qualification_list_box_1">
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
                    <div class="page ">
                        <ul class="clearfix">
                            <?php echo $_smarty_tpl->tpl_vars['pageinfo']->value;?>

                        </ul>
                    </div>
                </div>
            <?php }?>
            <!--联系我们-->
            <?php if ($_smarty_tpl->tpl_vars['type']->value == 4) {?>
                <div class="layui-tab-item layui-show">
                    <div class="tabs_contact ">
                        <div class="tabs_contact_box1 clearfix ">
                            <div class="tabs_contact_boxf">
                                <h3><?php echo $_smarty_tpl->tpl_vars['lian']->value['biaoti'];?>
</h3>
                                <p><?php echo $_smarty_tpl->tpl_vars['lian']->value['dizhi'];?>
</p>
                                <span class="tabs_contact_boxf_line"></span>
                                <ul>
                                    <li class="clearfix">
                                        <span class="pull-left"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/introduce/contact_icon01.png" alt=""></span>
                                        <p class="pull-left">合作服务热线：<?php echo $_smarty_tpl->tpl_vars['lian']->value['hezuofuwurexian'];?>
</p>
                                    </li>
                                    <li class="clearfix">
                                        <span class="pull-left"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/introduce/contact_icon02.png" alt=""></span>
                                        <p class="pull-left">投诉热线：<?php echo $_smarty_tpl->tpl_vars['lian']->value['tousurexian'];?>
</p>
                                    </li>
                                    <li class="clearfix">
                                        <span class="pull-left"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/introduce/contact_icon03.png" alt=""></span>
                                        <p class="pull-left">公司邮箱：<?php echo $_smarty_tpl->tpl_vars['lian']->value['youxiang'];?>
</p>
                                    </li>
                                    <li class="clearfix">
                                        <span class="pull-left"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/introduce/contact_icon04.png" alt=""></span>
                                        <p class="pull-left">邮编：<?php echo $_smarty_tpl->tpl_vars['lian']->value['youbian'];?>
</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="tabs_contact_boxr">
                                <div class="tabs_contact_box2_map"  id="dituContent"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs_contact_box2">
                        <div class="tabs_contact">
                            <h3>公司体验店地址</h3>
                            <div class="con">
							    <p><span><strong>郫都体验店 </strong></span>地址：成都市高新区西区大道1808号桂祥大厦17F</p>
                                <p><span><strong>成都体验店 </strong></span>地址：成都市高新区吉泰五路88号4403</p>
                                <p><span><strong>双流体验店 </strong></span>地址：双流西航港杨桥路161号</p>
                                <p><span><strong>龙泉体验店 </strong> </span>地址：龙泉驿区音乐广场锦宏时代505室（地铁A出口）</span></p>
                                <p><span><strong>崇州体验店</strong> </span>地址：崇州市崇庆北路613号（崇州客运站对面）</span></p>
                                <p><span><strong>绵阳体验店</strong> </span>地址：绵阳市高新区永兴镇华裕路5组11号</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="layui-tab-item">
                    <div class="tabs_contact ">
                        <div class="tabs_contact_box1 clearfix ">
                            <div class="tabs_contact_boxf">
                                <h3><?php echo $_smarty_tpl->tpl_vars['lian']->value['biaoti'];?>
</h3>
                                <p><?php echo $_smarty_tpl->tpl_vars['lian']->value['dizhi'];?>
</p>
                                <span class="tabs_contact_boxf_line"></span>
                                <ul>
                                    <li class="clearfix">
                                        <span class="pull-left"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/introduce/contact_icon01.png" alt=""></span>
                                        <p class="pull-left">成都服务热线：<?php echo $_smarty_tpl->tpl_vars['lian']->value['hezuofuwurexian'];?>
</p>
                                    </li>
                                    <li class="clearfix">
                                        <span class="pull-left"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/introduce/contact_icon02.png" alt=""></span>
                                        <p class="pull-left">投诉热线：<?php echo $_smarty_tpl->tpl_vars['lian']->value['tousurexian'];?>
</p>
                                    </li>
                                    <li class="clearfix">
                                        <span class="pull-left"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/introduce/contact_icon03.png" alt=""></span>
                                        <p class="pull-left">投诉邮箱：<?php echo $_smarty_tpl->tpl_vars['lian']->value['youxiang'];?>
</p>
                                    </li>
                                    <li class="clearfix">
                                        <span class="pull-left"><img src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
images/introduce/contact_icon04.png" alt=""></span>
                                        <p class="pull-left">邮编：<?php echo $_smarty_tpl->tpl_vars['lian']->value['youbian'];?>
</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="tabs_contact_boxr">
                                <div class="tabs_contact_box2_map"  id="dituContent"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tabs_contact_box2">
                        <div class="tabs_contact">
                            <h3>公司体验店地址</h3>
                            <div class="con">
							    <p><span>郫都体验店</span>地址：成都市高新区西区大道1808号桂祥大厦17F</p>
                                <p><span>成都体验店</span>地址：成都高新区吉泰五路88号4403-4405</p>
                                <p><span>双流体验店</span>地址：双流西航港杨桥路52号（双流看守所对面）</p>
                                <p><span>龙泉体验店</span>地址：龙泉驿区音乐广场锦宏时代505室（地铁A出口）</span></p>
                                <p><span>崇州体验店 </span>地址：崇州市崇庆北路613号（崇州客运站对面）</p>
                                <p><span>绵阳体验店</span>地址：绵阳市高新区永兴镇华裕路5组11号</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>

    <!--联系我们-->
    <div class="bh_foot">
        <?php $_smarty_tpl->_subTemplateRender("file:defualt/public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</body>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
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
js/pingzi_video.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
js/swiper-4.3.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
layui/layui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
js/map.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
js/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    //tab切换
    layui.use('element', function(){
        var element = layui.element;
    });

    /*移动端滑动导航*/
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 0,
        slidesPerView:'auto',
        freeMode: false
    });

   $(function(){
        //点击按钮时判断 百度商桥代码中的“我要咨询”按钮的元素是否存在，存在的话就执行一次点击事件
        $(".shangqiao").click(function(event) {
            if ($('#nb_invite_ok').length > 0) {
                $('#nb_invite_ok').click();
            }
        })
   })
<?php echo '</script'; ?>
>
</html><?php }
}
