<?php
  include_once "config/config.php";
  include_once "models/achievements.php";
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
  
  $userjpg = $val.".jpg";
  if(!file_exists("images/".$userjpg))
  {
    $userjpg = "default.jpg";
  }


?>  
<?php include("include/header.php"); ?>

<form class="form-horizontal" method="post" action="">
<fieldset>

<!-- Form Name -->
<legend> Add Past Achievements</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="event_name">Event Name</label>
  <div class="controls">
    <input id="event_name" name="event_name" type="text" placeholder="Event Name" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="event_Date">Event Date</label>
  <div class="controls">
    <input id="event_Date" name="event_Date" type="text" placeholder="date (DD/MM/YYYY)" class="input-xlarge" required="">
    <p class="help-block">in format DD/MM/YYYY</p>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="position">Position</label>
  <div class="controls">
    <input id="position" name="position" type="text" placeholder="postion" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="even_club">Select Club</label>
  <div class="controls">
    <select id="even_club" name="even_club" class="input-xlarge">
      <option>Krittika</option>
      <option>WnCC</option>
      <option>AeroModelling Club</option>
      <option>Electronics Club</option>
      <option>MnP Club</option>
      <option>Robotics Club</option>
      <option>Technovation</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="desc">Description</label>
  <div class="controls">                     
    <textarea id="desc" name="desc"></textarea>
  </div>
</div>
<!-- Button -->
<div class="control-group">
  <label class="control-label" for="submit">add Achievement </label>
  <div class="controls">
    <button id="submit" name="submit" class="btn btn-success">Button</button>
  </div>
</div>

</fieldset>
</form>
