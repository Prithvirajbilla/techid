<?php
	//includes cookie.php code so we can acess the functions in cookie.php
	include("cookie.php");
	// The Post variable consists of the form data as the method is the post
 	$ldap_id = $_POST['ldap_id'];
    $password = $_POST['password'];
    // base 64 encoding the password
    $password = base64_encode($password);
    // the url to which the request is to be sent to check if the app (Techid) is working
    $url = "http://www.cse.iitb.ac.in/~prithvirajbilla/ldap-api/index.php?user=".$ldap_id."&pass=".$password;
    $json = file_get_contents($url);
    $result_array = json_decode($json, TRUE);
	$bind = $result_array["bind"];
	// including the config.php for database connections
	include_once "../config/config.php";
	//starting a sessions
	session_start();
	// if bind is true, that means the login is valid.
	if($bind)
	{
		// check if the user exists already 
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

			//redirect the user to the techprofile.php

			$redirect_url = "/techid/techprofile.php?id=".$result_arr["id"];
			//welcome cookie 1. you are welcome :P
			setCookieValue("welcome","1");
			Header ("Location: ". $redirect_url);
			exit;
		}
		else
		{
			// if login is valid and user doesn't exist previously in database
			// then goes to this loop
			//getting all the values from the request we made to the url;
			$fname = $result_array["fname"];
        	$lname = $result_array["lname"];
        	$rollno = $result_array["rollno"];
        	$mail = $result_array["mail"];
        	$dept = $result_array["dept"];
        	$result_array["hostel"] = "";
        	$result_array["room"] = "";
        	$result_array["about"]="";
        	/*
				Keeping everything in sessions so that i'm awesome :P
        	*/
        	$_SESSION['info'] = $result_array;

			$sql = "INSERT INTO techid_users (username,fname,lname,rollno,dept) VALUES ('$ldap_id','$fname','$lname','$rollno','$dept')";
			$res = mysql_query($sql);
			$redirect_url = "/techid/settings.php";
			//welcome cookie. You are welcome :P
			setCookieValue("welcome","2");
			Header ("Location: " . $redirect_url);
			exit;
		}
	}
	else
	{
		//setting cookie just for awesomeness
		setCookieValue("error","1");
		Header("Location: /techid/index.php");
		exit;
	}

?>