<?php /* Smarty version Smarty-3.1.14, created on 2016-09-23 06:03:08
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:612857e4a543dd9396-20366433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1474603384,
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
<?php if ($_valid && !is_callable('content_57e4a543eb3fc6_23096345')) {function content_57e4a543eb3fc6_23096345($_smarty_tpl) {?>
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