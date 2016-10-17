<?php /* Smarty version Smarty-3.1.14, created on 2016-10-17 07:46:02
         compiled from ".\templates\verpieza.tpl" */ ?>
<?php /*%%SmartyHeaderCode:222775802ac4d94b508-91512585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90f1b33a45073950d1f9db31547cad81beab62ba' => 
    array (
      0 => '.\\templates\\verpieza.tpl',
      1 => 1476683159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222775802ac4d94b508-91512585',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5802ac4d985e90_17005418',
  'variables' => 
  array (
    'pieza' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5802ac4d985e90_17005418')) {function content_5802ac4d985e90_17005418($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


 <div id="contenedor">
    
<h1>Campaña <?php echo $_smarty_tpl->tpl_vars['pieza']->value[0]['codigo_campania'];?>
</h1>
<h2><?php echo $_smarty_tpl->tpl_vars['pieza']->value[0]['titulo'];?>
</h2>
<h3>Stock:<?php echo $_smarty_tpl->tpl_vars['pieza']->value[0]['cantidad'];?>
</h3>
<div class="row">
	<?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pieza']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
	<div class="col-sm-6 col-md-4">
		
			<div class="thumbnail">
				<img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
" alt="">
			</div>
	</div>
	<?php } ?>
</div>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<?php }} ?>