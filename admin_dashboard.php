
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>ADMIN DASHBOARD</title>
</head>

<style>
    .navbar-custom {
    background-color: white ;
    style="background-color:   #ccefff;
}

</style>

<body style="background-color: #e6f0ff">
      
<nav class="navbar navbar-expand-sm; navbar-custom" style=" height=70px ; background-color: #e6f0ff">
  <!-- Brand/logo -->
  <img src = "ad.jfif" alt=image width="85px" height="70px";>
  
  <!-- Links -->
  <!-- <ul class="navbar-nav"> -->
<div style=" padding: 20px; border-radius:30px">
  <h3 class="nav-item" style="margin-left:400px;">ADMIN DASHBOARD </h3>
</div>
    
    <span style="margin-left:550px">
             <i class="fa fa-user-circle-o" style="font-size:36px"></i>
     </span>
  </ul>
</nav> <br>


<div>



<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:16% ; background-color: #e6f0ff" >
  <h3 class="w3-bar-item" style="background-color: #4d94ff">Setup</h3><br>
  
 
  <a href="admin_dashboard.php" class="w3-bar-item w3-button" style="background-color: #99c2ff">All Elbum</a>
  <br>
  <a href="change_password.php" class="w3-bar-item w3-button" style="background-color: #99c2ff">Change Password</a>
</div>


<div style="margin-left:300px;">

<h3> Employees   <span  style="background-color: #4d94ff; padding:6px; border-radius:4px" >
  
  <a  href ="http://localhost:8081/KAJAL_PROJECT/INTERNSHIP_TEST/add_data.php" > ADD ELBUM </a>
  
  

</h3>


    <?php
include ("connection_test.php");
$selectquery = "select * from employee";

$result = mysqli_query($conn,$selectquery);

?>

</div> 
</div> 

<br>

    

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>display data</title>
 </head>
 <style>
table, th, td {
  border:2px solid black;
}
</style
 <body style="background-color: #e6ccff">
    

 <?php
include ("connection_test.php");?>



  <table align="center" style="width:60% ; margin-left:300px;" >
 <tr style=background-color: "#99c2ff"; >
     <th>Id</th>
     <th>Title</th>
     <th>Discription</th>
     <th>Add photo</th>
     <th >Action</th>

 </tr>

 <?php
        while($rows=mysqli_fetch_assoc($result))
        {
 ?>

     <tr>
          <td><?php echo $rows['Id'];    ?></td>
          <td><?php echo $rows['Name'];  ?></td>
          <td><?php echo $rows['UserName'];   ?></td>
         
          
        <td> 

            <form action=" ">
              <input type="file" id="myFile" name="filename">
              
            </form>
         </td> 
         <td> <button onclick="myFunction()" id="myDIV" style="background-color:yellow ;border-radius:5px;">publish</button>
</td>

           
          
     </tr>


     <?php
        }
     
     ?>

</table> 






</div>
</div>

/* script */


<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.innerHTML === "unpublish") {
    x.innerHTML = "publish";
  } else {
    x.innerHTML = "unpublish";
  }
}
</script>

</body>
</html>