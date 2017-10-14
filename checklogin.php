<?php
$model = new Model();
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
?>