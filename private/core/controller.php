<?php


/**
 * main controller
 */
class Controller 
{
	
	public function  view($view,$data=array())
	{


		if (file_exists("../private/views/".$view.".view.php")) {

			require("../private/views/".$view.".view.php");
		}else{
			require("../private/views/404.view.php");
		}
	}
}