<?php 
include ("scripts/cookie.php");
if (checkValidCookie()) 
{
	$username = $checkValidCookie();
	header("Location: /techid/techprofile.php");
	exit;
}
?>
<html>
<?php
// head consists one variable $title
// so set that varaible;
 $title = "TECH ID";
//now checking if there is an awesome cookie to give error
 	$cookieVal = getValueCookie("error");
 	echo $cookieVal;
 	if($cookieVal == '1')
 	{
 		$error = '<div class="alert alert-error"><button type="button" ';
 		$error = $error. 'class="close" data-dismiss="alert">×</button><strong>Warning!</strong> ';
 		$error = $error. 'Best check yo self, you\'re not looking too good.</div>';
 	}
 	// now unsetting the cookie
 	unsetCookie("error");
?>
<?php include "include/head.php"; ?>
<?php include "include/login.php"; ?>
</html>