{include file='common/header.tpl'}

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
		<br>
	</div>
	<div class="row">

		{foreach from=$escaloes key=escalao_id item=escalao}
			<div class="col-md-4 col-sm-6 col-xs-8 panel-group">

				<ul id="equipas" class="list-group">
					<li class="list-group-item" style="text-align: center; background-color:#3A9965; color:white">Mini {$escalao}</li>
					{foreach $equipaEscaloes as $equipaEscalao}

						{if $equipaEscalao['escalao_id'] == $escalao_id}

							<li class="list-group-item">
								Mini {$equipaEscalao['nome']}
								{if $equipaEscalao['equipaescalao_nome'] != ""}({$equipaEscalao['equipaescalao_nome']}){/if}
								<span class="pull-right">
											<button class="btn btn-xs btn-danger" data-content="Mini {$equipaEscalao['nome']} {if $equipaEscalao['equipaescalao_nome'] != ""}({$equipaEscalao['equipaescalao_nome']}){/if}" data-href="{$BASE_URL}actions/equipas/eliminar_equipaescalao.php?equipaescalao_id={$equipaEscalao['equipaescalao_id']}" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-remove"></span></button>
								</span>
							</li>
						{/if}
					{/foreach}
				</ul>
			</div>

		{/foreach}

	</div>

	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-8 panel-group">
			<div class="panel panel-default">
				<div class="panel-heading">Nova Equipa</div>
				<div class="panel-body">
					<form action="{$BASE_URL}actions/equipas/criar_equipaescalao.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							{foreach $escaloes_all as $escalao}
								<label class="radio-inline">
									<input type="radio" name="escalao" value="{$escalao['escalao_id']}">Mini {$escalao['nome']}
								</label>
							{/foreach}
						</div>
						<div class="form-group">
							<input type="text" id="nome_equipaescalao" name="nome" placeholder="Nome da equipa">
						</div>
						<div class="form-group">
							<button class="btn btn-xs btn-success" type="submit">Criar nova equipa</button>
						</div>
					</form>
					<div style="color:red; padding-top:10px">
						{foreach $ERROR_MESSAGES as $error_message}
							{$error_message}
						{/foreach}
					</div>
					<div style="color:green; padding-top:10px">
						{foreach $SUCCESS_MESSAGES as $success_message}
							{$success_message}
						{/foreach}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<script>
	$('#confirm-delete').on('show.bs.modal', function(e) {
		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

		$('.modal_content').html('<strong>' +  $(e.relatedTarget).data('content') + '</strong>');
	});
</script>

{include file='common/footer.tpl'}