<?php
/* Smarty version 3.1.33, created on 2019-06-10 06:31:36
  from 'D:\baohanghr\application\front\views\templates\defualt\yingpin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfdf948561163_62105478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd4221c20071c343743124a2c86657722b5893fc' => 
    array (
      0 => 'D:\\baohanghr\\application\\front\\views\\templates\\defualt\\yingpin.html',
      1 => 1560147537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:defualt/public/header.html' => 1,
    'file:defualt/public/footer.html' => 1,
  ),
),false)) {
function content_5cfdf948561163_62105478 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>人才招聘</title>
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
<div class="bh_bh_recruitment_form_container">
    <form id="tijiao">
        <input type="hidden" name="table_id" value="21">
        <input type="hidden" name="gangwei" value="<?php echo $_smarty_tpl->tpl_vars['gangwei']->value;?>
">
        <div class="bh_recruitment_form">
            <div class="clearfix">
                <p>姓名</p>
                <p>(必填)</p>
            </div>
            <input type="text" name="xingming">
        </div>
        <div class="bh_recruitment_form">
            <div class="clearfix">
                <p>性别</p>
                <p>(必填)</p>
            </div>
            <input type="text" name="xingbie">
        </div>
        <div class="bh_recruitment_form">
            <div class="clearfix">
                <p>学历</p>
                <p>(必填)</p>
            </div>
            <input type="text" name="xueli">
        </div>
        <div class="bh_recruitment_form">
            <div class="clearfix">
                <p>暂住地</p>
                <p>(必填)</p>
            </div>
            <input type="text" name="zanzhudi">
        </div>
        <div class="bh_recruitment_form">
            <div class="clearfix">
                <p>联系方式</p>
                <p>(必填)</p>
            </div>
            <input type="text" name="lianxifangshi">
        </div>
        <div class="bh_recruitment_form">
            <div class="clearfix">
                <p>上传附件</p>
                <p>(选填)</p>
            </div>
            <button type="button" class="layui-btn" id="test1">+上传简历</button>
            <input type="hidden" value="" name="shangchuanfujian" id="huo">
            <input class="submit" type="button" value="应聘岗位" id="tj">
        </div>
    </form>
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
js/layer.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
layui/layui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
js/bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['CUR_TPL_PATH']->value;?>
js/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    layui.use('upload', function(){
        var upload = layui.upload;
        //执行实例
        var uploadInst = upload.render({
            elem: '#test1' //绑定元素
            ,url: '/recruitment/tu' //上传接口
            ,accept: 'file' //允许上传的文件类型
            ,done: function(res){
                layer.msg(res.msg);
                $('#huo').val(res.url);
            }
            ,error: function(){
                //请求异常回调
                layer.msg(res.msg);
            }
        });
    });
    $('#tj').click(function () {
        json=$("#tijiao").serialize();
        $.ajax(      //ajax方式提交表单
            {
                url: '/admin/autotable/insert',
                type: 'post',
                dataType: 'json',
                data:json,
                beforeSubmit: function () {},
                success: function (data) {
                    if (data.status == "true" || data.status == true) {
                        setTimeout(function () {
                            layer.msg('您的申请已提交，请耐心等待!');
                        },3000);
                    } else {
                        layer.msg(data.msg);
                    }
                },
                clearForm: true,//禁止清楚表单
                //resetForm: false //禁止重置表单
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
