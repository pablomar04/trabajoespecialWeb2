<?php /* Smarty version Smarty-3.1.14, created on 2016-10-15 21:36:52
         compiled from ".\templates\listapiezas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36157e4a544015cf9-64187818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6864352345adef5f6885ef0eb52a86b6cdc3bfcf' => 
    array (
      0 => '.\\templates\\listapiezas.tpl',
      1 => 1476560210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36157e4a544015cf9-64187818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57e4a54407f480_59042252',
  'variables' => 
  array (
    'piezas' => 0,
    'pieza' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4a54407f480_59042252')) {function content_57e4a54407f480_59042252($_smarty_tpl) {?><!--<ul>
  <?php  $_smarty_tpl->tpl_vars['pieza'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pieza']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['piezas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pieza']->key => $_smarty_tpl->tpl_vars['pieza']->value){
$_smarty_tpl->tpl_vars['pieza']->_loop = true;
?>
  <li>
      <?php echo $_smarty_tpl->tpl_vars['pieza']->value['codigo'];?>

  </li>
  <?php } ?>
</ul>-->

<div class="row">
	<?php  $_smarty_tpl->tpl_vars['pieza'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pieza']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['piezas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pieza']->key => $_smarty_tpl->tpl_vars['pieza']->value){
$_smarty_tpl->tpl_vars['pieza']->_loop = true;
?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3><?php echo $_smarty_tpl->tpl_vars['pieza']->value['codigo'];?>
</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['pieza']->value['id_campania'];?>
</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
   <?php } ?>
</div><?php }} ?>