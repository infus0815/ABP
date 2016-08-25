<?php /* Smarty version Smarty-3.1.15, created on 2016-08-25 20:14:10
         compiled from "\XAMPP\htdocs\ABP\templates\common\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16344579b9af9037911-07911129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29e7cb51877ac26a0a91d9b34690faccb2332648' => 
    array (
      0 => '\\XAMPP\\htdocs\\ABP\\templates\\common\\header.tpl',
      1 => 1472148847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16344579b9af9037911-07911129',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_579b9af905a775_00130098',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579b9af905a775_00130098')) {function content_579b9af905a775_00130098($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title>Fritter</title>
    <meta charset='utf-8'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
    crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/style.css">
    <script
    src="https://code.jquery.com/jquery-2.2.3.js"
    integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
    integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
    crossorigin="anonymous"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/jquery-ui/jquery-ui.min.js"></script>    
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/main.js"></script>
</head>
<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/presentation/presentation.php">ABP</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="menu">
                <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
                <ul class="nav navbar-nav">
                    <li id="nav_calendar"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/calendar/calendar.php">Calendário</a></li>
                    <li id="nav_profile"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/perfil/perfil.php">Perfil</a></li>
                    <!-- <li><a id="nav_historico" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Histórico</a></li> -->
                </ul>           
                <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/equipas/logout.php" class="navbar-form navbar-right">
                    <label style="color:white; padding-right:10px"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</label>
                    <button type="submit" class="btn"><span class="glyphicon glyphicon-log-out"></span> Logout</button>
                </form>
                <?php } else { ?>
                <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/equipas/login.php" method="post" enctype="multipart/form-data" class="navbar-form navbar-right">
                    <input type="text" placeholder="username" name="username" class="form-control">
                    <input type="password" placeholder="password" name="password" class="form-control">
                    <button type="submit" class="btn"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                </form>        
                <?php }?>
            </div>
        </div>
    </nav>

    <div class="container-fluid">



   <!--  <div class="container">
        <div class="page-header">

            <h1><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">ABP</a></h1>

            <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/equipas/logout.php">
                <strong><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</strong>
                <button type="submit">Logout</button>
            </form>
            <?php } else { ?>
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/equipas/login.php" method="post" enctype="multipart/form-data">
                <input type="text" placeholder="username" name="username">
                <input type="password" placeholder="password" name="password">
                <button type="submit">Login</button>
            </form>
            <?php }?>

            <div class="row">
                <div class="col-sm-2">
                    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
                    <div style="color:red"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<div class="close">X</div></div>
                    <?php } ?>
            
                    <?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
                    <div style="color:green"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<div class="close">X</div></div>
                    <?php } ?>
                </div>
            </div>

        </div> -->



<?php }} ?>
