
<?php
include_once('header.php');
include_once('link.php');


?>
<head>

</head>
<script type="text/JavaScript">
  
  const fname = document.getElementById('firstname')
const lname = document.getElementById('lastname')
const form = document.getElementById('idform')

const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    let messages = []
    if (name.value === '' || name.value == null) {
        messages.push("name is required")
    }
    if (messages.length > 0) {
        e.preventDefault()
    }

    if (password.value.length <= 6) {
        messages.push('Password must be longer')
    }
})
  </script>

<html>
  <head>

    <script src="register.js"></script>
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
   <script defer src="register.js"></script>
  </head>
  
  


<div id="frmRegistration">
  <div id="error">
  </div>
<form  id="idform" action="registration_code.php" method="POST">
	<h1>User Registration</h1>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname" >First Name:</label>
    <div class="col-sm-6">
      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Last Name:</label>
    <div class="col-sm-6">
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Enter Lastname" required>
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" required>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>

</html>
