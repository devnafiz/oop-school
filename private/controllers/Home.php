<?php
/**
 * home Controller
 */
class Home extends Controller
{
	
	function index()
	{
		if(!Auth::logged_in()){

		 //$user =$this->load_model('User');
			$this->redirect('login');
		}
		$user = new User();
		    
           //$user->delete(10);
		 $data=$user->findAll();
		 //$data =$user->where('firstname','sfdsd');
		 $this->view('home',['rows'=>$data]);
	}
}


