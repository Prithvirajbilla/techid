<?php 
/* @author Prithviraj Billa
*/

    //LDAP server settings
    $ldap_host = 'ldap.iitb.ac.in';
    $ldap_port = 389;
    $baseDN = 'dc=iitb,dc=ac,dc=in';

    $ldap_id = strip_tags($_POST['ldap_id']);
    $password = strip_tags($_POST['password']);

	$ds = @ldap_connect($ldap_host) or die("Unable to connect to LDAP server. Please try again later.");
	$sr = @ldap_search($ds,$baseDN,"(uid=$ldap_uid)");
	$info = @ldap_get_entries($ds, $sr);
	$ldap_uid = $info[0]['dn'];
	$do_bind = @ldap_bind($ds,$ldap_uid,$ldap_pass);

	//config file including once

	include_once "../config/config.php";	

	if(true)
	{
		//Query 
		$query = "select * from  techid_users WHERE username='$ldap_id'";
		$result = mysql_query($query);
		if($result)
		{
			$result_array = mysql_fetch_array($result);
			//setting cookie
			$cookie_val = $ldap_id ."|" . $result_array["id"]; 
			//expiry 
			$expiry = time() + 300 ;
			setcookie("uid",$cookie_val,$expiry);
			$redirect_url = "techprofile.php?id=".$result_array["id"];
			Header ("Location: ". $redirect_url);
		}
		else
		{
			$sql = "INSERT INTO techid_users (username) VALUES ('$ldap_id')";
			$result = mysql_query($sql);

		}

	}
	else
	{
		Header("Location: /techid/index.php?error=1");
	}







?>