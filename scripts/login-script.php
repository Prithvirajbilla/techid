<?php 
/* @author Prithviraj Billa
*/

    //LDAP server settings
    $ldap_host = 'ldap.iitb.ac.in';
    $ldap_port = 389;
    $baseDN = 'dc=iitb,dc=ac,dc=in';

    $ldap_id = $_POST['ldap_id'];
    $password = $_POST['password'];

	$ds = @ldap_connect($ldap_host) or die("Unable to connect to LDAP server. Please try again later.");
	ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
	$sr = @ldap_search($ds,$baseDN,"(uid=$ldap_uid)");
	$info = @ldap_get_entries($ds, $sr);
	$ldap_uid = $info[0]['dn'];
	$do_bind = ldap_bind($ds,$ldap_uid,$password);

	//config file including once

	include_once "../config/config.php";	

	if($do_bind)
	{
		//Query 
		$query = "select * from  techid_users WHERE username='$ldap_id'";
		$result = mysql_query($query);
		//setting cookie
		//expiry 
		error_log($result,0);
		$expiry = time() + 300 ;
		setcookie("uid",$ldap_id,$expiry,"/techid/");
		setcookie("id",md5($ldap_id),$expiry,"/techid/");
		if($result)
		{
			$result_array = mysql_fetch_array($result);
			$redirect_url = "/techid/techprofile.php?id=".$result_array["id"];
			Header ("Location: ". $redirect_url);
		}
		else
		{
			$sql = "INSERT INTO techid_users (username) VALUES ('$ldap_id')";
			$result = mysql_query($sql);
			$redirect_url = "/techid/settings.php";
			Header ("Location: " . $redirect_url);
		}

	}
	else
	{
		
		Header("Location: /techid/index.php?error=1");
	}







?>