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
<?php include "include/head.php"; ?>
<?php include "include/login.php"; ?>
</html>