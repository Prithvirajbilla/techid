
<div class="row-fluid">
    <div class="span12 overlap">
        <?php
        //any welcome messages;
        if(isset($welcome))
            echo $welcome; 
        ?>
        <div class="span4 offset4 profile-title">
            <div class="page-header">
                <h1 class="text-white"><span class="ico-user"> </span> 
                    <?php echo $result["fname"]." ".$result["lname"]; ?>
                </h1>
            </div>
            <p style="color:white;margin-left:10px;"> About me : <?php echo $result["about"]; ?>
             </p>
        </div>
        <img alt="background" id="full-width-cover" src="./include/public/img/cover.jpg" 
        style="position: relative; top: 0; left: 0;"/> 
        <img alt="profilepic" src="<?php echo $userjpg; ?>" 
        width="200px" height="200px" class="cover" />
    </div>
</div>
<!-- profile pic for awesome ness -->

<div class="row-fluid" style="border-bottom: 2px solid #e0e0e0;border-top: 2px solid #e0e0e0;">
    <div class="span6 offset3">
<!--         <dl class="dl-horizontal">
            <dt><span class="ico-user"> </span>LDAP ID:</dt>
                <dd> <?php echo $result["username"]; ?></dd>
            <dt><span class=" ico-info"> </span>Roll No:</dt>
                <dd><?php echo $result["rollno"];
                          if($result["rollno"] == "")
                          echo "None"; ?></dd>
            <dt><span class=" ico-info-2"> </span>Room No</dt>
                <dd><?php echo $result["room"];
                                if($result["room"] =="")
                                echo "None"; ?></dd>
            <dt><span class="ico-info"> </span>Hostel</dt>
                <dd><?php echo $result["hostel"];
                                if($result["hostel"] == "")
                                    echo "None"; ?></dd>
            <dt><span class="ico-book"> </span> Department </dt>
                <dd> <?php echo $result["dept"];
                            if($result["dept"] == "")
                                    echo "None"; ?> </dd>
            <dt><span class=" ico-phone-4"> </span> Contact Number </dt>
                <dd> <?php echo $result["phone"];
                            if($result["phone"] == "")
                                    echo "None"; ?> </dd>
            <dt><span class="ico-envelope-3"> </span> Gmail ID </dt>
                <dd> <?php echo $result["email"];
                                if($result["email"] == "")
                                    echo "None"; ?> </dd>
            <dt><span class="ico-edit-2"> </span>About me </dt>
                <dd> <?php echo $result["about"];
                                if($result["about"] == "")
                                    echo "None"; ?> 
                </dd>
        </dl>

 -->    
    <div style="margin-top:20px;text-align:center">
        <h1> Personal Information </h1>
    </div>
    <table width="100%"  class="table tickets" style='margin-top:10%'>
        <tbody>
        <tr>
            <td class="bl_blue label-info" style="text-align:center;color:white" width="40%">LDAP ID </td>
            <td style="text-align:center"><span class="mark"><?php echo $result["username"]; ?></span></td>                                        
        </tr>
        <tr>
            <td class="bl_blue label-warning" style="text-align:center;color:white" width="40%">Roll No </td>
            <td style="text-align:center"><span class="mark"><?php echo $result["rollno"];
                          if($result["rollno"] == "")
                          echo "None"; ?></span>
            </td>                                        
        </tr>
        <tr>
            <td class="bl_blue red" style="text-align:center;color:white" width="40%">Room No </td>
            <td style="text-align:center"><span class="mark"><?php echo $result["room"];
                                if($result["room"] =="")
                                echo "None"; ?>
                        </span>
            </td>                                        
        </tr>
        <tr>
            <td class="bl_blue green" style="text-align:center;color:white" width="40%">Hostel </td>
            <td style="text-align:center"><span class="mark"><?php echo $result["hostel"];
                                if($result["hostel"] == "")
                                    echo "None"; ?>
                            </span>
            </td>                                        
        </tr>
        <tr>
            <td class="bl_blue orange" style="text-align:center;color:white" width="40%"> Department </td>
            <td style="text-align:center"><span class="mark"> <?php echo $result["dept"];
                            if($result["dept"] == "")
                                    echo "None"; ?>
                            </span>
            </td>                                        
        </tr>
        <tr>
            <td class="bl_blue yellow" style="text-align:center;color:white" width="40%">Contact Number </td>
            <td style="text-align:center"><span class="mark"><?php echo $result["phone"];
                            if($result["phone"] == "")
                                    echo "None"; ?> 
                            </span>
            </td>                                        
        </tr>
        <tr>
            <td class="bl_blue red" style="text-align:center;color:white" width="40%">Email </td>
            <td style="text-align:center"><span class="mark"><?php echo $result["email"];
                            if($result["email"] == "")
                                    echo "None"; ?> 
                            </span>
            </td>                                        
        </tr>
        <tr>
            <td class="bl_blue green" style="text-align:center;color:white" width="40%">About me </td>
            <td style="text-align:center"><span class="mark"><?php echo $result["about"];
                            if($result["about"] == "")
                                    echo "None"; ?> 
                            </span>
            </td>                                        
        </tr>

        </tbody>
    </table>
    </div>
</div>

<div class="row-fluid" style="margin-top:20px;">
    <div class="span5 offset3">
        <div class="page-header">
            <h1><span class="ico-tags"></span>Stuff I'm good at:
                <small style="margin-left:20px">Frameworks and languanges i'm proficient</small> 
            </h1>
        </div>
        <span class="icon-tags"></span>
        <?php echo $skill_html; ?>
    </div>
</div>
