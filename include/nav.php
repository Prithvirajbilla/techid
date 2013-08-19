<!-- nav bar for the techid -->
<?php
// Variables involved in thid page is $user

?>


<ul class="navigation">
    <li>
        <a href="/techid" class="button">
            <div class="icon">
                <span class="ico-home"></span>
            </div>                    
            <div class="name">Home</div>
        </a>                
    </li>
    <li>
        <a href="events.php" class="button orange">
            <div class="icon">
                <span class="ico-calendar"></span>
            </div>                    
            <div class="name">Events</div>
        </a>                
    </li>                      
    <li>
        <a href="achiev.php" class="button red">
            <div class="icon">
                <span class="ico-briefcase"></span>
            </div>                    
            <div class="name">Acheivements</div>
        </a>                
    </li>                      

    <li>
        <a href="roboshop.php" class="button green">
            <div class="icon">
                <span class="ico-shopping-cart"></span>
            </div>                    
            <div class="name">RoboShop</div>
        </a>                
    </li>  
    <li>
        <a href="settings.php" class="button yellow">
            <div class="icon">
                <span class="ico-tools"></span>
            </div>                    
            <div class="name">Settings</div>
        </a>          
    </li>                
    <li>
    <div class="user">
        <img src="<?php $userjpg =  $user.'.jpg'; 
                    if(file_exists('/techid/images/'.$userjpg))
                    {

                        echo '/techid/images/'.$userjpg;
                    }
                    else
                    {
                        $userjpg = "/techid/images/default.jpg";
                        echo "/techid/images/default.jpg";
                    } ?>" align="left" width="75">
        <a href="logout.php" class="name">
            <span><?php echo $user; ?></span>
            <span class="sm">Logout</span>
        </a>
    </div>
    </li>                
</ul>
