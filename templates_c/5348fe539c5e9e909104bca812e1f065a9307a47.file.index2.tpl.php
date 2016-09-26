<?php /* Smarty version Smarty-3.1.14, created on 2016-09-25 20:52:50
         compiled from ".\templates\index2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:857757e56b593f9510-79933707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5348fe539c5e9e909104bca812e1f065a9307a47' => 
    array (
      0 => '.\\templates\\index2.tpl',
      1 => 1474760134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '857757e56b593f9510-79933707',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_57e56b595bf501_94009911',
  'variables' => 
  array (
    'camp' => 0,
    'campania' => 0,
    'piezas' => 0,
    'pieza' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e56b595bf501_94009911')) {function content_57e56b595bf501_94009911($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Stock</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--<script src="https://use.fontawesome.com/eab46a043e.js"></script>-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Romera Hnos. S.A.</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Carga ABM</a></li>

          </ul>

        </div>
      </div>
    </nav>

    <div class="container-fluid">
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
                    </a>
                  </tr>
                  <?php } ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php }} ?>