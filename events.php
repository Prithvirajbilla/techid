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
		}
	}
	
	if(!file_exists("images/".$userjpg))
	{
		$userjpg = "default.jpg";
	}

?>
<?php include("include/header.php"); ?>
	<div class="content" >
                <div class="page-header">
                    <div class="icon">
                        <span class="ico-profile"></span>
                    </div>
					<h1>  Upcoming Events  </h1>
                </div>
                <div class="row">
                	<div class="span4 offset3">
                		<h3> XLR8 regestration </h3>
                		<h5> By Robotics Club </h5>
                		<a href="xlr8.php" class="btn"> Register </a>
                		<a href="http://stab-iitb.org/category/robo-events/"  target="_blank" class="btn"> Details </a>
                	</div>
                </div>
            </div>
        </div>

    </div>

          </body>