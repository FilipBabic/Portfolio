<?php 
    include ('connection.php');
    
    $visitor_ip = $_SERVER['REMOTE_ADDR'];
    
    $sql = "SELECT * FROM track_visitors WHERE ip_address='$visitor_ip';";
    $result = mysqli_query($con, $sql);

    if(!$result){
        die('database query error<br>'.$query);
    };
    
    $total_visitors=mysqli_num_rows($result);
    if($total_visitors<1){
        $sql = "INSERT INTO track_visitors(ip_address,visit_date) VALUES ('$visitor_ip',now());";
        $result = mysqli_query($con, $sql);
    };

    $sql = "SELECT * FROM track_visitors;";
    $result = mysqli_query($con, $sql);

    if(!$result){
        die('database query error<br>'.$query);
    };
    
    $total_visitors=mysqli_num_rows($result);
?>