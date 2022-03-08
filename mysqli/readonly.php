<?php

    require_once("connect.php");
    $db=mysqli_select_db($connection,"low");
    if($db)
    {
        $query="SELECT id,name,email from users WHERE id=1";
        $query_run=mysqli_query($connection,$query);
        if( $query_run)
        {
            echo "</br>".'Table accessed successfully';
            if(mysqli_num_rows($query_run)>0)
            {
                while($row=mysqli_fetch_assoc($query_run))
                {
                    echo "</br>"."id=$row[id]";
                    echo "</br>"."name=$row[name]";
                    echo "</br>"."email=$row[email]";
                }
            }
        }
        else{
            echo "</br>"."Access Failure".mysqli_error($connection);
        }
    }
     else{
        echo "</br>"."Error accessing datatbase".mysqli_error($connection);
        }   
?>