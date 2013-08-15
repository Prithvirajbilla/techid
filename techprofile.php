<?php
/*
	PHP code for checking if the cookie exist and if not redirects to the main page:
*/
session_start();
include ("scripts/cookie.php");
if (!checkValidCookie()) 
{
	$username = $checkValidCookie();
	header("Location: /techid/index.php");
	exit;
}
?>

<html>
<?php include "include/head.php"; ?>
<body>
<div class="wrapper">
	<div class="top">
	    <a href="/techid" class="logo"></a>
	</div>
	<div class="body">
		<?php include "include/nav.php"; ?>
		<?php include "include/profile.php"; ?>
    </div>
</div>

</body>
</html>