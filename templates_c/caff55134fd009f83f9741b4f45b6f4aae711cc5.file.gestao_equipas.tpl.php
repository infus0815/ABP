<?php /* Smarty version Smarty-3.1.15, created on 2016-12-30 19:21:42
         compiled from "\XAMPP\htdocs\ABP\templates\conta\gestao_equipas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:308515866a0d362a910-04617316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caff55134fd009f83f9741b4f45b6f4aae711cc5' => 
    array (
      0 => '\\XAMPP\\htdocs\\ABP\\templates\\conta\\gestao_equipas.tpl',
      1 => 1483122099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308515866a0d362a910-04617316',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5866a0d3660d05_82766534',
  'variables' => 
  array (
    'equipaEscaloes' => 0,
    'equipaEscalao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5866a0d3660d05_82766534')) {function content_5866a0d3660d05_82766534($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script>

  $("#nav_profile").addClass("active");
  
</script>

<div class="container">
	<div>
		<h3>Gestão de Equipas</h3>
	</div>
	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-8">
			<ul id="equipas" class="list-group">
				<?php  $_smarty_tpl->tpl_vars['equipaEscalao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['equipaEscalao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['equipaEscaloes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['equipaEscalao']->key => $_smarty_tpl->tpl_vars['equipaEscalao']->value) {
$_smarty_tpl->tpl_vars['equipaEscalao']->_loop = true;
?>
				<li class="list-group-item">
					<?php echo $_smarty_tpl->tpl_vars['equipaEscalao']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['equipaEscalao']->value['equipaescalao_nome'];?>

			        <span class="pull-right">
			        	<button class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
			    	</span>
				</li>
				<?php } ?>
				<li class="list-group-item">
					<form>
					<div class="form-group">

						<label>Nome</label>
						<input>
							
						</input>
</div>
<div class="form-group">

						<label>Nome</label>
						<input>
							
						</input>
						</div>

					</form>
					<button class="btn btn-xs btn-success">Criar nova equipa</button>
				</li>
          </ul>
	  	</div>
  </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
