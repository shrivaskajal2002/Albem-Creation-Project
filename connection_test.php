<?php 
//session_start(); 


$conn= mysqli_connect('localhost','root');
$message = "Invalid Credentials";
//$Admin=$_GET['Admin'];
//$User=$_GET['User'];


$db = mysqli_select_db($conn,'testbatchfeb2022');

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];


	$sql = " select * from  employee where UserName = '$username' AND Password = '$password'";

	$result= mysqli_query($conn,$sql);
    $row = mysqli_num_rows($result);

    if($row ==1){

    // echo "login successful";
        $_SESSION['username'] =$username;
        header('location:admin_dashboard.php');
    }


     else{

        echo "<script type='text/javascript'>alert('$message');</script>";
     }
    }
     

?>