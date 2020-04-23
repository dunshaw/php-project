<?php
/* Smarty version 3.1.33, created on 2019-06-10 06:36:40
  from 'D:\baohanghr\application\front\views\templates\defualt\enterprise.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfdfa7868a772_94151471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e02108447b795aeae4c2c7e88416e93646cbc0cd' => 
    array (
      0 => 'D:\\baohanghr\\application\\front\\views\\templates\\defualt\\enterprise.html',
      1 => 1560147474,
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
function content_5cfdfa7868a772_94151471 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
    <div class="bh_banner bh_banner-product">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['lianjie'];?>
" target="_blank">
                        <img class="banner_05" src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['suoluetu'];?>
" alt="">
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
    <!--内容区域-->
    <div class="nav_s">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sortList']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['id'] == 306) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['child'], 'vv', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['vv']->value) {
?>
                        <li id="Activity<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['vv']->value['u1'];?>
</a></li>
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
<div id="nav_crumbs5">
    <a href="/"><?php echo $_smarty_tpl->tpl_vars['sortList']->value[0]['u1'];?>
></a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['sortList']->value[4]['u5'];?>
"><?php echo $_smarty_tpl->tpl_vars['sortList']->value[4]['u1'];?>
></a>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sortList']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['v']->value['id'] == 306) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['child'], 'vv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->value) {
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['vv']->value['u5'];?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['u1'];?>
</a>
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
<div class="mien_container mien_container01 clearfix" id="mien_container01">
    <div class="show_tit">
        <h1><?php echo $_smarty_tpl->tpl_vars['sortList']->value[4]['child'][0]['u1'];?>
</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['sortList']->value[4]['child'][0]['u9'];?>
</p>
        <span class="show_tit_line"></span>
    </div>
    <div class="mien_box01 clearfix">
        <ul class="clearfix">
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['qi']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['suoluetu'];?>
" alt=""></li>
           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>
<div class="mien_container mien_container02 clearfix" id="mien_container02">
    <div class="show_tit">
        <h1><?php echo $_smarty_tpl->tpl_vars['sortList']->value[4]['child'][1]['u1'];?>
</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['sortList']->value[4]['child'][1]['u9'];?>
</p>
        <span class="show_tit_line"></span>
    </div>
    <div class="mien_box02 clearfix">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lao']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['suoluetu'];?>
" alt="">
                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>
</p>
                    <div></div>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>
<div class="mien_container mien_container03 clearfix" id="mien_container03">
    <div class="show_tit">
        <h1><?php echo $_smarty_tpl->tpl_vars['sortList']->value[4]['child'][2]['u1'];?>
</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['sortList']->value[4]['child'][2]['u9'];?>
</p>
        <span class="show_tit_line"></span>
    </div>
    <div class="mien_box03 clearfix">
        <ul class="mien_meet01 clearfix">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hui']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['suoluetu'];?>
" alt="">
                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>
</p>
                    <div></div>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div>
<div class="mien_introduction">
    <ul class="introduce_box">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shu']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>
                <li>
                    <p class="txt_1"><span class="animateNum" data-animatetype="num" data-animatetarget="<?php echo $_smarty_tpl->tpl_vars['v']->value['shuzi'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['shuzi'];?>
</span><?php echo $_smarty_tpl->tpl_vars['v']->value['danwei'];?>
</p>
                    <p class="txt_2"><?php echo $_smarty_tpl->tpl_vars['v']->value['miaoshu'];?>
</p>
                </li>
            <?php } else { ?>
                <li>
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
</div>
<!--联系我们-->
<div class="bh_foot">
    <?php $_smarty_tpl->_subTemplateRender("file:defualt/public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

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
layui/layui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
js/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
//    数字变化功能
    $(function(){
        $('body').running();
        var mien_container01 = $('#mien_container01');
        var mien_container02 = $('#mien_container02');
        var mien_container03 = $('#mien_container03');
        if(<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
==1) {
            $('html,body').animate({scrollTop:mien_container01.offset().top-80},200)
        }
        if(<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
==2) {
            $('html,body').animate({scrollTop:mien_container02.offset().top-80},200)
        }
        if(<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
==3) {
            $('html,body').animate({scrollTop:mien_container03.offset().top-80},200)
        }
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
</body>
</html><?php }
}
