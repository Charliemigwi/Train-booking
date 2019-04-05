<!DOCTYPE hmtl>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8" />
    <title>Administator </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="../bootstrap/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../bootstrap/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/admin.css">


</head>


<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">

<div class="jumbotron" id="main_header">
        <h2>ADMINISTRATOR</h2>
    <a href="logout.php" button type="submit" class="btn btn-success pull-right btn-lg">Log out</abutton></a>
</div>
    <a href="../index.php" button type="submit"  class="btn btn-success pull-right btn-lg">Back to Main site</abutton></a>

        </div>
            </div>


        <div class="container">
        <div class="row">
         <div class="col-md-12">

             <hr>
             <?php
             require_once 'database.php';
             $db=new database();
             ?>


             <h2 class="text-center">Train Master</h2>
             <table class="table table-bordered ">
                 <tr>
                     <th bgcolor="skyblue">STATIONS<br>(Sebata Ethiopia to Port of Doraleh Djibouti)</th>
                     <th bgcolor="skyblue">Depature Time</th>
                     <th bgcolor="skyblue">Arrival Time</th>
                     <th bgcolor="skyblue">Ticket Price</th>
                     <th bgcolor="skyblue">Change Train Details</th>
                 </tr>
                 <?php
                 $getsebata=$db->getrows("SELECT * FROM sebata");
                 ?>

                 <form action="index.php" method="POST" enctype="multipart/form-data">
                     <tr bgcolor="white">
                         <?php foreach ($getsebata as $sebata){
                             ?>
                             <td>Sebata Station(Sebata to Adama)</td>
                             <td><input type="text" name="sbd" class="form-control" value="<?=$sebata['depature']?>"> </td>
                             <td><input type="text" name="sba" class="form-control" value="<?=$sebata['arrival']?>"> </td>
                             <td><input type="text" name="sbt" class="form-control" value="<?=$sebata['ticket']?>"> </td>

                         <?php }?>
                         <td><button type="submit" name="sebata" class="btn btn-primary pull-right">Edit Train Details</button> </br></td>
                 </form>
                 </tr>

                 <?php
                 $getmieso=$db->getrows("SELECT * FROM mieso");
                 ?>
                 <form action="index.php" method="POST" enctype="multipart/form-data">
                     <tr bgcolor="white">
                         <?php foreach ($getmieso as $mieso){
                             ?>
                             <td>Mieso Station(Adama to Debre zebit)</td>
                             <td><input type="text" name="abd" class="form-control" value="<?=$mieso['depature']?>"> </td>
                             <td><input type="text" name="aba" class="form-control" value="<?=$mieso['arrival']?>"> </td>
                             <td><input type="text" name="abt" class="form-control" value="<?=$mieso['ticket']?>"> </td>

                         <?php }?>
                         <td><button type="submit" name="mieso" class="btn btn-primary pull-right">Edit Train Details</button> </br></td>
                 </form>
                 </tr>

                 <?php
                 $getawash=$db->getrows("SELECT * FROM awash");
                 ?>
                 <form action="index.php" method="POST" enctype="multipart/form-data">
                     <tr bgcolor="white">
                         <?php foreach ($getawash as $awash){
                             ?>
                             <td>Awash Station(Hosaena to port of Doraleh)</td>
                             <td><input type="text" name="abd" class="form-control" value="<?=$awash['depature']?>"> </td>
                             <td><input type="text" name="aba" class="form-control" value="<?=$awash['arrival']?>"> </td>
                             <td><input type="text" name="abt" class="form-control" value="<?=$awash['ticket']?>"> </td>

                         <?php }?>
                         <td><button type="submit" name="awash" class="btn btn-primary pull-right">Edit Train Details</button> </br></td>
                 </form>
                 </tr>

             </table>



<h2 class="text-center">Booked Passengers</h2>
<table class="table table-bordered "  align="center">

            <tr bgcolor="skyblue" class="text-center">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
                <th>Luggage</th>
            <th>Route</th>
            <th>Date of Travel</th>
            <th>Seat Number</th>
                <th>Cancel Reservation</th>
            </tr>

            <?php
            $getdata=$db->getrows("SELECT * FROM passengers WHERE cancelled=?",["0"]);

             foreach ($getdata as $data){
            ?>
            <tr bgcolor="white">
                <td><?php echo $data['firstname']?></td>
                <td><?php echo $data['lastname']?></td>
                <td><?php echo $data['email']?></td>
                <td><?php echo $data['phonenumber']?></td>
                <td><?php echo $data['luggage']?></td>
                <td><?php echo $data['route']?></td>
                <td><?php echo $data['date']?></td>
                <td><?php echo $data['id']?></td>
                <td><a href="delete.php?delete_pass=<?php echo $data['id'];?> "button class="btn btn-primary">Cancel</a> </td>

            </tr>
            <?php } ?>
        </table>

             <?php
             $getdata=$db->getrows("SELECT * FROM passengers WHERE cancelled=?",["1"]);
             ?>
             <h2 class="text-center">Cancelled Seats</h2>
             <table class="table table-bordered "  align="center">
                <?php foreach ($getdata as $cancelled) ?>
                 <tr bgcolor="skyblue" class="text-center">
                     <th>First Name</th>
                     <th>Last Name</th>
                     <th>Email</th>
                     <th>Phone Number</th>
                     <th>Luggage</th>
                     <th>Route</th>
                     <th>Date of Travel</th>
                     <th> Cancelled Seat Number</th>
                 </tr>

                    <?php

                $getdata=$db->getrows("SELECT * FROM passengers WHERE cancelled=?",["1"]);

                foreach ($getdata as $data){
                    ?>
                    <tr bgcolor="white">
                        <td><?php echo $data['firstname']?></td>
                        <td><?php echo $data['lastname']?></td>
                        <td><?php echo $data['email']?></td>
                        <td><?php echo $data['phonenumber']?></td>
                        <td><?php echo $data['luggage']?></td>
                        <td><?php echo $data['route']?></td>
                        <td><?php echo $data['date']?></td>
                        <td><?php echo $data['id']?></td>

                    </tr>
                <?php } ?>

         </div>
        </div>
        </div>



<?php
//UPDATING sebata
if(isset($_POST['sebata'])){
    $depature=$_POST['sbd'];
    $arrival=$_POST['sba'];
    $ticket=$_POST['sbt'];
    $updaterow=$db->updaterow("UPDATE sebata SET depature=?,arrival=?,ticket=? WHERE id=?",["$depature","$arrival","$ticket","1"]);
    echo "<script>alert('Details have been successfully updated')</script>";
    echo "<script>window.open('index.php','_self')</script>";

}
?>
<?php
//UPDATING mieso
if(isset($_POST['mieso'])){
    $depature=$_POST['abd'];
    $arrival=$_POST['aba'];
    $ticket=$_POST['abt'];
    $updaterow=$db->updaterow("UPDATE mieso SET depature=?,arrival=?,ticket=? WHERE id=?",["$depature","$arrival","$ticket","1"]);
    echo "<script>alert('Details have been successfully updated')</script>";
    echo "<script>window.open('index.php','_self')</script>";

}
?>
<?php
//UPDATING Awash
if(isset($_POST['awash'])){
    $depature=$_POST['abd'];
    $arrival=$_POST['aba'];
    $ticket=$_POST['abt'];

    $updaterow=$db->updaterow("UPDATE awash SET depature=?,arrival=?,ticket=? WHERE id=?",["$depature","$arrival","$ticket","1"]);
    echo "<script>alert('Details have been successfully updated')</script>";
    echo "<script>window.open('index.php','_self')</script>";

}
?>


</div>
</body>
</html>













