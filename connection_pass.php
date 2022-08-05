<?php


session_start();
//echo $_SESSION['login'];
//$_SESSION['uid']="";
include('needconnection.php');
$select = "SELECT * FROM employee";
$query = mysqli_query($conn,$select);
$data = mysqli_fetch_assoc($query);

$oldpwd = $data['Password'];

	if(isset($_POST['submit']))
	
{  


	$new = $_POST['new'];
	$confirm = $_POST['confirm'];
			 	      
	 $update = "UPDATE employee SET PASSWORD = '$new'"; 
     

	}

?>


<p>YOUR PASSWORD IS SUCCESSFULLY CHANGED</p> 