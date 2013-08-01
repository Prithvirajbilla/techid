<?php

  //valid_cookie
  include_once "config/config.php";
  if(!isset($_COOKIE['uid']))
  {
    header("Location: index.php");
  }
  else
  {
    $val = $_COOKIE['uid'];
    $pieces = $_COOKIE['id'];
    if(md5($val) != $pieces)
    {
      header("Location: index.php");
    }
    else
    {
      include_once "scripts/getInfo.php";
      $techprofile = new Info($val);
      $result = $techprofile->getInfo();
      $result_array = mysql_fetch_array($result);
      $result = $result_array;
    }
  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>XLR8 Registeration</title>
<link href="http://cdn.jotfor.ms/static/formCss.css?3.1.1217" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="http://cdn.jotfor.ms/css/styles/nova.css?3.1.1217" />
<link type="text/css" media="print" rel="stylesheet" href="http://cdn.jotfor.ms/css/printForm.css?3.1.1217" />
<style type="text/css">
    .form-label{
        width:400px !important;
    }
    .form-label-left{
        width:400px !important;
    }
    .form-line{
        padding-top:10px;
        padding-bottom:10px;
    }
    .form-label-right{
        width:400px !important;
    }
    body, html{
        margin:0;
        padding:0;
        background:no-repeat;
    }

    .form-all{
        margin:0px auto;
        padding-top:20px;
        width:900px;
        background:no-repeat;
        color:rgb(0, 0, 0) !important;
        font-family:'Lucida Grande','  Lucida Sans Unicode','  Lucida Sans','  Verdana','  Tahoma','  sans-serif';
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color:rgb(0, 0, 0);
    }

</style>

<link type="text/css" rel="stylesheet" href="http://jotform.me/css/styles/buttons/form-submit-button-carbon_rounded.css?3.1.1217"/>
<script src="http://cdn.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.1.1217" type="text/javascript"></script>
<script src="http://cdn.jotfor.ms/js/vendor/maskedinput.min.js?v=3.1.1217" type="text/javascript"></script>
<script src="http://cdn.jotfor.ms/static/jotform.js?3.1.1217" type="text/javascript"></script>
<script type="text/javascript">
   JotForm.init(function(){
      $('input_4').hint('ex: myname@example.com');
      JotForm.setPhoneMaskingValidator( 'input_13_full', '(###) ###-####' );
      JotForm.description('input_13', 'Your Mobile Phone number');
      $('input_10').hint('ex: myname@example.com');
      JotForm.setPhoneMaskingValidator( 'input_20_full', '(###) ###-####' );
      JotForm.description('input_20', 'Your Mobile Phone number');
      $('input_8').hint('ex: myname@example.com');
      JotForm.setPhoneMaskingValidator( 'input_19_full', '(###) ###-####' );
      JotForm.description('input_19', 'Your Mobile Phone number');
      $('input_12').hint('ex: myname@example.com');
      JotForm.setPhoneMaskingValidator( 'input_18_full', '(###) ###-####' );
      JotForm.description('input_18', 'Your Mobile Phone number');
      $('input_24').hint('ex: Raftar');
      $('input_25').hint(' ex: We are the fastest');
   });
</script>
</head>
<body>
<form class="jotform-form" action="eventconfig.php" method="post"  accept-charset="utf-8">
  <div class="form-all">
    <ul class="form-section">
      <li class="form-line" id="id_29">
        <div id="cid_29" class="form-input-wide">
          <div style="text-align:center;">
            <img alt="" class="form-image" border="0" src="http://www.jotform.com/uploads/kunaltyagi/form_files/xlr8.png" height="295" width="220" />
          </div>
        </div>
      </li>
      <li id="cid_1" class="form-input-wide">
        <div class="form-header-group">
          <h2 id="header_1" class="form-header">
            XLR8 Registeration for Freshmen
          </h2>
        </div>
      </li>
      <li id="cid_38" class="form-input-wide">
        <div class="form-header-group">
          <h2 id="header_38" class="form-header">
            Click to edit this text...
          </h2>
          <div id="subHeader_38" class="form-subHeader">
            Team Member 1
          </div>
        </div>
      </li>
      <!--- member 1 
      first name : fname1
      last name : lname1
      phone : phone1
      ldap id : ldap1
      hostel : hostel1
      room : room1
      -->


      <li class="form-line form-line-column" id="id_3">
        <label class="form-label-top" id="label_3" for="input_3">
          Name<span class="form-required">*</span>
        </label>
        <div id="cid_3" class="form-input-wide"><span class="form-sub-label-container"><input class="form-textbox validate[required]" type="text" size="10" name="fname1" value="<?php echo $result['fname'] ?>" id="first_3" />
            <label class="form-sub-label" for="first_3" id="sublabel_first"> First Name </label></span><span class="form-sub-label-container"><input class="form-textbox validate[required]" type="text" size="15" name="lname1" value="<?php echo $result['lname'] ?>" id="last_3" />
            <label class="form-sub-label" for="last_3" id="sublabel_last"> Last Name </label></span>
        </div>
      </li>
      <li class="form-line form-line-column" id="id_4">
        <label class="form-label-top" id="label_4" for="input_4">
          E-mail<span class="form-required">*</span>
        </label>
        <div id="cid_4" class="form-input-wide"><span class="form-sub-label-container"><input type="email" class=" form-textbox validate[required, Email]" id="input_4" name="email1" value="<?php echo $result['email'] ?>" size="30" />
            <label class="form-sub-label" for="input_4"> So that we can get back to you </label></span>
        </div>
      </li>
      <li class="form-line form-line-column" id="id_13">
        <label class="form-label-top" id="label_13" for="input_13">
          Phone Number<span class="form-required">*</span>
        </label>
        <div id="cid_13" class="form-input-wide"><span class="form-sub-label-container"><input data-type="mask-number" class="mask-phone-number form-textbox validate[required]" type="tel" name="phone1" id="input_13_full" value="<?php echo $result['phone'] ?>" autocomplete="off">
            <label class="form-sub-label" for="input_13_full"> &nbsp;&nbsp;&nbsp; </label></span>
        </div>
      </li>
      <li class="form-line form-line-column" id="id_34">
        <label class="form-label-top" id="label_34" for="input_34">
          Ldap ID / Techid username<span class="form-required">*</span>
        </label>
        <div id="cid_34" class="form-input-wide">
          <input type="text" class=" form-textbox validate[required]" value="<?php echo $result['username'] ?>" data-type="input-textbox" id="input_34" name="ldap1" size="20" />
        </div>
      </li>
      <li class="form-line form-line-column" id="id_21">
        <label class="form-label-top" id="label_21" for="input_21">
          Hostel of Residence<span class="form-required">*</span>
        </label>
        <div id="cid_21" class="form-input-wide">
          <select class="form-dropdown validate[required]" style="width:150px" id="input_21" name="hostel1">
            <option value="">  </option>
            <option value="Hostel 1"> Hostel 1 </option>
            <option value="Hostel 2"> Hostel 2 </option>
            <option value="Hostel 3"> Hostel 3 </option>
            <option value="Hostel 4"> Hostel 4 </option>
            <option value="Hostel 5"> Hostel 5 </option>
            <option value="Hostel 6"> Hostel 6 </option>
            <option value="Hostel 7"> Hostel 7 </option>
            <option value="Hostel 8"> Hostel 8 </option>
            <option value="Hostel 9"> Hostel 9 </option>
            <option value="Hostel 10"> Hostel 10 </option>
            <option value="Hostel 11"> Hostel 11 </option>
            <option value="Hostel 12"> Hostel 12 </option>
            <option value="Hostel 13"> Hostel 13 </option>
            <option value="Hostel 14"> Hostel 14 </option>
            <option value="Hostel 15C"> Hostel 15C </option>
            <option value="Hostel 15B Floor < 6">
              Hostel 15B Floor
              < 6</option>
                <option value="Hostel 15B Floor > 5"> Hostel 15B Floor > 5 </option>
                <option value="Quarter 23"> Quarter 23 </option>
                <option value="Quarter 24"> Quarter 24 </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column" id="id_33">
        <label class="form-label-top" id="label_33" for="input_33">
          Room Number<span class="form-required">*</span>
        </label>
        <div id="cid_33" class="form-input-wide">
          <input type="text" class=" form-textbox validate[required, Numeric]" data-type="input-textbox" id="input_33" name="room1" size="20" maxlength="3" />
        </div>
      </li>
      <li id="cid_39" class="form-input-wide">
        <div class="form-header-group">
          <h2 id="header_39" class="form-header">
            Click to edit this text...
          </h2>
          <div id="subHeader_39" class="form-subHeader">
            Team Member 2
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-line-column-clear" id="id_7">
        <label class="form-label-top" id="label_7" for="input_7"> Name </label>
        <div id="cid_7" class="form-input-wide"><span class="form-sub-label-container"><input class="form-textbox" type="text" size="10" name="fname2" id="first_7" />
            <label class="form-sub-label" for="first_7" id="sublabel_first"> First Name </label></span><span class="form-sub-label-container"><input class="form-textbox" type="text" size="15" name="lname2" id="last_7" />
            <label class="form-sub-label" for="last_7" id="sublabel_last"> Last Name </label></span>
        </div>
      </li>
      <li class="form-line form-line-column" id="id_10">
        <label class="form-label-top" id="label_10" for="input_10"> E-mail </label>
        <div id="cid_10" class="form-input-wide"><span class="form-sub-label-container"><input type="email" class=" form-textbox validate[Email]" id="input_10" name="email2" size="30" />
            <label class="form-sub-label" for="input_10"> So that we can get back to you </label></span>
        </div>
      </li>
      <li class="form-line form-line-column" id="id_20">
        <label class="form-label-top" id="label_20" for="input_20"> Phone Number </label>
        <div id="cid_20" class="form-input-wide"><span class="form-sub-label-container"><input data-type="mask-number" class="mask-phone-number form-textbox" type="tel" name="phone2" id="input_20_full" autocomplete="off">
            <label class="form-sub-label" for="input_20_full"> &nbsp;&nbsp;&nbsp; </label></span>
        </div>
      </li>
      <li class="form-line form-line-column" id="id_35">
        <label class="form-label-top" id="label_35" for="input_35"> Ldap ID / Techid username </label>
        <div id="cid_35" class="form-input-wide">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_35" name="ldap2" size="20" />
        </div>
      </li>
      <li class="form-line form-line-column" id="id_17">
        <label class="form-label-top" id="label_17" for="input_17"> Hostel of Residence </label>
        <div id="cid_17" class="form-input-wide">
          <select class="form-dropdown" style="width:150px" id="input_17" name="hostel2">
            <option value="">  </option>
            <option value="Hostel 15C"> Hostel 15C </option>
            <option value="Hostel 15B Floor < 6">
              Hostel 15B Floor
              < 6</option>
                <option value="Hostel 15B Floor > 5"> Hostel 15B Floor > 5 </option>
                <option value="Quarter 23"> Quarter 23 </option>
                <option value="Quarter 24"> Quarter 24 </option>
                <option value="Hostel 4"> Hostel 4 </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column" id="id_32">
        <label class="form-label-top" id="label_32" for="input_32"> Room Number </label>
        <div id="cid_32" class="form-input-wide">
          <input type="text" class=" form-textbox validate[Numeric]" data-type="input-textbox" id="input_32" name="room2" size="20" maxlength="3" />
        </div>
      </li>
      <li id="cid_40" class="form-input-wide">
        <div class="form-header-group">
          <h2 id="header_40" class="form-header">
            Click to edit this text...
          </h2>
          <div id="subHeader_40" class="form-subHeader">
            Team Member 3
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-line-column-clear" id="id_9">
        <label class="form-label-top" id="label_9" for="input_9"> Name </label>
        <div id="cid_9" class="form-input-wide"><span class="form-sub-label-container"><input class="form-textbox" type="text" size="10" name="fname3" id="first_9" />
            <label class="form-sub-label" for="first_9" id="sublabel_first"> First Name </label></span><span class="form-sub-label-container"><input class="form-textbox" type="text" size="15" name="lname3" id="last_9" />
            <label class="form-sub-label" for="last_9" id="sublabel_last"> Last Name </label></span>
        </div>
      </li>
      <li class="form-line form-line-column" id="id_8">
        <label class="form-label-top" id="label_8" for="input_8"> E-mail </label>
        <div id="cid_8" class="form-input-wide"><span class="form-sub-label-container"><input type="email" class=" form-textbox validate[Email]" id="input_8" name="email3" size="30" />
            <label class="form-sub-label" for="input_8"> So that we can get back to you </label></span>
        </div>
      </li>
      <li class="form-line form-line-column" id="id_19">
        <label class="form-label-top" id="label_19" for="input_19"> Phone Number </label>
        <div id="cid_19" class="form-input-wide"><span class="form-sub-label-container"><input data-type="mask-number" class="mask-phone-number form-textbox" type="tel" name="phone3" id="input_19_full" autocomplete="off">
            <label class="form-sub-label" for="input_19_full"> &nbsp;&nbsp;&nbsp; </label></span>
        </div>
      </li>
      <li class="form-line form-line-column" id="id_36">
        <label class="form-label-top" id="label_36" for="input_36"> Ldap ID / Techid username </label>
        <div id="cid_36" class="form-input-wide">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_36" name="ldap3" size="20" />
        </div>
      </li>
      <li class="form-line form-line-column" id="id_22">
        <label class="form-label-top" id="label_22" for="input_22"> Hostel of Residence </label>
        <div id="cid_22" class="form-input-wide">
          <select class="form-dropdown" style="width:150px" id="input_22" name="hostel3">
            <option value="">  </option>
            <option value="Hostel 15C"> Hostel 15C </option>
            <option value="Hostel 15B Floor < 6">
              Hostel 15B Floor
              less than 6</option>
                <option value="Hostel 15B Floor > 5"> Hostel 15B Floor > 5 </option>
                <option value="Quarter 23"> Quarter 23 </option>
                <option value="Quarter 24"> Quarter 24 </option>
                <option value="Hostel 4"> Hostel 4 </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column" id="id_31">
        <label class="form-label-top" id="label_31" for="input_31"> Room Number </label>
        <div id="cid_31" class="form-input-wide">
          <input type="text" class=" form-textbox validate[Numeric]" data-type="input-textbox" id="input_31" name="room3" size="20" maxlength="3" />
        </div>
      </li>
      <li id="cid_41" class="form-input-wide">
        <div class="form-header-group">
          <h2 id="header_41" class="form-header">
            Click to edit this text...
          </h2>
          <div id="subHeader_41" class="form-subHeader">
            Team Member 4
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-line-column-clear" id="id_11">
        <label class="form-label-top" id="label_11" for="input_11"> Name </label>
        <div id="cid_11" class="form-input-wide"><span class="form-sub-label-container"><input class="form-textbox" type="text" size="10" name="fname4" id="first_11" />
            <label class="form-sub-label" for="first_11" id="sublabel_first"> First Name </label></span><span class="form-sub-label-container"><input class="form-textbox" type="text" size="15" name="lname4" id="last_11" />
            <label class="form-sub-label" for="last_11" id="sublabel_last"> Last Name </label></span>
        </div>
      </li>
      <li class="form-line form-line-column" id="id_12">
        <label class="form-label-top" id="label_12" for="input_12"> E-mail </label>
        <div id="cid_12" class="form-input-wide"><span class="form-sub-label-container"><input type="email" class=" form-textbox validate[Email]" id="input_12" name="email4" size="30" />
            <label class="form-sub-label" for="input_12"> So that we can get back to you </label></span>
        </div>
      </li>
      <li class="form-line form-line-column" id="id_18">
        <label class="form-label-top" id="label_18" for="input_18"> Phone Number </label>
        <div id="cid_18" class="form-input-wide"><span class="form-sub-label-container"><input data-type="mask-number" class="mask-phone-number form-textbox" type="tel" name="phone4" id="input_18_full" autocomplete="off">
            <label class="form-sub-label" for="input_18_full"> &nbsp;&nbsp;&nbsp; </label></span>
        </div>
      </li>
      <li class="form-line form-line-column" id="id_37">
        <label class="form-label-top" id="label_37" for="input_37"> Ldap ID / Techid username </label>
        <div id="cid_37" class="form-input-wide">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_37" name="ldap4" size="20" />
        </div>
      </li>
      <li class="form-line form-line-column" id="id_23">
        <label class="form-label-top" id="label_23" for="input_23"> Hostel of Residence </label>
        <div id="cid_23" class="form-input-wide">
          <select class="form-dropdown" style="width:150px" id="input_23" name="hostel4">
            <option value="">  </option>
            <option value="Hostel 15C"> Hostel 15C </option>
            <option value="Hostel 15B Floor < 6">
              Hostel 15B Floor
              < 6</option>
                <option value="Hostel 15B Floor > 5"> Hostel 15B Floor > 5 </option>
                <option value="Quarter 23"> Quarter 23 </option>
                <option value="Quarter 24"> Quarter 24 </option>
                <option value="Hostel 4"> Hostel 4 </option>
          </select>
        </div>
      </li>
      <li class="form-line form-line-column" id="id_30">
        <label class="form-label-top" id="label_30" for="input_30"> Room Number </label>
        <div id="cid_30" class="form-input-wide">
          <input type="text" class=" form-textbox validate[Numeric]" data-type="input-textbox" id="input_30" name="room4" size="20" maxlength="3" />
        </div>
      </li>
      <li id="cid_42" class="form-input-wide">
        <div class="form-header-group">
          <h2 id="header_42" class="form-header">
            Click to edit this text...
          </h2>
          <div id="subHeader_42" class="form-subHeader">
            Team Details
          </div>
        </div>
      </li>
      <li class="form-line form-line-column form-line-column-clear" id="id_24">
        <label class="form-label-top" id="label_24" for="input_24">
          Team Name<span class="form-required">*</span>
        </label>
        <div id="cid_24" class="form-input-wide">
          <input type="text" class=" form-textbox validate[required]" data-type="input-textbox" id="input_24" name="teamname" size="20" />
        </div>
      </li>
      <li class="form-line form-line-column" id="id_25">
        <label class="form-label-top" id="label_25" for="input_25"> Team Motto </label>
        <div id="cid_25" class="form-input-wide">
          <input type="text" class=" form-textbox" data-type="input-textbox" id="input_25" name="team-motto" size="20" />
        </div>
      </li>
      <li class="form-line form-line-column" id="id_27">
        <div id="cid_27" class="form-input-wide">
          <style type="text/css">
            #id_27 { display: none; }
          </style>
        </div>
      </li>
      <li class="form-line" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="text-align:center" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button form-submit-button-carbon_rounded">
              Register now !!
            </button>
          </div>
        </div>
      </li>
      <li style="clear:both">
      </li>
    </ul>
  </div>
</form></body>
</html>