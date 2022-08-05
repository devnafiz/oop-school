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
		    $arr['firstname'] = 'bbom2';
           // $arr['lastname'] = 'ggo';
           // $arr['gender'] = 'male';
            //$arr['date'] = '2022-08-02 20:03:12';
            //$arr['user_id'] = '44444444';
           /// $arr['school_id'] = '66';
           // $arr['rank'] = 'student';
            //$user->insert($arr);
           $user->update(3,$arr);
		 $data=$user->findAll();
		 //$data =$user->where('firstname','sfdsd');
		 $this->view('home',['rows'=>$data]);
	}
}


