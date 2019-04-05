
<!DOCTYPE hmtl>
<html>
<head>
<link rel="stylesheet" href="css/print.css">

<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>

</head>
<body>
<h2>PRINT THESE DETAILS AND PRESENT THEM AT THE TRAIN STATION</h2><br>
<a href="javascript:Clickheretoprint()">Please click here to print your confirmation Receipt</a><b><b><br><br><a href="index.php">Back To Home</a>
<div id="print_content" style="width: 400px;">


<?php
include('connection/db.php');
global $connect;



$getinfo="select * from passengers ORDER BY id DESC LIMIT 1";


$run_info=mysqli_query($connect,$getinfo);


if($run_info){
while($row_post=mysqli_fetch_array($run_info)){
		$post_firstname=$row_post['firstname'];
	$post_lastname=$row_post['lastname'];
	$post_email=$row_post['email'];
	$post_phonenumber=$row_post['phonenumber'];
	$post_route=$row_post['route'];
	$post_date=$row_post['date'];
	$post_id=$row_post['id'];
	?>
	<table>

  <tr>
   <th><td><img src="images/logo.jpg" width="150" height="100"/></td></th>
      <tr>
    <th>First Name:</th>
    <td><?php echo $post_firstname?></td>
  </tr>
  <tr>
    <th>Last Name:</th>
    <td><?php echo $post_lastname?></td>
  </tr>
  <tr>
    <th>Email:</th>
    <td><?php echo $post_email?></td>
  </tr>
  <tr>
    <th>Phone Number:</th>
    <td><?php echo $post_phonenumber?></td>
  </tr>
  <tr>
    <th>Route:</th>
    <td><?php echo $post_route?></td>
  </tr>
  <tr>
    <th>Date of Travel:</th>
    <td><?php echo $post_date?></td>
  </tr>
  <tr>
    <th>Seat No:</th>
    <td><?php echo $post_id?></td>
  </tr>

</div>
</table>

<?php } } ?>	
</body>
</html>
