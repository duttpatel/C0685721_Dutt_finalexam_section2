<?php
include_once("Model/model.php");

class Controller {
 public $model;
 
 public function __construct()  
    {  
        $this->model = new Model();
    } 
 
 public function invoke()
 {
    $reslt = $this->model->getlogin();     // it call the getlogin() function of model class and store the return value of this function into the reslt variable.
  	if($reslt == 'login')
  	{
  	 include 'View/home.php';
	 }
 	 else
  	{
   	include 'View/login.php';
 	 }
  
 }
 
 /*if(isset($_POST['uid']) && isset($_POST['pwd']))
 {
 	$uid=$_POST['uid'];
	$pwd=$_POST['pwd'];
	$result = $this->model->getlogin($uid,$pwd); 

	if($result == 'Done')
  	{
		header('location:home.php');	
	}
  	else
  	{
  	 header('location:index.php');	
  	}
 }*/

}

?>