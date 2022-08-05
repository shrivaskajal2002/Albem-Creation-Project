<?php

include "connection_test.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js">  </script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>PHP INTERNSHIP</title>
</head>

<style>
span{
  position: absolute;
  margin-left: 300px;
  height: 40px;
  display: flex;
  align-items: center;
}
input{
    margin-left:20px;
    margin-right:20px;
    
      padding-left: 50px;
  height: 20px;
}


</style>


<body style="background-color:gray; background-repeat: no-repeat;">
<div style="width: 400px; height: 440px; background-color: white ; margin:0 auto;   margin-top:90px;  padding-top:35px;"
target="_blank">

<form method="POST" action="connection_test.php">

<center>
  <img src = "logo.jpg" alt=image width="260px" height="140px";><br><br>

		<h5>Login </h5><br>
	
    <!-- <form action="#"  onsubmit = " return validation()"> -->

			
    <div class="input-group">
        
            <input type="text" class="form-control" placeholder="User Name" id="username" name="username" required>
            <span  id="message" style="color: red;"> </span>


                    <span>
                        <i class="fa fa-user-circle-o" style="font-size:24px"></i>
                    </span>
     </div><BR>

            		
    <div class="input-group">
        
        <input type="password" class="form-control" placeholder="Password" id="password"  name="password" required>

                <span>
                    <i class="fa fa-eye" style="font-size:24px"  id="togglePassword"></i>
                </span>
   </div><BR>        

			<button type = "submit" class="btn btn-primary" name="submit" >  login </button>

            <!-- <a href ="#" class="btn btn-primary"  name="submit" >signup</a> -->

    </form>

</center>

    </div>


    <script>



// <!-- --------------------for eye button---------------------------->


const togglePassword = document.querySelector('#togglePassword');
       const password = document.querySelector('#password');

 togglePassword.addEventListener('click', function (e) {
   // toggle the type attribute
   const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
   password.setAttribute('type', type);
   // toggle the eye slash icon
   this.classList.toggle('fa-eye-slash');
});


         
</script>







   
</body>
</html>