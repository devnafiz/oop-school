 <?php  $this->view('includes/header');?>
  <?php  $this->view('includes/nav');?>
   
	<div class="conteiner-fluid p-4 shadow mx-auto" style="max-width: 1000px">
		 <?php  $this->view('includes/crumbs');?>
		
		 <h1><i class="fa fa-plus"></i>profile</h1>
		 <div class="row">
		 	<div class="col-4">
		 	<img src="<?=ROOT?>assets/no-image.jpg" class="d-block rounded mz-auto" style="width: 100px">

		 	</div>
		 	<div class="col-8 bg-light p-2">
		 		
                 <table class="table table-striped table-bordered">
                 	 <tr><th>First Name:</th><td>nafiz</td></tr>
                 	  <tr><th>Last Name:</th><td>hasan</td></tr>
                 	   <tr><th>Gender:</th><td>male</td></tr>
                 	
                 </table>


		 	</div>
		 </div>
	</div>
<?php $this->view('includes/footer');?>