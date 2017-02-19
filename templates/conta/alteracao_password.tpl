{include file='common/header.tpl'}

<script>

  $("#nav_profile").addClass("active");
  
</script>

<div class="container">
	<div>
		<h3>Alteração de Password</h3>
		<br>
	</div>
	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-8">
		  <form action="{$BASE_URL}actions/equipas/alteracao_password.php" method="post" enctype="multipart/form-data">
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


{include file='common/footer.tpl'}