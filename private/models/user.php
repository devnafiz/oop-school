<?php



/**
 * user model
 */
class User extends Model
{
	protected $allowedColumns=[
		'firstname',
		'lastname',
		'email',
		'password',
		'gender',
		'rank'

	];
	
	protected $beforeInsert=['make_user_id','make_school_id','has_password'];
	public function validate($DATA){
		$this->errors = array();

		if(empty($DATA['firstname']) || !preg_match('/^[a-zA-A]+$/', $DATA['firstname'])){

			$this->errors['firstname']="Only data letter  allaow";
		}
		if(empty($DATA['lastname']) || !preg_match('/^[a-zA-A]+$/', $DATA['lastname'])){

			$this->errors['lastname']="Only data letter  allaow";
		}

		if(empty($DATA['email']) || !filter_var($DATA['email'],FILTER_VALIDATE_EMAIL)){

			$this->errors['email']="Email not emapty ";
		}
		//gender 
		$gender =['female','male'];

		if(empty($DATA['gender']) || !in_array($DATA['gender'],$gender)){

			$this->errors['gender']= "Gender not valid";

		}

		if(empty($DATA['password']) || $DATA['password'] != $DATA['password2']){

			$this->errors['password']= "This password don't match";

		}

		//password length
		if(  strlen($DATA['password']) <8 ){

			$this->errors['password']= "This password  mast be 8 cheracter";

		}

		if(count($this->errors) == 0){
          return true;
		}

        return false;

	}


	public function make_user_id($data){

         return $data;
		}

	public function	make_school_id($data){

       return $data;
		}


	public function	has_password($data){
		$data['password']= password_hash($data['password'], PASSWORD_DEFAULT); 
       return $data;
	}
}