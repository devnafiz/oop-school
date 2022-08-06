<?php
/**
 * home Controller
 */
class Home extends Controller
{
	
	function index()
	{
		 //$user =$this->load_model('User');
		$user = new User();
		    
            $user->delete(10);
		 $data=$user->findAll();
		 //$data =$user->where('firstname','sfdsd');
		 $this->view('home',['rows'=>$data]);
	}
}


