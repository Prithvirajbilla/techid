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
			$tech_id = $result['id'];
			$userjpg = $val.".jpg";
		    $skills_query = "SELECT    `user_skills`.`skill_id`,
		                    `skills`.`name`, `skills`.`tagname`, 
		                    `skills`.`desc`      AS `skill_desc`,
		                    `user_skills`.`desc` AS `user_skill_desc`
		          
		          FROM `techid_user_skills` AS `user_skills`                                              
		          
		          LEFT JOIN `techid_skills` AS `skills`
		          ON `user_skills`.`skill_id` = `skills`.`id`
		          
		          WHERE `user_skills`.`tech_id` = $tech_id";
		    $skills = mysql_query($skills_query);

		}
	}
	if(!file_exists("images/".$userjpg))
	{
		$userjpg = "default.jpg";
	}

?>
<?php include "include/header.php"; ?>
<div class="content" >
    <div class="page-header">
        <div class="icon">
            <span class="ico-profile"></span>
        </div>

        <h1> Tech Profile  <small> welcome, <?php echo $result["fname"];?> </small></h1>
    </div>
<?php include "include/profile.php"; ?>
