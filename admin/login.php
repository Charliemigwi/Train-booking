 
<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="styles/loginn.css" media="all"/>
</head>
<body>

<div class="login-page">

  <div class="form">

  <h1>Adminstrator login</h1>
<form method="post" >
<b>Email<b><br><input type="text" name="email" autocomplete="off" required><br><br>
password<br><input type="password" name="password" autocomplete="off" required><br><br>
<button type="submit" name="login">login</button>
</form>
  
  </div>
</div>
</body>
</html>



<?php
session_start();
  
require_once 'database.php';
$db=new database();
//verifying the login details
if(isset($_POST['login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];

   $select_user=$db->getrow("SELECT * FROM admin WHERE user_email=? AND user_password=?", ["$email","$password"]);
	
	if($select_user > 0){
	$_SESSION['user_email']=$email;
	echo "<script>window.open('index.php','_self')</script>";
			
}
else{
	echo "<script>alert('Password email combination Incorrect')</script>";
}
}


?>