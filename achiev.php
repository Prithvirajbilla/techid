<?php
	include_once "config/config.php";
	include_once "config/achievements.php";
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
	
	$userjpg = $val.".jpg";
	if(!file_exists("images/".$userjpg))
	{
		$userjpg = "default.jpg";
	}
	$achieve = new TechIdAcheivements();
	$getAchieve = $achieve->getUserAchievements($result_array['id']);


?>	
<?php include("include/header.php"); ?>
<?php 
	while($row = mysql_fetch_array($getAchieve))
	{
			echo $row ;
	}

?>
