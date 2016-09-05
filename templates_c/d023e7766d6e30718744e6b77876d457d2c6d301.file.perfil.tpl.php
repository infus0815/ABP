<?php /* Smarty version Smarty-3.1.15, created on 2016-09-05 19:16:53
         compiled from "\XAMPP\htdocs\ABP\templates\perfil\perfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1109857ad3af1bc1c56-07536028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd023e7766d6e30718744e6b77876d457d2c6d301' => 
    array (
      0 => '\\XAMPP\\htdocs\\ABP\\templates\\perfil\\perfil.tpl',
      1 => 1473095604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1109857ad3af1bc1c56-07536028',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57ad3af1be7f07_38030897',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ad3af1be7f07_38030897')) {function content_57ad3af1be7f07_38030897($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script>

  $("#nav_profile").addClass("active");
  
</script>

<div class="container">
	<div>
		<h3>Alteraração de Password</h3>
	</div>
	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-8">
		  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/" method="post" enctype="multipart/form-data">
		    <div class="form-group">
		    	<label for="old_password">Password actual:</label>
		      	<input type="password" class="form-control" name="old_password" id="old_password">
		    </div>
		    <div class="form-group">
		    	<label for="new_password">Nova password:</label>
		      	<input type="password" class="form-control" name="new_password" id="new_password">
		    </div>
		    <div class="form-group">
		    	<label for="new_password2">Repetir nova password:</label>
		      	<input type="password" class="form-control" name="new_password2" id="new_password2">
		    </div>
		    <button type="submit" class="btn btn-success">Confirmar</button>
		  </form>
	  </div>
  </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
