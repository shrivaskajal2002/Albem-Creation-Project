<?php include("../main_connection.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
	<!-- <link rel="stylesheet" type="text/css" href="registyle.css"> -->
    <link rel="shortcut icon" href="36.jpg" type="image/x-icon">

</head>
<body style="width:400px; height: 500px; background-color:blue;">
<div  class="container" >
		<h2>Register your detail</h2>
	</div>


	<form method="POST" action="../main_connection.php">
		<p style="color: red">All field are mandetory/</p>
	


        <div class="input-group">
			<label> Title</label>
            <input type="text" name="NAME">
        </div><br>

		<div class="input-group">
			<label>Discription</label>
            <input type="text" name="discription">
        </div><br>

        <div class="input-group">
			<label> Password</label>
            <input type="text" name="password" >
        </div><br>
        <!-- <div class="input-group">
			<label> AGE:</label>
			<select name="AGE">
<option value ="17">17</option>
<option value ="18">18</option>
<option value ="19">19</option>
<option value ="20">20</option>
<option value ="21">21</option>
<option value ="22">22</option>
<option value ="23">19</option>
<option value ="24">24</option>
<option value ="25">25</option>
</select> 
           
        </div> -->

       
        <div class="input-group">
			<label>Department</label>
            <input type="text" name="department">
        </div><br>

        <div class="input-group">
			<label>GENDER</label>
            <input type="radio" name="GENDER" value="MALE">MALE
            <input type="radio" name="GENDER" value="FEMALE">FEMALE
            <input type="radio" name="GENDER" value="OTHER">OTHER
        </div><br>
        



        <div class="input-group">
			<label>Contact</label>
            <input type="number" name="contact">
        </div><br>

        <div class="input-group">
			<label> Usertype</label>
            <input type="text" name="usertype">
        </div><br>
         

        <div class="input-group">
        	<label> Hobbies </label>
        	<input type="checkbox" name="Hobbies" value="singing">singing
            <input type="checkbox" name="Hobbies" value="dancing">dancing
            <input type="checkbox" name="Hobbies" value="painting">painting
        </div><br>

        <div class="input-group">
			<label> Status</label>
            <input type="text" name="status">
        </div><br>

        

        <div class="input-group">
			<button type="submit" name="submit" class="btn">SUBMIT</button>
        </div><br>
    </form>

</body>
</html>