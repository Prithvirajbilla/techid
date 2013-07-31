
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title>TechId | STAB IITB</title>
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
    
    <script type="text/javascript" src="/techid/public/js/plugins/validationEngine/jquery.validationEngine.js"> </script>
    <script src="/techid/public/js/plugins/validationEngine/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>    
    <script type='text/javascript' src='/techid/public/js/plugins.js'></script>
    <script type='text/javascript' src='/techid/public/js/actions.js'></script>
</head>
<body >    
    <div id="loader"><img src="/techid/public/img/loader.gif"/></div>
      <img alt="background" id="full-width" src="/techid/public/img/cover.jpg" id="full-screen-background-image" /> 

    <div class="login">
            <div class="page-header" >
                <h1 style="color:white" > Tech ID <small style="color:white"> by STAB, Student Technical Activities, 2013 <br/> Login with your LDAP credentials </small> </h1>
            </div>
    <form id="loginForm" method="post" action="/techid/scripts/login-script2.php">
        <div class="row-fluid">
            <div class="row-form">
                <div class="span12">
                    <input type="text" name="ldap_id" class="validate[required]" placeholder="ldap username" data-errormessage="Use your LDAP ID" />
                </div>
            </div>
            <div class="row-form">
                <div class="span12">
                    <input type="password" name="password" class="validate[required]" placeholder="password" data-errormessage="Use your LDAP Password here."/>
                </div>            
            </div>
            <br/ >
            <div class="row-form">
                <div class="span12">
                    <button class="btn" type="submit">Sign in </button>
                    <br/>
                    <p class="text-error label">
                    <!-- PHP scripting -->
                    <?php
                        if (isset($_GET["error"]))
                        {
                            $error_num = $_GET["error"];
                            if($error_num = 1)
                            {
                                echo "Cannot connect to Internet or Invalid login";
                            }
                        }

                    ?>



                    </p>
                </div>               
            </div>
        </div>
    </form>
    <!--- script for validating the login form -->
        <script>
        $(document).ready(function(){
            $("#loginForm").validationEngine();
           });
        </script>

    </div>
    
</body>
</html>
