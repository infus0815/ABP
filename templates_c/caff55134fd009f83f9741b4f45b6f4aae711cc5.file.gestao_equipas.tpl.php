<?php /* Smarty version Smarty-3.1.15, created on 2017-02-19 13:42:51
         compiled from "\XAMPP\htdocs\ABP\templates\conta\gestao_equipas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:308515866a0d362a910-04617316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caff55134fd009f83f9741b4f45b6f4aae711cc5' => 
    array (
      0 => '\\XAMPP\\htdocs\\ABP\\templates\\conta\\gestao_equipas.tpl',
      1 => 1487505864,
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
    'escaloes' => 0,
    'escalao' => 0,
    'equipaEscaloes' => 0,
    'equipaEscalao' => 0,
    'escalao_id' => 0,
    'BASE_URL' => 0,
    'escaloes_all' => 0,
    'ERROR_MESSAGES' => 0,
    'error_message' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5866a0d3660d05_82766534')) {function content_5866a0d3660d05_82766534($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script>

	$("#nav_profile").addClass("active");


</script>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Eliminar Equipa?</h4>
			</div>

			<div class="modal-body">
				<p>Tem a certeza que pretende eliminar a equipa <span class="modal_content"></span>
				</p>
				<p>Irá também eliminar todos os registos da mesma!</p>

			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a class="btn btn-danger btn-ok">Delete</a>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div>
		<h3>Gestão de Equipas</h3>
	</div>
	<div class="row">

		<?php  $_smarty_tpl->tpl_vars['escalao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['escalao']->_loop = false;
 $_smarty_tpl->tpl_vars['escalao_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['escaloes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['escalao']->key => $_smarty_tpl->tpl_vars['escalao']->value) {
$_smarty_tpl->tpl_vars['escalao']->_loop = true;
 $_smarty_tpl->tpl_vars['escalao_id']->value = $_smarty_tpl->tpl_vars['escalao']->key;
?>
			<div class="col-md-4 col-sm-6 col-xs-8 panel-group">

				<ul id="equipas" class="list-group">
					<li class="list-group-item" style="text-align: center; background-color:#3A9965; color:white">Mini <?php echo $_smarty_tpl->tpl_vars['escalao']->value;?>
</li>
					<?php  $_smarty_tpl->tpl_vars['equipaEscalao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['equipaEscalao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['equipaEscaloes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['equipaEscalao']->key => $_smarty_tpl->tpl_vars['equipaEscalao']->value) {
$_smarty_tpl->tpl_vars['equipaEscalao']->_loop = true;
?>

						<?php if ($_smarty_tpl->tpl_vars['equipaEscalao']->value['escalao_id']==$_smarty_tpl->tpl_vars['escalao_id']->value) {?>

							<li class="list-group-item">
								Mini <?php echo $_smarty_tpl->tpl_vars['equipaEscalao']->value['nome'];?>

								<?php if ($_smarty_tpl->tpl_vars['equipaEscalao']->value['equipaescalao_nome']!='') {?>(<?php echo $_smarty_tpl->tpl_vars['equipaEscalao']->value['equipaescalao_nome'];?>
)<?php }?>
								<span class="pull-right">
											<button class="btn btn-xs btn-danger" data-content="Mini <?php echo $_smarty_tpl->tpl_vars['equipaEscalao']->value['nome'];?>
 <?php if ($_smarty_tpl->tpl_vars['equipaEscalao']->value['equipaescalao_nome']!='') {?>(<?php echo $_smarty_tpl->tpl_vars['equipaEscalao']->value['equipaescalao_nome'];?>
)<?php }?>" data-href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/equipas/eliminar_equipaescalao.php?equipaescalao_id=<?php echo $_smarty_tpl->tpl_vars['equipaEscalao']->value['equipaescalao_id'];?>
" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-remove"></span></button>
								</span>
							</li>
						<?php }?>
					<?php } ?>
				</ul>
			</div>

		<?php } ?>

	</div>

	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-8 panel-group">
			<div class="panel panel-default">
				<div class="panel-heading">Nova Equipa</div>
				<div class="panel-body">
					<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/equipas/criar_equipaescalao.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<?php  $_smarty_tpl->tpl_vars['escalao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['escalao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['escaloes_all']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['escalao']->key => $_smarty_tpl->tpl_vars['escalao']->value) {
$_smarty_tpl->tpl_vars['escalao']->_loop = true;
?>
								<label class="radio-inline">
									<input type="radio" name="escalao" value="<?php echo $_smarty_tpl->tpl_vars['escalao']->value['escalao_id'];?>
">Mini <?php echo $_smarty_tpl->tpl_vars['escalao']->value['nome'];?>

								</label>
							<?php } ?>
						</div>
						<div class="form-group">
							<input type="text" id="nome_equipaescalao" name="nome" placeholder="Nome da equipa">
						</div>
						<div class="form-group">
							<button class="btn btn-xs btn-success" type="submit">Criar nova equipa</button>
						</div>
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
	</div>
</div>




<script>
	$('#confirm-delete').on('show.bs.modal', function(e) {
		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

		$('.modal_content').html('<strong>' + $(e.relatedTarget).data('content') + '</strong>');
	});
</script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
