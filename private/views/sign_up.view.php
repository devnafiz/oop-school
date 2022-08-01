
	
  <?php  $this->view('includes/header');?>

	<div class="conteiner-fluid">
		
		 <div class="p-4 mx-auto shadow" style="max-width: 320px; width: 100% ;margin-top: 30px">
		 	<h2 class="text-center">My school</h2>
		 	<h3 class="text-center"> Add User</h3>
             <input type="text" name="firstname" class="my-2 form-control" placeholder="First name" >
		 	 <input type="text" name="lastname" class="my-2 form-control" placeholder="Last Name" >
		 	 <input type="text" name="email" class="my-2 form-control" placeholder="Email" >
		 	 <select class=" my-2 form-control" name="gender">
		 	 	<option value="">--Select gender</option>
		 	 	<option value="male">Male</option>
		 	 	<option value="female">Female</option>
		 	 </select>
		 	 <select class="my-2 form-control" >
		 	 	 <option value="">--Select Rank--</option>
		 	 	 <option value="Student">Student</option>
		 	 	 <option value="Reception">Reception</option>
		 	 	 <option value="Lecturer">Lecturer</option>
		 	 	 <option value="Admin">Admin</option>
		 	 	 <option value="Super admin">Super Admin</option>
		 	 </select>
		 	 <input type="text" name="password" class=" my-2 form-control" placeholder="password" >
		 	 <input type="text" name="password2" class=" my-2 form-control" placeholder="confirm password" >
		 	  <br>
		 	  <button class="btn btn-info">Sign Up</button>
		 </div>	
	</div>
<?php $this->view('includes/footer');?>