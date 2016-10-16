<?php /* Smarty version Smarty-3.1.14, created on 2016-10-15 21:18:08
         compiled from ".\templates\index3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27708580280f0014bc7-62459488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f33e8f1ab3d0dfa6c01a1e5e3c8e187564dada5' => 
    array (
      0 => '.\\templates\\index3.tpl',
      1 => 1474603406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27708580280f0014bc7-62459488',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_580280f007a4e3_16816166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580280f007a4e3_16816166')) {function content_580280f007a4e3_16816166($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
  <head>
    
    <meta charset="utf-8">
    <title>Lista de Piezas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
  </head>
  <body>

    <h1>Lista de Piezas</h1>
    <div id="listaPiezas">
      <?php echo $_smarty_tpl->getSubTemplate ('listapiezas.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
  </body>
</html><?php }} ?>