<?php 
/* @author Prithviraj Billa
*/

	include_once "../config/config.php";

	$error = false;

	$fname = strip_tags($_POST["fname"]);
	if($fname == "")
	{
		$error = true;
		header("Location: /techid/settings.php?error=1");
	}
	$lname = strip_tags($_POST['lname']);
	if($lname == "")
	{
		$error = true;
		header("Location: /techid/settings.php?error=1");
	}
	$rollno = strip_tags($_POST['rollno']);
	$room =  strip_tags($_POST['room']);
	$hostel = strip_tags($_POST['hostel']);
	$about = strip_tags($_POST['about']);
	$phone = strip_tags($_POST['phone']);
	$email = strip_tags($_POST['email']);
	if(filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$error = true;
		header("Location: /techid/settings.php?error=1");
	}

	if(!isset($_COOKIE['uid']))
	{
		$val = $_COOKIE['uid'];
		$pieces = $_COOKIE['id'];
		$query = "select * from  techid_users WHERE username='$ldap_id'";
		$result = mysql_query($query);
		$result_array = mysql_fetch_array($result);

		$update_query = "UPDATE techid_users SET `fname`='$fname, `lname`='$lname', `rollno`='$rollno', `room`='$room', `hostel`='$hostel', `about`='$about', `email`='$email', `phone` ='$phone' WHERE username='$result_array[username]' ";
		mysql_query($update_query);
		header("Location : /techid/techprofile.php");
	}
	else
	{
		header("Location: /techid");
	}
?>








?>