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

$username = "ebenoitc_fitsor";
$password = "fitsor";
$database = "ebenoitc_fitsor";
$localhost = "localhost";

// Check connection
if (mysql_connect($localhost, $username, $password))
  {
  	@mysql_select_db($database) or die("Unable to select database");

  	$query = "
      INSERT INTO exercises (id, user_id, device_udid, exercise_type_id, repetitions, exercise_time, created_at, updated_at) VALUES (3, SELECT(id FROM users WHERE id=1), SELECT(id FROM devices WHERE id=1), SELECT(id FROM exercise_types WHERE id=1), 209, now(), now(),now());
    ";

          // INSERT INTO exercises 
      // VALUES 
      // (NULL, 1, 1, 1, '89', now(), now(), now())
    echo($query);
    echo(mysql_error());
  	$result = mysql_query($query);
  } else {
  	echo('not working');
  }
?>