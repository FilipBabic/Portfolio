<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
        
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  

        $sql = "select * from Users where user_name = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
    
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>"; 
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['logged_user'] = $username; 
            header("location: /dashboard.php");
        }  
        else{  
            session_start();
            $_SESSION['loggedin'] = "";
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  