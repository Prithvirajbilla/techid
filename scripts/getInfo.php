<?php

class Info
{
	var $queryString;
	function __construct($str)
	{
		$this->queryString = $str;
	}
	function getInfo()
	{
		$query = "select * from  techid_users WHERE username='$this->queryString'";
		$result = mysql_query($query);
		if($result)
		{
			return $result;
		}
		else
		{
			return false;
		}

	}
}



?>