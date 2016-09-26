<?php /* Smarty version Smarty-3.1.14, created on 2016-09-26 04:17:00
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:612857e4a543dd9396-20366433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1474849260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '612857e4a543dd9396-20366433',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57e4a543eb3fc6_23096345',
  'variables' => 
  array (
    'camp' => 0,
    'campania' => 0,
    'piezas' => 0,
    'pieza' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4a543eb3fc6_23096345')) {function content_57e4a543eb3fc6_23096345($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div class="container-fluid" id="principal">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          
            <ul class="nav nav-sidebar">
              <?php  $_smarty_tpl->tpl_vars['campania'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['campania']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['camp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['campania']->key => $_smarty_tpl->tpl_vars['campania']->value){
$_smarty_tpl->tpl_vars['campania']->_loop = true;
?>
                <li id="li<?php echo $_smarty_tpl->tpl_vars['campania']->value['id_campania'];?>
"><a href="#"><?php echo $_smarty_tpl->tpl_vars['campania']->value['codigo'];?>
</a></li>
              <?php } ?>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Listado de piezas</h1>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  
                  <th>Codigo</th>
                  <th>Descripcion</th>
                  <th>Campaña</th>
                  <th>Cantidad</th>
                  <th></th>
                  <th></th>
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
                    <a href="" id="<?php echo $_smarty_tpl->tpl_vars['pieza']->value['id'];?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['pieza']->value['codigo'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['pieza']->value['descripcion'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['pieza']->value['fk_id_campania'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['pieza']->value['cantidad'];?>
</td>
                    <td><a href=""><i class="fa fa-plus-square-o fa-2x" aria-hidden="true"></a></i><a href=""><i class="fa fa-minus-square-o fa-2x" aria-hidden="true"></a></i></td>
                   <td><a href=""><i class="fa fa-info fa-2x" aria-hidden="true"></i></a></td>
                   <td><a href=""><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a></td>
                   </a>
                  </tr>
                  <?php } ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>