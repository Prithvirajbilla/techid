<?php 
/* @author Prithviraj Billa
*/

	include_once "../config/config.php";

	$error = false;
	if(!isset($_POST["fname"]))
	{
		header("Location: /techid/settings.php?error=1");
	}
	$fname = strip_tags($_POST["fname"]);
	if($fname == "")
	{
		$error = true;
	}
	$lname = strip_tags($_POST['lname']);
	if($lname == "")
	{
		$error = true;
	}
	$rollno = strip_tags($_POST['rollno']);
	$room =  strip_tags($_POST['room']);
	$hostel = strip_tags($_POST['hostel']);
	$about = strip_tags($_POST['about']);
	$phone = strip_tags($_POST['phone']);
	$email = strip_tags($_POST['email']);
	$dept = strip_tags($_POST['dept']);
	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$error = true;
	}

	if($error == true)
	{
		header("Location :/techid/settings.php?error=1");
	}
	elseif(isset($_COOKIE['uid']))
	{
		$val = $_COOKIE['uid'];
		$pieces = $_COOKIE['id'];
		$query = "select * from  techid_users WHERE username='$val'";
		$result = mysql_query($query);
		$result_array = mysql_fetch_array($result);
		$id = $result_array['id'];
		$update_query = "update `techid_users` set `fname`='$fname', `lname`='$lname', `rollno`='$rollno',`dept` = '$dept', `room`='$room', `hostel`='$hostel', `about`='$about', `email`='$email', `phone` ='$phone' where `id`='$id' ";
		$b= mysql_query($update_query);

/*		//image thingy
		$allowedExts = array("jpeg", "jpg", "png");
		$temp = explode(".",$_FILES["file"]["name"]);
		$extension = end($temp);
		if (( ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg") || ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png")) && ($_FILES["file"]["size"] < 5242880)
				&& in_array($extension, $allowedExts))
		{
			 if ($_FILES["file"]["error"] > 0)
    		{
    			return "This error exits" . $_FILES["file"]["error"] . "<br>";
    		}
		    if (file_exists("/techid/images/" . $_FILES["file"]["name"]))
		      {
		      	echo $_FILES["file"]["name"] . " already exists. ";
		      }
		    else
		      {
		      move_uploaded_file($_FILES["file"]["tmp_name"],
		      "upload/" . $_FILES["file"]["name"]);
		      echo "Stored in: " . "/techid/images/" . $_FILES["file"]["name"];
		      }
		}
		else
		{
			return false;
		}
*/		
	  foreach ($_POST['slot'] as $slot)
      {
      		if($slot == "none")
      			break;
            $query = "INSERT INTO `techid_user_skills` (`tech_id`, `skill_id`)
                            VALUES ($id, $slot)";
            
            $d = mysql_query($query);
      }
      header("Location: /techid");

	}

?>