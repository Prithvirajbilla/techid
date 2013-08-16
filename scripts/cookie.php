<?php
$DIRECTORY = "/techid";
/*
	$val is the ldap id
*/
$SALT = 'awesome';
function setPrimaryCookie($val)
{
	$expiry = time() + 3600 ;
	setcookie("uid",$val,$expiry,$DIRECTORY);
	$salt_cookie = md5($SALT.$val);
	setcookie("id",$val,$expiry,$DIRECTORY);
}

function checkValidCookie()
{
	if(isset($_COOKIE['uid']) and isset($_COOKIE['id']))
	{
		$uid = $_COOKIE['uid'];
		$id = $_COOKIE['id'];
		$hash = md5($SALT.$uid);
		if($hash == $id)
		{
			return $uid;
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
}
// $val is the cookie name and if the cookie exists it gives the value of the cookie
function getValueCookie($val)
{
	if(isset($val))
	{
		$cookie_val = $_COOKIE[$val];
		if($cookie_val == "")
		{
			return $cookie_val;
		}
		else
		{
			return false;
		}
		
	}
	else
	{
		return false;
	}
}
// $val is the value of the cookie and the $name is the cookie name
function setCookieValue($name,$val)
{
	$expiry = time() + 3600 ;
	setcookie($name,$val,$expiry,$DIRECTORY);
}

function unsetCookie($val)
{
	if(isset($_COOKIE[$val]))
	{
		$expiry = time() - 3600;
		setcookie ($val, "", $expiry,$DIRECTORY);
	}
}



?>