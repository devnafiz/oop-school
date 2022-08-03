
	
  <?php  $this->view('includes/header');?>
  <?php  $this->view('includes/nav');?>
	<div class="conteiner-fluid">
		
		 <h1><i class="fa fa-plus"></i>This is home</h1>
		 <?php
		 echo "<pre>";
		 print_r($rows);
		 ?>	
	</div>
<?php $this->view('includes/footer');?>