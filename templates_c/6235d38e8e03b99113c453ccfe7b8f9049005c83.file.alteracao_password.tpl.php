<?php /* Smarty version Smarty-3.1.15, created on 2016-12-30 18:52:48
         compiled from "\XAMPP\htdocs\ABP\templates\conta\alteracao_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1359358669ef0096204-75609195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6235d38e8e03b99113c453ccfe7b8f9049005c83' => 
    array (
      0 => '\\XAMPP\\htdocs\\ABP\\templates\\conta\\alteracao_password.tpl',
      1 => 1483120135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1359358669ef0096204-75609195',
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
  'unifunc' => 'content_58669ef0157d46_46199408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58669ef0157d46_46199408')) {function content_58669ef0157d46_46199408($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
