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


               $this->redirect('login');
         	}else{

         		$erorrs=$user->errors;
         	}
         }

		 $this->view('sign_up',['errors'=>$erorrs]);
	}
}


