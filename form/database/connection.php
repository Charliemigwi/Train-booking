 <?php
 $connect=new mysqli('localhost','root','','charlesmigwi');
 
 
 if($connect->connect_errno){
	 
	 echo 'cant establish connection at this time';
 }
 
 
 
 ?>