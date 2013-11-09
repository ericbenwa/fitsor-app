<?php
// mysql_query("SET time_zone = 'US/New_York'");

/*
foreach ($_REQUEST as $key => $value)
{
	if ($key == "pullups_total") {
		$pullups_total = $value;
	}
}
echo $pullups_total;
*/

// Settings to connect to the database
$username = "ebenoitc_fitsor";
$password = "fitsor";
$database = "ebenoitc_fitsor";
$localhost = "localhost";

// URL parameters to interact with database
$user_id = $_GET['user_id'];
$device_udid = $_GET['device_udid'];
$exercise_type_id = $_GET['exercise_type_id'];
$repetitions = $_GET['repetitions'];

// Check connection
if (mysql_connect($localhost, $username, $password))
  {
  	@mysql_select_db($database) or die ("Unable to select database");

  	$query = "
		INSERT INTO exercises (user_id, device_udid, exercise_type_id, repetitions, exercise_time, created_at, updated_at)
		SELECT users.id, devices.id, exercise_types.id, $repetitions, NOW(), NOW(), NOW()
		FROM users, devices, exercise_types
		WHERE users.id = $user_id AND devices.id = $device_udid AND exercise_types.id = $exercise_type_id;
    ";

    echo($query);
    echo(mysql_error());
  	$result = mysql_query($query);
  } else {
  	echo('Not Working');
  }
?>