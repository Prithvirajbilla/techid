<?php
if(isset($_COOKIE['uid']))
{
	setcookie ("uid", "", time()-3600,"/techid/");
}
if(isset($_COOKIE['id']))
{
	setcookie ("id", "", time() - 3600, "/techid/");
}
header("Location: /techid/");
?>