<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="COS10026: Attempts page" />
  <meta name="keywords" content="HTML, Forms" />
  <meta name="author" content="Md Shamsul Adnan" />
  <link href="styles/style.css" rel="stylesheet"/>
  
  <!--Reference to external responsive CSS File-->
  <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>

  <title>Manage Attempts</title>
</head>
<body>
  
  <?php include 'header.inc'; ?>
	<div id="content">

  <?php
  require_once("settings.php"); //connection info

  $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

  //checks if connection is successful
  if(!$conn)
  {
      //Displays an error message
      echo "<p>Database connection faliure</p>"; //not in production script
  }
  else 
  {
    echo "
  <h4>
    This page is meant for queries on attempts.
  </h4>
  <form action=\"manage.php\" method=\"get\" >
    <fieldset>
      <legend class=\"liststudentattempt\">
        <h4>List Particular Student's Attempt</h4>
      </legend>
      <p><label for=\"listattempt\">Student ID/Name </label> 
        <input type=\"text\" name=\"listattempt\" id=\"listattempt\" pattern=\"[a-zA-Z0-9 ]+\" size=\"15\"/>
      </p>
      <input type= \"submit\" value=\"Check\"/>
    </fieldset>


    <fieldset class=\"deleteattempt\">
      <legend>
        <h4>Delete All Attempts of a Student</h4>
      </legend>
      <p><label for=\"deleteattempt\">Student ID </label> 
        <input type=\"text\" name=\"deleteattempt\" id=\"deleteattempt\" pattern=\"\d{7,10}\" size=\"10\"/>
      </p>
      <input type= \"submit\" value=\"Check\"/>
	</fieldset>
	

  
	<fieldset class=\"changescore\">
	  <legend>
		<h4>Changing Score for Quiz Attempt</h4>
	  </legend>
	  
	  <p><label for=\"changescoreID\">Student ID </label> 
        <input type=\"text\" name=\"changescoreID\" id=\"changescoreID\" pattern=\"\d{7,10}\" size=\"10\"/>
      </p>
	  <p><label for=\"changescorenumber\">Attempt Number </label> 
        <input type=\"text\" name=\"changescorenumber\" id=\"changescorenumber\" pattern=\"\d{1}\" size=\"1\" maxlength=\"1\"/>
      </p>
	  <p><label for=\"changescorevalue\">Change Score </label> 
        <input type=\"text\" name=\"changescorevalue\" id=\"changescorevalue\"  size=\"3\" maxlength=\"3\"/>
      </p>
      <input type= \"submit\" value=\"Change\"/>
	</fieldset>


	<fieldset class=\"querymultichoice\">
	  <legend>
		<h4>List Attempts</h4>
	  </legend>
      <p><label for=\"querymultichoice\">Which list do you want to check?<br></label> 
        <select name=\"querymultichoice\" id=\"querymultichoice\">
          <option value=\"\" selected>Please Select</option>
          <option value=\"a\">List all attempts</option>			
          <option value=\"b\">List all who got 100% on first attempt</option>
          <option value=\"c\">List all who got less than 50% on second attempt</option>
        </select>
      </p>
      <input type= \"submit\" value=\"Check\"/>
	</fieldset>
	
	<fieldset class=\"sort\">
	 <legend>
		<h4>Sort Attempts</h4>
	 </legend>
	 <p><label for=\"sortfield\">Which field would you like to sort by?<br></label>
		<select name=\"sortfield\" id=\"sortfield\">
			<option value=\"\" selected>Please Select</option>
			<option value=\"attempt_id\">Attempt ID</option>			
			<option value=\"date_time\">Date Time</option>
			<option value=\"firstname\">First name</option>
			<option value=\"lastname\">Last name</option>			
			<option value=\"studentid\">Student ID</option>
			<option value=\"attemptnumber\">Attempt number</option>
			<option value=\"score\">Score</option>
		</select>
	 </p>
	 <p><label for=\"sortorder\">How would you like to sort by?<br></label>
		<select name=\"sortorder\" id=\"sortorder\">
			<option value=\"\" selected>Please Select</option>
			<option value=\"a\">Ascending order</option>			
			<option value=\"b\">Descending order</option>
		</select>
	 </p>
   <input type= \"submit\" value=\"Check\"/>
	</fieldset><br><br>
  
  </form>";
  }
  ?>
</div>
</div>

<?php include 'footer.inc';?>

</body>
</html>