<?php

    define("DB_HOST", "localhost");
    define("DB_USER", "chinhha");
    define("DB_PASSWORD", "96405cong");
    define("DB_DATABASE", "valuation_vision_demo");

    // Create connection
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    
    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    echo "Connected successfully (".$db->host_info.")";