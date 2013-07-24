<?php
	/*
		@author : Prithviraj Billa

	*/
	class TechIdAchievements
	{
		 function getPastUserAchievements($tech_id)
		 {
            $query = "SELECT `pa`.`event_name`, `pa`.`event_date`, `pa`.`position`,
                                `pa`.`desc` AS `achv_desc`, `club`.`name` AS `organizer`
                                
                            FROM `techid_user_past_achievements` AS `pa`
                            
                            LEFT JOIN `techid_clubs` AS `club`
                                ON `pa`.`event_club_id` = `club`.`id`
                                
                            WHERE `pa`.`tech_id` = $tech_id
                                AND `pa`.`verified` = 'Y'";

            $result = mysql_query($query);
            return $result;
		 }
		/*
         *  Add a past achievement
         */
		function addUserPastAchievement($achv_info)
        {            
            $insert_keys = '';                        
            $insert_values = '';
            foreach ($achv_info as $key => $val) {
                $insert_keys .= "`$key`,";
                $insert_values .= "'$val',";
            }
            $insert_keys = substr($insert_keys, 0 , -1);
            $insert_values = substr($insert_values, 0, -1);
            
            $query = "INSERT INTO `techid_user_past_achievements`
                            ($insert_keys)
                        VALUES 
                            ($insert_values)";
                            
            
        }

	}