<?php /* Smarty version Smarty-3.1.14, created on 2016-10-17 01:40:23
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:612857e4a543dd9396-20366433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1476661217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '612857e4a543dd9396-20366433',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57e4a543eb3fc6_23096345',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4a543eb3fc6_23096345')) {function content_57e4a543eb3fc6_23096345($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div class="container-fluid" id="principal">


       <?php echo $_smarty_tpl->getSubTemplate ("listado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      
    </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>