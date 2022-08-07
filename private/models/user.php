<?php



/**
 * user model
 */
class User extends Model
{
	
	public function validate($DATA){
		$this->errors=array();

		if($DATA['password'] != $DATA['password2']){

			$this->errors[]= "This password don't match";

		}

		if(count($this->errors)==0){
          return true;
		}

        return false;

	}
}