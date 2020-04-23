<?php
/* Smarty version 3.1.33, created on 2019-06-10 06:28:42
  from 'D:\baohanghr\application\front\views\templates\defualt\newdetail.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfdf89a4846e1_34153818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dd1e3454273e3cea4758b368d7a7e8ff5d0995b' => 
    array (
      0 => 'D:\\baohanghr\\application\\front\\views\\templates\\defualt\\newdetail.html',
      1 => 1560147508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:defualt/public/header.html' => 1,
    'file:defualt/public/footer.html' => 1,
  ),
),false)) {
function content_5cfdf89a4846e1_34153818 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['one']->value['biaoti'];?>
 </title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['one']->value['neirong'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['one']->value['miaoshu'];?>
" />
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
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="banner_06" src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['suoluetu'];?>
" alt="">
                        <img class="banner_06_small" src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['shoujiduantupian'];?>
" alt="">
                        <div class="carousel-caption"></div>
                    </div>
                </div>
            </div>
        </div>
<!--内容区域-->
    <div class="news_content_box">
        <a href="<?php echo $_smarty_tpl->tpl_vars['sortList']->value[0]['u5'];?>
"><?php echo $_smarty_tpl->tpl_vars['sortList']->value[0]['u1'];?>
></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['sortList']->value[5]['u5'];?>
"><?php echo $_smarty_tpl->tpl_vars['sortList']->value[5]['u1'];?>
></a>
               <?php echo $_smarty_tpl->tpl_vars['one']->value['biaoti'];?>

        <div class="news_content_tit clearfix">
            <h1><?php echo $_smarty_tpl->tpl_vars['one']->value['biaoti'];?>
</h1>
            <p>发布时间：<?php echo $_smarty_tpl->tpl_vars['one']->value['dtime'];?>
 </p>
            <p>浏览量：<?php echo $_smarty_tpl->tpl_vars['one']->value['dianjiliang'];?>
</p>
        </div>
        <div class="news_content">
            <?php echo html_entity_decode($_smarty_tpl->tpl_vars['one']->value['neirong']);?>

        </div>
        <div class="clearfix">
            <?php if (empty($_smarty_tpl->tpl_vars['after']->value)) {?>
                <a class="shang" href="javascript:;">上一篇:没有了</a>
            <?php } else { ?>
                <a class="shang" href="/new/detail?id=<?php echo $_smarty_tpl->tpl_vars['after']->value['id'];?>
&sort_id=310&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
">上一篇:<?php echo $_smarty_tpl->tpl_vars['after']->value['biaoti'];?>
</a>
            <?php }?>
            <?php if (empty($_smarty_tpl->tpl_vars['next']->value)) {?>
                <a class="xia" href="javascript:;">下一篇:没有了</a>
            <?php } else { ?>
                <a class="xia" href="/new/detail?id=<?php echo $_smarty_tpl->tpl_vars['next']->value['id'];?>
&sort_id=310&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
">下一篇:<?php echo $_smarty_tpl->tpl_vars['next']->value['biaoti'];?>
</a>
            <?php }?>
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
>
//    tab切换功能
    layui.use('element', function(){
        var element = layui.element;
        //…
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
</body>
</html><?php }
}
