<?php
/* Smarty version 3.1.33, created on 2019-06-10 06:12:31
  from 'D:\baohanghr\application\front\views\templates\defualt\public\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfdf4cf374e40_67712224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2dfe9a482d446c8b9471e90f83a1cb710195f6d' => 
    array (
      0 => 'D:\\baohanghr\\application\\front\\views\\templates\\defualt\\public\\header.html',
      1 => 1560146861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfdf4cf374e40_67712224 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
<!-- var _hmt = _hmt || []; (function() { var hm = document.createElement("script"); hm.src = "https://hm.baidu.com/hm.js?532e05ebec4cf18759fab388332fcc60"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s); })();  --><?php echo '</script'; ?>
> 
<!-- <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" async src="http://lxbjs.baidu.com/lxb.js?sid=13406818"><?php echo '</script'; ?>
> -->
<style>
    #newBridge .icon-right-center{
        display: none;
    }
    #LXB_CONTAINER .lxb-container{
        display: none !important;
    }
    #newBridge .nb-icon-wrap-0{
        display: none;
    }
</style>
<link href="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
css/iconfont.css" rel="stylesheet">
<meta name="baidu-site-verification" content="uf7GGTzVmp" />
<nav class="bh_nav navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="bh_logo">
                <h1> <img src="<?php echo $_smarty_tpl->tpl_vars['dibu']->value['toubulogo'];?>
" alt="宝航人力" title="宝航人力"></h1>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" id="nav_a">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sortList']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['k']->value == 0 && empty($_smarty_tpl->tpl_vars['sort_id']->value)) {?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['u5'];?>
" class="nav_li_active lis_01"><?php echo $_smarty_tpl->tpl_vars['v']->value['u1'];?>
</a></li>
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['sort_id']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['u5'];?>
" class="nav_li_active lis_01"><?php echo $_smarty_tpl->tpl_vars['v']->value['u1'];?>
</a></li>
                            <?php } else { ?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['u5'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['u1'];?>
</a></li>
                            <?php }?>
                        <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
</nav>
<div class="nav_2 ">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sortList']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <?php if (empty($_smarty_tpl->tpl_vars['v']->value['child'])) {?>
            <ul class="nav_list_2">
            </ul>
        <?php } else { ?>
            <ul class="nav_list_2">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['child'], 'vv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->value) {
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['vv']->value['u5'];?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['u1'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
