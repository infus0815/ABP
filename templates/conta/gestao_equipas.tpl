{include file='common/header.tpl'}

<script>

	$("#nav_profile").addClass("active");

</script>

<div class="container">
	<div>
		<h3>Gestão de Equipas</h3>
	</div>
	<div class="row">
		
		{foreach from=$escaloes key=escalao_id item=escalao}
		<div class="col-md-4 col-sm-6 col-xs-8 panel-group">

			<ul id="equipas" class="list-group">
				<li class="list-group-item" style="text-align: center; background-color:#3A9965; color:white">Mini {$escalao}</li>
				{foreach $equipaEscaloes as $equipaEscalao}
				
				{if $equipaEscalao['escalao_id'] == $escalao_id}

				<li class="list-group-item">
					Mini {$equipaEscalao['nome']} {if $equipaEscalao['equipaescalao_nome'] != ""}({$equipaEscalao['equipaescalao_nome']}){/if}
					<span class="pull-right">
						<button class="btn btn-xs btn-danger" onclick=""><span class="glyphicon glyphicon-remove"></span></button>
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
						<form action="{$BASE_URL}actions/" method="post" enctype="multipart/form-data">
							<div class="form-group">
								{foreach from=$escaloes key=escalao_id item=escalao}
								<label class="radio-inline">
									<input type="radio" name="escalao" value="{$escalao_id}">Mini {$escalao}
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

			 		</div>
			 	</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>This is a small modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>

</div>

{include file='common/footer.tpl'}