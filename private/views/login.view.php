
	
  <?php  $this->view('includes/header');?>

	<div class="conteiner-fluid">
		<?php if(count($errors)>0)?>
		 <div class="alert alert-warning alert-dismissible fade show" role="alert">
		  <strong>Error:</strong> 
		   <?php foreach($errors as $error): ?>
		 <br> <?=$error?>

		<?php endforeach;?>
		  <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </span>
		</div>
	    <? endif;?>
		<form method="POST">
		 <div class="p-4 mx-auto shadow" style="max-width: 320px; width: 100% ;margin-top: 30px">
		 	<h2 class="text-center">My school</h2>
		 	<h3 class="text-center"> Login</h3>
		 	 <input type="text" name="email" class="form-control" placeholder="Email" autofocus <?=get_var('email')?>><br>
		 	  <input type="password" name="password" class="form-control" placeholder="password" autofocus <?=get_var('password')?>>
		 	  <br>
		 	  <button class="btn btn-info">Login</button>
		 </div>
		 </form>	
	</div>
<?php $this->view('includes/footer');?>