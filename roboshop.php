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
	
	$userjpg = $val.".jpg";
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
					<h1>  ROBOSHOP  </h1>
                </div>
                <div class="row">
                	<div class="span6 offset3">
                		<h1> Coming Soon </h1>
                		<h3> Buy and Sell Stuff</h3>
                	</div>
                </div>
            </div>
        </div>

    </div>

          </body>