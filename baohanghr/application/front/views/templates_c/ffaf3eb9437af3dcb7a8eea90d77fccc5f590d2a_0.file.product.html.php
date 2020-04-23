<?php
/* Smarty version 3.1.33, created on 2019-06-10 06:20:06
  from 'D:\baohanghr\application\front\views\templates\defualt\product.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfdf6960fb353_15565880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffaf3eb9437af3dcb7a8eea90d77fccc5f590d2a' => 
    array (
      0 => 'D:\\baohanghr\\application\\front\\views\\templates\\defualt\\product.html',
      1 => 1560147518,
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
function content_5cfdf6960fb353_15565880 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $_smarty_tpl->_subTemplateRender("file:defualt/public/seo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
layui/css/layui.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
css/main.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
css/swiper-4.3.3.min.css">
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
                        <img class="banner_03" src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['suoluetu'];?>
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
" alt="">
        </a>
    </div>

    <!--tab切换区域-->
    <div class="layui-tab layui-tab-brief zx-brief" lay-filter="docDemoTabBrief">
        <ul class="product_tabs_bg">
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
                        <?php if ($_smarty_tpl->tpl_vars['vv']->value['id'] == $_smarty_tpl->tpl_vars['sort']->value) {?>
                        <li class="layui-this">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['vv']->value['u5'];?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['u1'];?>
</a>
                        </li>
                        <?php } else { ?>
                        <li class="">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['vv']->value['u5'];?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['u1'];?>
</a>
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
        <!--面包屑导航-->
        <div id="nav_crumbs2">
            <a href="<?php echo $_smarty_tpl->tpl_vars['sortList']->value[0]['u5'];?>
"><?php echo $_smarty_tpl->tpl_vars['sortList']->value[0]['u1'];?>
>
                <a href="<?php echo $_smarty_tpl->tpl_vars['sortList']->value[2]['u5'];?>
"><?php echo $_smarty_tpl->tpl_vars['sortList']->value[2]['u1'];?>
>
                    <a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['mingList']->value;?>
</a>
                </a>
            </a>
        </div>
        <div class="layui-tab-content">
            <!--人才外包区域-->
            <div class="layui-tab-item layui-show clearfix">
                <div class="product_tabs product_talent clearfix">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pin']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <div class="product_item">
                        <div class="itemp-left">
                          <div class="con-text">
                            <h3 class="h3"><?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>
</h3>
                            <span class="span1"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['tubiao'];?>
" alt=""></span>
                            <p class="p1"><?php echo $_smarty_tpl->tpl_vars['v']->value['biaotiying'];?>
</p>
                            <div class="product_tabs_text"><?php echo html_entity_decode($_smarty_tpl->tpl_vars['v']->value['jianjie']);?>
</div>
                          </div>
                        </div>
                        <div class="img1" style="background: url(<?php echo $_smarty_tpl->tpl_vars['v']->value['suoluetu'];?>
) center/cover no-repeat;"></div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="product_tabs_bottom ">
                    <div class="product_tabs_bottom_box">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['an']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <div class="product_tabs_bottom_box_right">
                            <h3><?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>
</h3>
                            <p><?php echo $_smarty_tpl->tpl_vars['v']->value['dtime'];?>
</p>
                            <p><?php echo html_entity_decode($_smarty_tpl->tpl_vars['v']->value['jianjie']);?>
</p>
                            <a href="/case/detail?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&sort_id=305">案例详情</a>
                        </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
<?php echo '<script'; ?>
>
    //tab切换功能
    layui.use('element', function(){
        var element = layui.element;
    });

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
