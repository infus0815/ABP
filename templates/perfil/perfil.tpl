{include file='common/header.tpl'}

<script>

  $("#nav_profile").addClass("active");
  
</script>

<div class="container">
	<div>
		<h3>Alteração de Password</h3>
	</div>
	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-8">
		  <form action="{$BASE_URL}actions/" method="post" enctype="multipart/form-data">
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


{include file='common/footer.tpl'}