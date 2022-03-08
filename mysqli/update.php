<?php

    require_once("connect.php");
    $db=mysqli_select_db($connection,"low");
    if($db)
    {
        $query="UPDATE users SET name='Hari' WHERE id='1'";
        $query_run=mysqli_query($connection,$query);
            if( $query_run)
        {
            echo '</br>'."Data updated Successfully";
        }
        else{
            echo "</br>"."Error updating DATA".mysqli_error($connection);
        }
        }
        else{
            echo "Error accessing datatbase".mysqli_error($connection);
        }   
    ?>