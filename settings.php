<?php
	include_once "config/config.php";
	if(!isset($_COOKIE['uid']))
	{
		header("Location: index.php");
	}
	else
	{
		$val = $_COOKIE['uid'];
		$pieces = $_COOKIE['id'];
		if(md5($val) != $pieces)
		{
			header("Location: index.php");
		}
		else
		{
			include_once "scripts/getInfo.php";
			$techprofile = new Info($val);
			$result = $techprofile->getInfo();
			$result_array = mysql_fetch_array($result);
			$result = $result_array;

		}
	}

?>


<?php include "include/header.php"; ?>
<?php include "include/edit.php"; ?>