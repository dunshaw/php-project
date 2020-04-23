<?php
/* Smarty version 3.1.33, created on 2019-06-10 06:12:31
  from 'D:\baohanghr\application\front\views\templates\defualt\public\seo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfdf4cf365a12_66174755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd43958d18621cf617fc49e04f05b586b6a5a0a50' => 
    array (
      0 => 'D:\\baohanghr\\application\\front\\views\\templates\\defualt\\public\\seo.html',
      1 => 1552013730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfdf4cf365a12_66174755 (Smarty_Internal_Template $_smarty_tpl) {
?><title><?php echo $_smarty_tpl->tpl_vars['seodata']->value['t'];?>
 </title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['seodata']->value['k'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['seodata']->value['d'];?>
" /><?php }
}
