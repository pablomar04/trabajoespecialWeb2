<?php /* Smarty version Smarty-3.1.14, created on 2016-10-17 07:23:58
         compiled from ".\templates\stock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2552258045380192153-03330850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e21440e560c5d594a97e2c99f15c45ad5b28567' => 
    array (
      0 => '.\\templates\\stock.tpl',
      1 => 1476681822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2552258045380192153-03330850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5804538034f6b0_42919262',
  'variables' => 
  array (
    'piezas' => 0,
    'pieza' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5804538034f6b0_42919262')) {function content_5804538034f6b0_42919262($_smarty_tpl) {?><h1 class="page-header">Listado de piezas</h1>

<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        
        <th>Codigo</th>
        <th>Descripcion</th>
        <th>Campaña</th>
        <th>Cantidad</th>
        <th></th>

      </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['pieza'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pieza']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['piezas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pieza']->key => $_smarty_tpl->tpl_vars['pieza']->value){
$_smarty_tpl->tpl_vars['pieza']->_loop = true;
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['pieza']->value['codigo_pieza'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['pieza']->value['descripcion'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['pieza']->value['codigo_campania'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['pieza']->value['cantidad'];?>
</td>
          <td><a href="index.php?action=ver_pieza&id_pieza=<?php echo $_smarty_tpl->tpl_vars['pieza']->value['id'];?>
"><i class="fa fa-info fa-2x" aria-hidden="true"></i></a></td>               
        </tr>
        <?php } ?>
    </tbody>
  </table>
</div><?php }} ?>