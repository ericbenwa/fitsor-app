<?php
// Create connection
//$con=mysqli_connect("ebenoit.com","ebenoitc_fitness","silly1","ebenoitc_pullups");

mysql_query("SET time_zone = 'US/New_York'");
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
  	@mysql_select_db($database) or die( "Unable to select database");

  	$query = "INSERT INTO exercises VALUES ('3','1','1','1','99',now(),now(),now())";
  	$result = mysql_query($query);
  } else {
  	echo('not working');
  }
?>