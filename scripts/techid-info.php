<?php
/** techid Info of the person **/
class techidInfo
{
	var $queryString;
	var $updateCheck;
	var $profileInfo;
	var $skillInfo;
	var $achievementInfo;
	function __construct($str)
	{
		$this->queryString = $str;
		$this->updateCheck = 'false';
	}
	function getProfileInfo()
	{
		$query = "select * from  techid_users WHERE username='$this->queryString'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($row);
		foreach ($row as $key => $value) {
		 	# code...
		 	if($value == "")
		 	{
		 		$row[$key] = 'None';
		 		$this->updateCheck = 'true';
		 	}
		 }
		 $this->profileInfo = $row;
		 return $row;
	}
	function getSkillsInfo()
	{
		$query = "select a.name as skill from techid_skills a,techid_user_skills b,techid_users c ";
		$query = $query	."where a.id=b.skill_id and b.tech_id=c.id and c.username='$this->queryString'";
		$result = mysql_query($query);
		$skills = array();
		while($row = mysql_fetch_array($result))
		{
			$skills[] = $row['skill'];
		}
		if(empty($skills))
		{
			$skills[] = "No skills added, Add your skills";
		}
		$this->skillInfo = $skills;
		return $skills;
	}

	function getAcheivements()
	{
		$query = "select a.event_name as event_name,a.event_date as event_date,";
		$query = $query . "a.position as position,a.desc as des,b.name as club";
		$query = $query . "from techid_user_past_achievements a,techid_clubs b,techid_users c";
		$query = $query . "where a.event_club_id=b.id and a.tech_id=c.id and c.username='$this->queryString'";
		$result = mysql_query($query);
		$achievements = array();
		while($row = mysql_fetch_array($result))
		{
			$achievements[] = $row;
		}
		if(empty($skills))
		{
			$achievements[] = "No skills added, Add your skills";
		}
		$this->achievementInfo = $achievements;
		return $achievements;
	}
}



?>