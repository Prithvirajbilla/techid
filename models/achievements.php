<?php
	/*
		@author : Prithviraj Billa

	*/
	class TechIdAchievements
	{
		 function getUserAchievements($tech_id)
		 {
	        $query = "SELECT 
                   `e`.`name` AS `event_name`, `e`.`date` AS `event_date`,
                   `c`.`name` AS `organizer`,
                   `a`.`position`, `a`.`desc` AS `achv_desc` 
                    
            FROM `techid_user_reg_events` AS `reg`
                
            INNER JOIN `techid_events` AS `e`
                ON `reg`.`event_id` = `e`.`id` AND
                    `e`.`date` < CURDATE() AND
                    `e`.`competition_flag` = 'Y'
                    
            LEFT JOIN `techid_clubs` AS `c`
                ON `e`.`club_id` = `c`.`id`
                
            LEFT JOIN `techid_user_achievements` AS `a`
                ON `reg`.`event_id` = `a`.`event_id`
                
            WHERE `reg`.`tech_id` = $tech_id
            
            ORDER BY `e`.`date` DESC
            LIMIT 20";

            $result = mysql_query($query);
            return mysql_fetch_array($result);
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