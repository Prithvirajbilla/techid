                <div class="page-header">
                    <h1><span class="ico-tools"></span> Edit your Profile</h1>
                </div>
                <div class="row-fluid"> 
                    <form id="editform" method="post" action="">
                        <div class="span6">
                            <div class="row-form">
                                <div class="span3">First Name:</div>
                                <div class="span9"><input type="text" class="validate[required]" data-errormessage="Your first name is required" name="fname" placeholder="first name" value="<?php echo $result['fname'] ?>" ></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Last Name:</div>
                                <div class="span9"><input type="text" class="validate[required]" data-errormessage="Your Last name is required" name="lname" placeholder="last name" value="<?php echo $result['lname'] ?>" ></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Roll Number : </div>
                                <div class="span9"><input type="text" name="rollnumber"
                                value="<?php echo $result['rollno'] ?>" class="validate[required,custom[rollNumber],maxSize[11]]" data-errormessage-value-missing="Roll number is required" data-errormessage-custom-error="This doesn't seem to a valid roll number to me" data-errormessage="roll number required" placeholder="roll number" ></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Hostel : </div>
                                <div class="span9"><input type="text" name="hnumber" 
                                    value="<?php echo $result['hostel'] ?>" class="validate[required,custom[onlyLetterNumber],maxSize[3]]" data-errormessage-custom-error="not a valid hotel number" data-errormessage="hostel number required" placeholder="Hostel Number" ></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Room Number : </div>
                                <div class="span9"><input type="text" name="rnumber" 
                                    value="<?php echo $result['rollno'] ?>" class="validate[required,custom[integer],maxSize[4]]" data-errormessage-custom-error="not a valid room number" data-errormessage="room number required" placeholder="room number" ></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Department : </div>
                                <div class="span9"><input type="text" name="dep" 
                                    value="<?php echo $result['dept'] ?>" class="validate[required]" placeholder="department" ></div>
                            </div>
                            <div class="row-form input-prepend">
                                <div class="span6">
                                    <span class="add-on"><i class="icon-envelope icon-white"></i></span>
                                    <input type="email" placeholder="email" 
                                    value="<?php echo $result['email'] ?>" class="validate[required,custom[email]]" name="email"> 
                                </div>                              
                            </div>
                            <div class="row-form input-prepend">
                                <div class="span6">
                                    <span class="add-on"><span class="ico-phone"></span></span>
                                    <input type="text" placeholder="contact number" 
                                    value="<?php echo $result['phone'] ?>" class="validate[required,custom[phone]]" name="cnumber"> 
                                </div>                              
                            </div>  
                                <div class="row-form">
                                    <div class="span3">Profile Pic:</div>
                                    <div class="span9">                            
                                        <div class="input-append file">
                                            <input type="file" name="file" style="width: 284px;">
                                            <input type="text" style="width: 297px;">
                                            <button class="btn">Browse</button>
                                        </div>                            
                                    </div>
                                </div>
                            <div class="row-form">
                                <div class="span3">About me:</div>
                                <div class="span9"><textarea placeholder="about me"><?php echo $result['about'] ?></textarea></div>
                            </div>
                            <div class="row-form">
                                <div class="span3">Skills:</div>
                                <div class="span9">
                                    <input type="text" class="tags" name="tags"  >
                                </div>
                            </div>
                            <div class="row-form">
                                <button class="btn btn-large btn-block btn-success" type="submit">Edit Profile</button>
                            </div>

                        </div>
                    </form>
    <!--- script for validating the login form -->
    <script type="text/javascript" src="/techid/public/js/plugins/validationEngine/jquery.validationEngine.js"> </script>
    <script src="/techid/public/js/plugins/validationEngine/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>    

        <script>
        $(document).ready(function(){
            $("#editform").validationEngine();
           });
        </script>

                </div>
            </div>

    </div>

          </body>