<?php
/**
 * Sign Up Controller
 */
class Signup extends Controller
{
	
	function index()
	{
         $erorrs =array();

         if(count($_POST)>0){

         	$user = new User();

         	if($user->validate($_POST)){
              // $arr['firstname']=$_POST['firstname'];
              // $arr['lastname']=$_POST['lastname'];
              // $arr['gender']=$_POST['gender'];
              //  $arr['email']=$_POST['email'];
              // $arr['rank']=$_POST['rank'];
              // $arr['password']=password_hash($_POST['password'], PASSWORD_DEFAULT);
              $_POST['date']=date("Y-m-d H:i:s");
              $user->insert($_POST);

               $this->redirect('login');
         	}else{

         		$erorrs=$user->errors;
         	}
         }

		 $this->view('sign_up',['errors'=>$erorrs]);
	}
}


