<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitting Quiz Results</title>
</head>
<body>
<h1>Submitting Quiz Results</h1>
<?php
require_once ("settings.php");
$conn = @mysqli_connect($host,
$user,
$pwd,
$sql_db
);
if (!$conn) {
    echo "<p>Database connection failure</p>";
} else {
 
$firstname = trim($_POST["GivenName"]);
$lastname = trim($_POST["FamilyName"]);
$studentnumber = trim($_POST["StudentID"]);
$datetime = date("Y/m/d"), date("h:i:sa");
$numberattempt += 1
$sql_table = "attempts";
$query = "insert into $sql_table (date/time, first_name, last_name, student_number, number_attempt) values ('$datetime', '$firstname', '$lastname', '$studentnumber', '$numberattempt')";
$result = mysqli_query($conn, $query);

if(!$result) {
    echo "<p class=\"wrong\">Something is wrong with ", $query, "</p>";
} else {
    echo "<p class=\"ok\">Successfully added New Car record</p>";
    mysqli_free_result($result);
}
mysqli_close($conn);
}
?>    
</body>
</html>