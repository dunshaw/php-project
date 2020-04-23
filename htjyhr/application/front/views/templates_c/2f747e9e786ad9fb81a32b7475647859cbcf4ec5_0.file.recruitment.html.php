<?php
/* Smarty version 3.1.33, created on 2019-06-10 06:31:46
  from 'D:\baohanghr\application\front\views\templates\defualt\recruitment.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfdf952be5ac5_56462110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f747e9e786ad9fb81a32b7475647859cbcf4ec5' => 
    array (
      0 => 'D:\\baohanghr\\application\\front\\views\\templates\\defualt\\recruitment.html',
      1 => 1560147528,
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
function content_5cfdf952be5ac5_56462110 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="bh_banner bh_banner-product">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value['lianjie'];?>
" target="_blank">
                        <img class="banner_07" src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['suoluetu'];?>
" alt="">
                    </a>
                    <!-- <img class="banner_07_small" src="<?php echo $_smarty_tpl->tpl_vars['banner']->value['shoujiduantupian'];?>
" alt=""> -->
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
    <div class="bh_recruitment_container">
        <!--面包屑导航-->
        <div id="nav_crumbs8">
            <a href="/"><?php echo $_smarty_tpl->tpl_vars['sortList']->value[0]['u1'];?>
></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['sortList']->value[6]['u5'];?>
"><?php echo $_smarty_tpl->tpl_vars['sortList']->value[6]['u1'];?>

                </a>

        </div>
        <ul class="bh_recruitment_tit clearfix">
            <li>职位名称</li>
            <li>工作单位</li>
            <li>工作地点</li>
            <li>招聘人数</li>
            <li>发布时间</li>
            <li>我要应聘</li>
        </ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tableList']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>
                <ul class="bh_recruitment_content  clearfix">
                    <li><?php echo $_smarty_tpl->tpl_vars['v']->value['zhiweimingcheng'];?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['v']->value['gongzuodanwei'];?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['v']->value['gongzuodidian'];?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['v']->value['zhaopinrenshu'];?>
</li>
                    <li><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['fabushijian'],0,10);?>
</li>
                    <a class="apply" href="/recruitment/ying?sort_id=314&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">应聘</a>
                    <a class="an" href="javascript:;">展开</a>
                    <li>
                        <div class="recruitment_text">
                            <?php echo html_entity_decode($_smarty_tpl->tpl_vars['v']->value['neirong']);?>

                        </div>
                    </li>
                </ul>
            <?php } else { ?>
                <ul class="bh_recruitment_content clearfix">
                    <li><?php echo $_smarty_tpl->tpl_vars['v']->value['zhiweimingcheng'];?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['v']->value['gongzuodanwei'];?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['v']->value['gongzuodidian'];?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['v']->value['zhaopinrenshu'];?>
</li>
                    <li><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['fabushijian'],0,10);?>
</li>
                    <a class="apply" href="/recruitment/ying?sort_id=314&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">应聘</a>
                    <a class="an" href="javascript:;">展开</a>
                    <li>
                        <div class="recruitment_text">
                            <?php echo html_entity_decode($_smarty_tpl->tpl_vars['v']->value['neirong']);?>

                        </div>
                    </li>
                </ul>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div class="fanye">
           <?php echo $_smarty_tpl->tpl_vars['pageinfo']->value;?>

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
