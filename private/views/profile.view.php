 <?php  $this->view('includes/header');?>
  <?php  $this->view('includes/nav');?>
   
	<div class="conteiner-fluid p-4 shadow mx-auto" style="max-width: 1000px">
		 <?php  $this->view('includes/crumbs');?>
		
		 <h1><i class="fa fa-plus"></i>profile</h1>
		 <div class="row">
		 	<div class="col-4 col-sm-3">
		 	<img src="<?=ROOT?>assets/no-image.jpg" class="d-block rounded mz-auto" style="width: 100px">

		 	</div>
		 	<div class="col-8 bg-light p-2 col-sm-9">
		 		
                 <table class="table table-striped table-bordered">
                 	 <tr><th>First Name:</th><td>nafiz</td></tr>
                 	  <tr><th>Last Name:</th><td>hasan</td></tr>
                 	   <tr><th>Gender:</th><td>male</td></tr>
                 	    <tr><th>Created Date:</th><td>male</td></tr>
                 	
                 </table>


		 	</div>
		 </div>
		 <hr>
		 <div class="row">
		 	 <div class="col-12 p-2">
		 	 	  <ul class="nav nav-tabs">
				  <li class="nav-item">
				    <a class="nav-link active" aria-current="page" href="#">Basic Info</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">Classes</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">Tests</a>
				  </li>
				 
				</ul>

			<nav class="navbar navbar-light bg-light">
			  <form class="container-fluid">
			    <div class="input-group">
			      <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
			      <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
			    </div>
			  </form>
			</nav>
		 	 	
		 	 </div>
		 	
		 </div>
	</div>
<?php $this->view('includes/footer');?>