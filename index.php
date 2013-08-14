<?php 
// if there exists acookie
	if(isset($_COOKIE['uid']))
	{
		$val = $_COOKIE['uid'];
		$pieces = $_COOKIE['id'];
		if(md5($val) == $pieces && $val != "")
		{
			header("Location: techprofile.php");
		}

	}
?>
<html>
<?php include "include/head.php"; ?>
<?php include "include/login.php"; ?>
</html>