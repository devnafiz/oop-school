
	
  <?php  $this->view('includes/header');?>

	<div class="conteiner-fluid">
		
		 <div class="p-4 mx-auto shadow" style="max-width: 320px; width: 100% ;margin-top: 30px">
		 	<h2 class="text-center">My school</h2>
		 	<h3 class="text-center"> Login</h3>
		 	 <input type="text" name="email" class="form-control" placeholder="Email" autofocus><br>
		 	  <input type="password" name="password" class="form-control" placeholder="password" autofocus>
		 	  <br>
		 	  <button class="btn btn-info">Login</button>
		 </div>	
	</div>
<?php $this->view('includes/footer');?>