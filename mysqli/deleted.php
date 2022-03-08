<?php

    require_once("connect.php");
    $db=mysqli_select_db($connection,"low");
    if($db)
    {
        $query="DELETE FROM users WHERE id='5'";
        $query_run=mysqli_query($connection,$query);
            if( $query_run)
        {
            echo '</br>'."Data deleted Successfully";
        }
        else{
            echo "</br>"."Error deleting DATA".mysqli_error($connection);
        }
        }
        else{
            echo "Error accessing datatbase".mysqli_error($connection);
        }   
    ?>