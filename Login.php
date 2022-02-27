<!--
Into this file, we create a layout for login page.
-->

<?php
include_once('header.php');
include_once('link.php');

?>
<html>
  <head>
    <title>Registration</title>
   <style>
     body {
    background: linear-gradient(to right, #88acbb, #cdd6da, #ffffff);
    font-family: 'Poppins', sans-serif;
}
form {
    width: 300px;
    margin: 15vh auto 0 auto;
    padding: 20px;
    background-color: whitesmoke;
    border-radius: 4px;
  
    font-size: 12px;
}
 button {
    padding: 10px;
    margin-top: 10px;
    width: 100%;
    color: white;
    background-color: rgb(0, 0, 0);
    border: none;
    border-radius: 4px;
}
input {
    border: 2px solid #f0f0f0;
	border-radius: 4px;
	display: block;
	font-size: 12px;
	padding: 10px;
	width: 100%;
}



     h1{
       text-align: center;
     }
   </style>
  </head>

<div id="frmRegistration">
<form class="form-horizontal" method="POST" action="login_code.php">
	<h1>User Login</h1>
	
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="login" class="btn btn-primary">Login</button>
    </div>
  </div>
</form>
</div>
</html>