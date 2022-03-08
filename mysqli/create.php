<?php
    require_once('connect.php');
    $db=mysqli_select_db($connection,"low");
    if($db)
        {
        
        
        $query= "CREATE TABLE users(id INT(5) AUTO_INCREMENT PRIMARY KEY,name VARCHAR(50),email VARCHAR(50))";
        $query_run=mysqli_query($connection,$query);
        if( $query_run)
        {
            echo 'Table created successfully';
        }
        else{
            echo "</br>"."Error creating table".mysqli_error($connection);
        }
        
        }
        else{
        echo "Error accessing datatbase".mysqli_error($connection);
        }   
        
    ?>