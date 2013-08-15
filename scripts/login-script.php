<?php
	include("cookie.php");
 	$ldap_id = $_POST['ldap_id'];
    $password = $_POST['password'];
    $password = base64_encode($password);
    $url = "http://www.cse.iitb.ac.in/~prithvirajbilla/ldap-api/index.php?user=".$ldap_id."&pass=".$password;
    $json = file_get_contents($url);
    $result_array = json_decode($json, TRUE);
	$bind = $result_array["bind"];
	include_once "../config/config.php";
	session_start();
	if($bind)
	{
		$query = "select * from  techid_users WHERE username='$ldap_id'";
		$result = mysql_query($query);
		//setting cookie
		//expiry 
		setPrimaryCookie($ldap_id);

		$result_arr = mysql_fetch_array($result);
		//result_arr is the array of the myql_queried array

		if($result_arr['id'] != "")
		{
			/**
			*	Setting all the session variables;
			*/
			$_SESSION['info'] = $result_arr;

			$redirect_url = "/techid/techprofile.php?id=".$result_arr["id"];
			Header ("Location: ". $redirect_url);
			exit;
		}
		else
		{
			$fname = $result_array["fname"];
        	$lname = $result_array["lname"];
        	$rollno = $result_array["rollno"];
        	$mail = $result_array["mail"];
        	$dept = $result_array["dept"];
        	$result_array["hostel"] = "";
        	$result_array["room"] = "";
        	$result_array["about"]=""
        	/*
				Keeping everything in sessions so that i'm awesome :P
        	*/
        	$_SESSION['info'] = $result_array;

			$sql = "INSERT INTO techid_users (username,fname,lname,rollno,dept) VALUES ('$ldap_id','$fname','$lname','$rollno','$dept')";
			$res = mysql_query($sql);
			$redirect_url = "/techid/settings.php";
			Header ("Location: " . $redirect_url);
			exit;
		}
	}
	else
	{

		Header("Location: /techid/index.php?error=1");
		exit;
	}

?>