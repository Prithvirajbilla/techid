<?php
include "config/config.php";
$id =1261;
$fname = "prithviraj";
$lname = "bil";
$rollno = "123456789";
$room = "130";
$hostel = "3";
$phone = "1234567890";
$about = "about me";
$email = "email@email.com";
$update_query = "update `techid_users` set `fname`='$fname', `lname`='$lname', `rollno`='$rollno', `room`='$room', `hostel`='$hostel', `about`='$about', `email`='$email', `phone` ='$phone' where `id`='$id' ";

mysql_query($update_query);


?>