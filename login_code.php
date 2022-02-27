<!--
Here, we write code for login.
-->
<?php

require_once('connection.php');
$email = $password = $role= $pwd = '';

$email = $_POST['email'];
$pwd = $_POST['password'];
$role = $_POST['role'];
$password = MD5($pwd);
$sql = "SELECT * FROM projektiweb WHERE Email='$email' AND Password='$password' and role ='$role'";
$result = mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["ID"];
		$email = $row["Email"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
	}
	header("Location: homepage.php");
}


if($count>0){

	$row=mysqli_fetch_assoc($result);
	$_SESSION['role'] = $row->role;
	$_SESSION['is_login'] = 'yes';
	
	if($row->role==0){
		header('Location:homepage.php');
	}
	
}else{
	header('Location:Dashboard.php');
}
?>