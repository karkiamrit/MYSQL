<?php
        require_once("connect.php");
        $query="CREATE DATABASE IF NOT EXISTS low";
        $db=mysqli_query($connection,$query);
        if($db)
        {
            echo"</br>"."Database created successfully";
        }
        else{
            echo "Error".mysqli_error($connection);
        }
    ?> 