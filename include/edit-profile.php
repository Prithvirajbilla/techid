
<div class="page-header">
    <h1><span class="ico-tools"></span> Edit your Profile</h1>
</div>

<div class="row-fluid"> 
    <form id="editform" method="post" enctype="multipart/form-data" action="/techid/scripts/edit.php">
        <div class="span6">
            <div class="row-form">
                <div class="span3">First Name:</div>
                <div class="span9">
                    <input type="text" 
                    class="validate[required]" 
                    data-errormessage="Your first name is required" 
                    name="fname" placeholder="first name" 
                    value="<?php echo $result['fname'] ?>" >
                </div>
            </div>
            <div class="row-form">
                <div class="span3">Last Name:</div>
                <div class="span9"><input type="text" class="validate[required]" 
                    data-errormessage="Your Last name is required" 
                    name="lname" 
                    placeholder="last name" 
                    value="<?php echo $result['lname'] ?>" >
                </div>
            </div>
            <div class="row-form">
                <div class="span3">Roll Number : </div>
                <div class="span9"><input type="text" name="rollno"
                value="<?php echo $result['rollno'] ?>" 
                class="validate[required,custom[rollNumber],maxSize[11]]" 
                data-errormessage-value-missing="Roll number is required" 
                data-errormessage-custom-error="This doesn't seem to a valid roll number to me" 
                data-errormessage="roll number required" placeholder="roll number" >
            </div>

            </div>
            <div class="row-form">
                <div class="span3">Hostel : </div>
                <div class="span9"><input type="text" name="hostel" 
                    value="<?php echo $result['hostel'] ?>" 
                    class="validate[required,custom[onlyLetterNumber],maxSize[3]]" 
                    data-errormessage-custom-error="not a valid hotel number" 
                    data-errormessage="hostel number required" 
                    placeholder="Hostel Number">
                </div>
            </div>
            <div class="row-form">
                <div class="span3">Room Number : </div>
                <div class="span9"><input type="text" name="room" 
                    value="<?php echo $result['room'] ?>" 
                    class="validate[required,custom[integer],maxSize[4]]" 
                    data-errormessage-custom-error="not a valid room number" 
                    data-errormessage="room number required" 
                    placeholder="room number" >
                </div>
            </div>
            <div class="row-form">
                <div class="span3">Department : </div>
                <div class="span9"><input type="text" name="dept" 
                    value="<?php echo $result['dept'] ?>" 
                    class="validate[required]" 
                    placeholder="department" >
                </div>
            </div>
            <div class="row-form input-prepend">
                <div class="span6">
                    <span class="add-on"><i class="icon-envelope icon-white"></i></span>
                    <input type="email" placeholder="email" 
                    value="<?php echo $result['email'] ?>" class="validate[required,custom[email]]" 
                    name="email"> 
                </div>                              
            </div>
            <div class="row-form input-prepend">
                <div class="span6">
                    <span class="add-on"><span class="ico-phone"></span></span>
                    <input type="text" placeholder="contact number" 
                    value="<?php echo $result['phone'] ?>" class="validate[required,custom[phone]]" 
                    name="phone"> 
                </div>                              
            </div>  
            <div class="row-form">
                <div class="span3">About me:</div>
                <div class="span9"><textarea name="about" 
                    placeholder="about me"><?php echo $result['about'] ?></textarea>
                </div>
            </div>
                <div class="row-form">
                    <div class="span3">Skills:</div>
                    <div class="span9">
                        <select name="s_example" multiple="multiple" class="select" style="width: 100%;">
                            <option value="0">choose a option...</option>
                            <option value="1">Andorra</option>
                            <option value="2">Antarctica</option>
                            <option value="3">Bulgaria</option>
                            <option value="4">Germany</option>
                            <option value="5">Dominican Republic</option>
                            <option value="6">Micronesia</option>
                            <option value="7">United Kingdom</option>
                            <option value="8">Greece</option>
                            <option value="9">Italy</option>
                            <option value="10">Ukraine</option>                                                                       
                        </select>
                    </div>
                </div>
                <div class="row-form">
                    <button class="btn btn-large btn-block btn-success" type="submit">Edit Profile</button>
                    <p class="text-error label">
                    <!-- PHP scripting -->
                    <?php
                        if (isset($_GET["error"]))
                        {
                            $error_num = $_GET["error"];
                            if($error_num = 1)
                            {
                                echo "one or more errors are found.Dont disable JS";
                            }
                        }

                    ?>
                </p>
            </div>
        </div>
    </form>
    <!--- script for validating the login form -->
    <script type="text/javascript" src="./include/public/js/plugins/validationEngine/jquery.validationEngine.js"> </script>
    <script src="./include/public/js/plugins/validationEngine/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>    

    <script>
    $(document).ready(function(){
        $("#editform").validationEngine();
       });
    </script>

