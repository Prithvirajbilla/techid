<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title>TechId | STAB IITB (2013)</title>
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    
    <link href="/techid/public/css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="css/ie.css" rel="stylesheet" type="text/css" />
    <![endif]-->           
    <!--[if lte IE 7]>
        <script type='text/javascript' src='/techid/public/js/plugins/other/lte-ie7.js'></script>
    <![endif]-->    
    <script type='text/javascript' src='/techid/public/js/plugins/jquery/jquery-1.9.1.min.js'></script>
    <script type='text/javascript' src='/techid/public/js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='/techid/public/js/plugins/jquery/jquery-migrate-1.1.1.min.js'></script>
    <script type='text/javascript' src='/techid/public/js/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='/techid/public/js/plugins/other/excanvas.js'></script>
    
    <script type='text/javascript' src='/techid/public/js/plugins/other/jquery.mousewheel.min.js'></script>
        
    <script type='text/javascript' src='/techid/public/js/plugins/bootstrap/bootstrap.min.js'></script>
    
    <script type='text/javascript' src="/techid/public/js/plugins/uniform/jquery.uniform.min.js"></script>
    
    
    <script type='text/javascript' src='/techid/public/js/plugins.js'></script>
    <script type='text/javascript' src='/techid/public/js/actions.js'></script>
</head>
<body >
    <div class="wrapper">
        <div class="top">
            <a href="" class="logo"></a>
        </div>
        <div class="body">
            <ul class="navigation">
                <li>
                    <a href="/" class="button">
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
                    <a href="acheiv.php" class="button red">
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
                    <img src="/techid/public/img/examples/users/dmitry_m.jpg" align="left">
                    <a href="logout.php" class="name">
                        <span><?php echo $result["fname"]." ".$result["lname"] ?></span>
                        <span class="sm">Logout</span>
                    </a>
                </div>
                </li>                
            </ul>
            <div class="content" >
                <div class="page-header">
                    <div class="icon">
                        <span class="ico-profile"></span>
                    </div>

                    <h1> Tech Profile  <small> welcome, <?php echo $result["fname"];?> </small></h1>
                </div>
