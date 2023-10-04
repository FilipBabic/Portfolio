<?php      
    $host = "sql104.infinityfree.com";  
    $user = "if0_35149826";  
    $password = 'XaWDgM5l5ufac8';  
    $db_name = "if0_35149826_myPortfolio";  
    
    $con = mysqli_connect($host, $user, $password, $db_name);  
    mysqli_set_charset($con, "utf8");
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
?>