<!--
$$$$$$$$\                  $$\             $$\       $$\ 
\__$$  __|                 $$ |            \__|      $$ |
   $$ | $$$$$$\   $$$$$$$\ $$$$$$$\        $$\  $$$$$$$ |
   $$ |$$  __$$\ $$  _____|$$  __$$\       $$ |$$  __$$ |
   $$ |$$$$$$$$ |$$ /      $$ |  $$ |      $$ |$$ /  $$ |
   $$ |$$   ____|$$ |      $$ |  $$ |      $$ |$$ |  $$ |
   $$ |\$$$$$$$\ \$$$$$$$\ $$ |  $$ |      $$ |\$$$$$$$ |
   \__| \_______| \_______|\__|  \__|      \__| \_______|
                                                         
                                                         
 -->                                                        
<body >    
    <div id="loader"><img src="./include/public/img/loader.gif"/></div>
      <img alt="background" id="full-width" src="./include/public/img/cover.jpg" 
      id="full-screen-background-image" /> 

    <div class="login">
            <div class="page-header" >
                <h1 style="color:white" >Tech ID <small style="color:white">
                 by STAB, Student Technical Activities, 2013 <br/> 
                 Login with your LDAP credentials </small> 
                </h1>
            </div>
    <form id="loginForm" method="post" action="./scripts/login-script.php">
        <div class="row-fluid">
            <div class="row-form">
                <div class="span12">
                    <input type="text" name="ldap_id"
                     class="validate[required]" 
                     placeholder="ldap username"
                     data-errormessage="Use your LDAP ID" 
                     />
                </div>
            </div>
            <div class="row-form">
                <div class="span12">
                    <input type="password" 
                    name="password" 
                    class="validate[required]"
                    placeholder="password" 
                    data-errormessage="Use your LDAP Password here."/>
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
    <script type="text/javascript" src="./include/public/js/plugins/validationEngine/jquery.validationEngine.js"> </script>
    <script src="./include/public/js/plugins/validationEngine/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
    <script>
    $(document).ready(function(){
        $("#loginForm").validationEngine();
       });
    </script>
    </div>
</body>
