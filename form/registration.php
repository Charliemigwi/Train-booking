<?php
include('database/connection.php');


?>

<!DOCTYPE HTML>
<html>
<head>
<title>Booking Form </title>
<link href="css/style11.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Booking Form" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.12.0.min.js"></script>
</head>
<body>
		<!---header-->
	
		<div class="header w3ls">
			<h1>Passenger booking form.</h1>
			
		</div>
		<!---header-->
		<!---main-->
			<div class="main">
				<div class="main-section agile">
					<div class="login-form">
					<h4>Please input your details below</h4>
						<form action="" method="POST">
						
							<ul>
								 <li class="text-info">First Name </li>
								 <li><input type="text" name="firstname" placeholder="Your First name" autocomplete="off" required></li>
								 <div class="clear"></div>
							 </ul>
							 <ul>
								 <li class="text-info">Last Name </li>
								 <li><input type="text" name="lastname" placeholder="Your last Name" autocomplete="off" required></li>
								 <div class="clear"></div>
							 </ul>
							 <ul>
								 <li class="text-info">Email</li>
								 <li><input type="text" name="email" placeholder="example@gmail.com" autocomplete="off" required></li>
								 <div class="clear"></div>
							 </ul>
						
							 <ul>
								 <li class="text-info">Phone Number </li>
								 <li><input type="text" name="phonenumber" placeholder="Your Phonenumber" autocomplete="off" ></li>
								 <div class="clear"></div>
							 </ul>
							<ul>
								<li class="text-info">Luggage </li>
								<li><input type="text" name="luggage" placeholder="Specify if any else input N/A" autocomplete="off" required></li>
								<div class="clear"></div>
							</ul>
							 
							  <ul>
							  
							 
							 
							  <ul>
						
								<li class="text-info">Departure Date </li>
								<li class="dat"><input class="date" name="date" id="datepicker" type="text" value="yy-mm-dd" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" ></li>
								
								<div class="clear"></div>
							</ul>
						
						<ul>
								 <li class="text-info">Station<select id="opt" name="route"> </li>
								 <li><option >Sebata to Adama</option></li>
								  <li><option >Adama to Debre Zebit</option></li>
							      <li><option >Hosaena to Port of Doraleh</option></li>
								 	 </select>
								 
								 <div class="clear"></div>
							 </ul>
										<link rel="stylesheet" href="css/jquery-ui.css" />
										<script src="js/jquery-ui.js"></script>
											<script>
												$(function() {
												$( "#datepicker,#datepicker1" ).datepicker({
													dateFormat : 'yy-mm-dd'
												});
												});
											</script>
						
						
						<input type="submit" name="id"  value ="submit"><br><br>
							

							<div class="clear"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="footer w3agile">
		
		</div>

		<!---main-->
</body>
</html>

<?php
if(isset($_POST['id'])){
	global $connect;
	
	
	$POST_firstname=$_POST['firstname'];
	$POST_lastname=$_POST['lastname'];
	$POST_email=$_POST['email'];
	$POST_phonenumber=$_POST['phonenumber'];
	$POST_luggage=$_POST['luggage'];
	$POST_route=$_POST['route'];
	$POST_date=$_POST['date'];

	
	$insert="insert into passengers(firstname,lastname,email,phonenumber,luggage,route,date)
	          values('$POST_firstname','$POST_lastname','$POST_email','$POST_phonenumber','$POST_luggage','$POST_route','$POST_date')";
	$run_insert=mysqli_query($connect,$insert);
	 
	 if($run_insert){
		
		 echo "<script>alert('Data has been successfully submitted')</script>";
		 echo "<script>window.open('../print.php','_self')</script>";
		
	 }
	
}


?>