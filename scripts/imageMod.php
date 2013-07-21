<?php
class imageMod
{
	var $name;
	var $imagename;
	function __construct($fieldname,$imagename)
	{
		$this->name = $fieldname;
		$this->imagename = $imagename;
	}
	function savefile()
	{
		$allowedExts = array("jpeg", "jpg", "png");
		$file = $this->name;
		$imagename = $this->imagename;
		$temp = explode(".",$_FILES[$file]["name"]);
		$extension = end($temp);
		if (( ($_FILES[$file]["type"] == "image/jpeg") || ($_FILES[$file]["type"] == "image/jpg")
				|| ($_FILES[$file]["type"] == "image/pjpeg") || ($_FILES[$file]["type"] == "image/x-png")
				|| ($_FILES[$file]["type"] == "image/png")) && ($_FILES[$file]["size"] < 5242880)
				&& in_array($extension, $allowedExts))
		{
			 if ($_FILES["file"]["error"] > 0)
    		{
    			return "This error exits" . $_FILES[$file]["error"] . "<br>";
    		}
    		else
    		{
    			 move_uploaded_file($_FILES[$file]["tmp_name"],"/techid/images/" . $_FILES[$file]["name"]);
    		}
		}
		else
		{
			return false;
		}


	}
}




?>