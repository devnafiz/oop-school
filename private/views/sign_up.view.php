
	
  <?php  $this->view('includes/header');?>

  <?php
     print_r($errors);
  ?>

	<div class="conteiner-fluid">
		<form action="" method="post">
		 <div class="p-4 mx-auto shadow" style="max-width: 320px; width: 100% ;margin-top: 30px">
		 	<h2 class="text-center">My school</h2>
		 	<h3 class="text-center"> Add User</h3>
             <input type="text" name="firstname" <?=get_var('firstname')?> class="my-2 form-control" placeholder="First name" >
		 	 <input type="text" name="lastname" <?=get_var('lastname')?> class="my-2 form-control" placeholder="Last Name" >
		 	 <input type="text" name="email" <?=get_var('email')?> class="my-2 form-control" placeholder="Email" >
		 	 <select class=" my-2 form-control" name="gender">
		 	 	<option <?=get_select('gender','')?> value="">--Select gender</option>
		 	 	<option <?=get_select('gender','male')?> value="male">Male</option>
		 	 	<option <?=get_select('gender','female')?> value="female">Female</option>
		 	 </select>
		 	 <select class="my-2 form-control" name="rank" >
		 	 	 <option <?=get_select('rank','')?> value="">--Select Rank--</option>
		 	 	 <option <?=get_select('rank','Student')?> value="Student">Student</option>
		 	 	 <option <?=get_select('rank','Reception')?> value="Reception">Reception</option >
		 	 	 <option <?=get_select('rank','Lecturer')?> value="Lecturer">Lecturer</option >
		 	 	 <option <?=get_select('rank','Admin')?> value="Admin">Admin</option>
		 	 	 <option <?=get_select('rank','Super admin')?> value="Super admin">Super Admin</option>
		 	 </select>
		 	 <input type="text"  <?=get_var('password')?>  name="password" class=" my-2 form-control" placeholder="password" >
		 	 <input type="text"  <?=get_var('password2')?>  name="password2" class=" my-2 form-control" placeholder="confirm password" >
		 	  <br>
		 	  <button class="btn btn-info" type="submit">Sign Up</button>
		 </div>	
		</form>
	</div>
<?php $this->view('includes/footer');?>