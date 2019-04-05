<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 1/10/2017
 * Time: 12:41 PM
 */
require_once 'database.php';
$db=new database();

if(isset($_GET['delete_pass'])) {
    $delete_id=$_GET['delete_pass'];

    $deleterow =$db->deleterow("UPDATE passengers SET cancelled=? where id=?", ["1","$delete_id"]);

        echo "<script>alert('passenger Reservation has been Cancelled')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }





