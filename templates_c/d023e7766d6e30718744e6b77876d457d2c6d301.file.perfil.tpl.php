<?php /* Smarty version Smarty-3.1.15, created on 2016-09-23 18:42:28
         compiled from "\XAMPP\htdocs\ABP\templates\perfil\perfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3106057e55b74dd76d5-81150392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd023e7766d6e30718744e6b77876d457d2c6d301' => 
    array (
      0 => '\\XAMPP\\htdocs\\ABP\\templates\\perfil\\perfil.tpl',
      1 => 1474047522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3106057e55b74dd76d5-81150392',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'ERROR_MESSAGES' => 0,
    'error_message' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57e55b74e7d776_19119781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e55b74e7d776_19119781')) {function content_57e55b74e7d776_19119781($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script>

  $("#nav_profile").addClass("active");
  
</script>

<div class="container">
	<div>
		<h3>Alteração de Password</h3>
	</div>
	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-8">
		  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/equipas/alteracao_password.php" method="post" enctype="multipart/form-data">
		    <div class="form-group">
		    	<label for="old_password">Password actual:</label>
		      	<input type="password" class="form-control" name="old_password" id="old_password">
		    </div>
		    <div class="form-group">
		    	<label for="new_password1">Nova password:</label>
		      	<input type="password" class="form-control" name="new_password1" id="new_password1">
		    </div>
		    <div class="form-group">
		    	<label for="new_password2">Repetir nova password:</label>
		      	<input type="password" class="form-control" name="new_password2" id="new_password2">
		    </div>
		    <button type="submit" class="btn btn-success">Confirmar</button>
		  </form>
		  <div style="color:red; padding-top:10px">
		    <?php  $_smarty_tpl->tpl_vars['error_message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error_message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error_message']->key => $_smarty_tpl->tpl_vars['error_message']->value) {
$_smarty_tpl->tpl_vars['error_message']->_loop = true;
?>
		    	<?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>

		   	<?php } ?>
		  </div>
		  <div style="color:green; padding-top:10px">
		   	<?php  $_smarty_tpl->tpl_vars['success_message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success_message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success_message']->key => $_smarty_tpl->tpl_vars['success_message']->value) {
$_smarty_tpl->tpl_vars['success_message']->_loop = true;
?>
		    	<?php echo $_smarty_tpl->tpl_vars['success_message']->value;?>

		   	<?php } ?>
		  </div>
	  </div>
  </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
