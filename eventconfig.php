<?php
include_once "config/config.php";
	function isthere($num,$id)
	{
		$fname = "fname".$num;
		$lname = "lname".$num;
		$room =  "room".$num;
		$ldap = "ldap".$num;
		$hostel = "hostel".$num;
		$phone = "phone".$num;
		$email = "email".$num;
		if($_POST[$fname] != "" and $_POST[$lname] !="" and $_POST[$room] !=""
			 and $_POST[$ldap] != "" and $_POST[$hostel] != "" and $_POST[$phone] != ""
			  and $_POST[$email] != "" )
		{
			$fnamee = $_POST[$fname];
			$lnamee = $_POST[$lname];
			$roome= $_POST[$room];
			$hostele = $_POST[$hostel];
			$phonee = $_POST[$phone];
			$ldape = $_POST[$ldap];
			$emaile = $_POST[$email];
			$q = "INSERT INTO xlr8_participants (FNAME,LNAME,ROLL,HOSTEL,ROOM,EMAIL,PHONE,TEAM)
			 VALUES ('$fnamee','$lnamee','$ldape','$hostele','$roome','$emaile','$phonee','$id')";
			$p =mysql_query($q);
				if($p === FALSE) {
    			die(mysql_error()); // TODO: better error handling
				}

		}
	}

	

	$teamname = $_POST['teamname'];
	$teammotto = $_POST['team-motto'];
	$insert_query = "INSERT INTO xlr8_teams (TEAMNAME,MOTTO) VALUES ('$teamname','$teammotto')";
	$res = mysql_query($insert_query);
	if($res === FALSE) {
    die(mysql_error()); // TODO: better error handling
	}

	$res = "SELECT * FROM xlr8_teams where TEAMNAME='$teamname' and MOTTO='$teammotto' ";
	$res1 = mysql_query($res);
	if($res1 === FALSE) {
    die(mysql_error()); // TODO: better error handling
	}
	$res1 = mysql_fetch_array($res1);
	$teamid = $res1["ID"];
	isthere("1",$teamid);
	isthere("2",$teamid);
	isthere("3",$teamid);
	isthere("4",$teamid);
	header("Location: http://stab-iitb.org/category/robo-events/")
?>