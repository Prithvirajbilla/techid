<?php 
// if there exists acookie
	if(isset($_COOKIE['uid']))
	{
		$val = $_COOKIE['uid'];
		$pieces = $_COOKIE['id'];
		if(md5($val) == $pieces)
		{
			header("Location: techprofile.php");
		}

	}
?>
<?php include "include/login.php"; ?>