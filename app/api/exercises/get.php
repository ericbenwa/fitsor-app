<?php
    // Convert MySQL to JSON
    $username = "ebenoitc_fitsor"; 
    $password = "fitsor";   
    $host = "localhost";
    $database ="ebenoitc_fitsor";

    // URL parameters to interact with database
    $user_id = $_GET['user_id'];
    $device_udid = $_GET['device_udid'];
    $exercise_type_id = $_GET['exercise_type_id'];
    $repetitions = $_GET['repetitions'];
    
    $server = mysql_connect($host, $username, $password);
    $connection = mysql_select_db($database, $server);

    $myquery = "
    SELECT * FROM `exercises` WHERE user_id=$user_id ORDER BY created_at DESC 
    ";
    $query = mysql_query($myquery);
    
    if ( ! $myquery ) {
        echo mysql_error();
        die;
    }
    
    $data = array();
    
    for ($x = 0; $x < mysql_num_rows($query); $x++) {
        $data[] = mysql_fetch_assoc($query);
    }
    
    echo json_encode($data);     
     
    mysql_close($server);
?>