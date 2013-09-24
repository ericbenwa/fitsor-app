<?php
    // Convert MySQL to JSON
    $username = "ebenoitc_fitsor"; 
    $password = "fitsor";   
    $host = "localhost";
    $database ="ebenoitc_fitsor";
    
    $server = mysql_connect($host, $username, $password);
    $connection = mysql_select_db($database, $server);

    $myquery = "
    SELECT * FROM `exercise_types` ORDER BY created_at DESC 
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