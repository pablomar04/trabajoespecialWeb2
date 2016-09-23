<?php /* Smarty version Smarty-3.1.14, created on 2016-09-23 05:45:08
         compiled from ".\templates\listapiezas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36157e4a544015cf9-64187818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6864352345adef5f6885ef0eb52a86b6cdc3bfcf' => 
    array (
      0 => '.\\templates\\listapiezas.tpl',
      1 => 1474601579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36157e4a544015cf9-64187818',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'piezas' => 0,
    'pieza' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57e4a54407f480_59042252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4a54407f480_59042252')) {function content_57e4a54407f480_59042252($_smarty_tpl) {?><ul>
  <?php  $_smarty_tpl->tpl_vars['pieza'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pieza']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['piezas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pieza']->key => $_smarty_tpl->tpl_vars['pieza']->value){
$_smarty_tpl->tpl_vars['pieza']->_loop = true;
?>
  <li>
      <?php echo $_smarty_tpl->tpl_vars['pieza']->value['codigo'];?>

  </li>
  <?php } ?>
</ul><?php }} ?>