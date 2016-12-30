{include file='common/header.tpl'}

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
				{foreach $equipaEscaloes as $equipaEscalao}
				<li class="list-group-item">
					{$equipaEscalao['nome']} {$equipaEscalao['equipaescalao_nome']}
			        <span class="pull-right">
			        	<button class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
			    	</span>
				</li>
				{/foreach}
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


{include file='common/footer.tpl'}