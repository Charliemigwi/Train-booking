 <?php

 
 
 $connect=new mysqli('localhost','root','','charlesmigwi');
 
 if($connect->connect_errno){
	 
	 echo 'Cant establish connection at this time';
	 
	 
	 
 }