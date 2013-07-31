<?php



 	$ldap_id = $_POST['ldap_id'];
    $password = $_POST['password'];
    $password = base64_encode($password);
    $url = "http://www.cse.iitb.ac.in/~prithvirajbilla/ldap-api/index.php?user=".$ldap_id."&pass=".$password;
    $json = file_get_contents($url);
    $result_array = json_encode($json, TRUE);
	$bind = $result_array["bind"];
	include_once "../config/config.php";
	if(/*isset($result_array["bind"]) and $bind*/true)
	{
		$query = "select * from  techid_users WHERE username='$ldap_id'";
		$result = mysql_query($query);
		//setting cookie
		//expiry 
		$expiry = time() + 3600 ;
		setcookie("uid",$ldap_id,$expiry,"/techid/");
		setcookie("id",md5($ldap_id),$expiry,"/techid/");
		$result_arr = mysql_fetch_array($result);
		if($result_arr['id'] != "")
		{
			
			$redirect_url = "/techid/techprofile.php?id=".$result_arr["id"];
			Header ("Location: ". $redirect_url);
		}
		else
		{
			$fname = $result_array["fname"];
        	$lname = $result_array["lname"];
        	$rollno = $result_array["rollno"];
        	$mail = $result_array["mail"];
        	$dept = $result_array["dept"];

			$sql = "INSERT INTO techid_users (username,fname,lname,rollno,dept) VALUES ('$ldap_id','$fname','$lname','$rollno','$dept')";
			mysql_query($sql);
			$redirect_url = "/techid/settings.php";
			Header ("Location: " . $redirect_url);
		}
	}
	else
	{

		Header("Location: /techid/index.php?error=1");
	}




?>