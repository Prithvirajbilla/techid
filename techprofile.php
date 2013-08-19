<?php
/*
	PHP code for checking if the cookie exist and if not redirects to the main page:
*/
session_start();
include ("scripts/cookie.php");
if (!checkValidCookie()) 
{
	$username = checkValidCookie();
	//he is lost because, he may be logout
	setCookieValue("error","2");
	//now redirecting, sending the headers
	header("Location: /techid/index.php");
	exit;
}
/*
 variables in nav are $user = $ldap_id;

*/
 if(isset($_SESSION['info']))
 {
 	$result = $_SESSION['info'];
 	$user = $result['username'];
 }
 // title of the page
 $title = $user . " | Tech id" ;
 //checking if there are any cookies
$cookieVal = getValueCookie("welcome");
if($cookieVal == '1')
{
	$welcome = '<div class="alert-info alert" style="text-align:center"><button type="button" ';
	$welcome = $welcome. 'class="close" data-dismiss="alert">×</button><strong>Welcome!!</strong> ';
	$welcome = $welcome. 'Awww, you are back !!!</div>';
}

 	// now unsetting the cookie
 	unsetCookie("welcome");
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