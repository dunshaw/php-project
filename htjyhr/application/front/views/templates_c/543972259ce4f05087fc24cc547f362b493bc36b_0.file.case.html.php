<?php
/* Smarty version 3.1.33, created on 2019-06-10 06:36:22
  from 'D:\baohanghr\application\front\views\templates\defualt\case.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfdfa661e55a0_55795316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '543972259ce4f05087fc24cc547f362b493bc36b' => 
    array (
      0 => 'D:\\baohanghr\\application\\front\\views\\templates\\defualt\\case.html',
      1 => 1560147421,
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
function content_5cfdfa661e55a0_55795316 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <img class="banner_04" src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['suoluetu'];?>
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
    <!--面包屑导航-->
    <div id="nav_crumbs4">
        <a href="/"><?php echo $_smarty_tpl->tpl_vars['sortList']->value[0]['u1'];?>
> </a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['sortList']->value[3]['u5'];?>
"><?php echo $_smarty_tpl->tpl_vars['sortList']->value[3]['u1'];?>
</a>
    </div>
<!--案例区域-->
<div class="bh_case">
    <div class="bh_case_container">
        <ul class="bh_case_box clearfix">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tableList']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li>
                    <a href="/case/detail?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&sort_id=305">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['logo'];?>
" alt="" width="117" height="82">
                        <p><?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>
</p>
                        <p><?php echo $_smarty_tpl->tpl_vars['v']->value['dtime'];?>
</p>
                        <p><?php echo $_smarty_tpl->tpl_vars['v']->value['jianjie'];?>
</p>
                        <!--<p>READY MORE</p>-->
                    </a>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <div class="page ">
            <ul class="clearfix">
                <?php echo $_smarty_tpl->tpl_vars['pageinfo']->value;?>

            </ul>
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
</body>
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
