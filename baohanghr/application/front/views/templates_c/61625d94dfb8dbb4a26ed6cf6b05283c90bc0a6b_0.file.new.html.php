<?php
/* Smarty version 3.1.33, created on 2019-06-10 06:30:56
  from 'D:\baohanghr\application\front\views\templates\defualt\new.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfdf920c452d1_27782233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61625d94dfb8dbb4a26ed6cf6b05283c90bc0a6b' => 
    array (
      0 => 'D:\\baohanghr\\application\\front\\views\\templates\\defualt\\new.html',
      1 => 1560147499,
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
function content_5cfdf920c452d1_27782233 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <img class="banner_06" src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['suoluetu'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['tupianalt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['tupians'];?>
">
                    </a>
                    <!-- <img class="banner_06_small" src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['shoujiduantupian'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['banner']->value['tupianalt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banner']->value['tupians'];?>
"> -->
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
                    <?php if ($_smarty_tpl->tpl_vars['v']->value['id'] == 310) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['child'], 'vv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['sort']->value == $_smarty_tpl->tpl_vars['vv']->value['id']) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['vv']->value['u5'];?>
"><li class="layui-this swiper-slide"><?php echo $_smarty_tpl->tpl_vars['vv']->value['u1'];?>
</li></a>
                            <?php } else { ?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['vv']->value['u5'];?>
"><li class="swiper-slide"><?php echo $_smarty_tpl->tpl_vars['vv']->value['u1'];?>
</li></a>
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
            <a href="<?php echo $_smarty_tpl->tpl_vars['sortList']->value[0]['u5'];?>
"><?php echo $_smarty_tpl->tpl_vars['sortList']->value[0]['u1'];?>
>
                <a href="<?php echo $_smarty_tpl->tpl_vars['sortList']->value[5]['u5'];?>
"><?php echo $_smarty_tpl->tpl_vars['sortList']->value[5]['u1'];?>
>
                    <a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['mingList']->value;?>
</a>
                </a>
            </a>
        </div>
        <div class="layui-tab-content">
        <!--企业新闻-->
            <div class="layui-tab-item layui-show">
                <div class="news_container">
                    <div class="news_top clearfix">
                        <span class="news_top_left">
                            <a href="/new/detail?id=<?php echo $_smarty_tpl->tpl_vars['tableList']->value[0]['id'];?>
&sort_id=310&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['tableList']->value[0]['suoluetu'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['tableList']->value[0]['tupianalt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['tableList']->value[0]['tupians'];?>
">
                            </a>
                        </span>
                            <span class="news_top_right">
                                <a class="news_top_right_text" href="/new/detail?id=<?php echo $_smarty_tpl->tpl_vars['tableList']->value[0]['id'];?>
&sort_id=310&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
">
                                    <h1><?php echo $_smarty_tpl->tpl_vars['tableList']->value[0]['biaoti'];?>
</h1>
                                    <p><?php echo $_smarty_tpl->tpl_vars['tableList']->value[0]['jianjie'];?>
</p>
                                    <p><?php echo $_smarty_tpl->tpl_vars['tableList']->value[0]['dtime'];?>
</p>
                                    <p>查看详情</p>
                                </a>
                            </span>
                    </div>
                </div>
                <div class="news_container02_bg">
                    <div class="news_container02">
                        <div class="news_list">
                            <ul>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tableList']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['k']->value != 0) {?>
                                        <li>
                                            <a href="/new/detail?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&sort_id=310&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
">
                                                <span>
                                                    <p><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['dtime'],0,4);?>
</p>
                                                    <p><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['dtime'],6,5);?>
</p>
                                                </span>
                                                <h3><?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>
</h3>
                                                <p><?php echo $_smarty_tpl->tpl_vars['v']->value['jianjie'];?>
</p>
                                                <span><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['suoluetu'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupianalt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['tupians'];?>
"></span>
                                            </a>
                                        </li>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>
                        <div class="page ">
                            <ul class="clearfix">
                                <?php echo $_smarty_tpl->tpl_vars['pageinfo']->value;?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
js/swiper-4.3.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
//    tab切换功能
    layui.use('element', function(){
        var element = layui.element;

        //…
    });
<?php echo '</script'; ?>
>
<!--移动端滑动导航-->
<?php echo '<script'; ?>
>
    $(function () {
        var swiper = new Swiper('.swiper-container', {
            spaceBetween: 0,
            slidesPerView:'auto',
            freeMode: true
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
</body>
</html><?php }
}
