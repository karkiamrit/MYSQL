<?php
      require_once('connect.php');
      $db=mysqli_select_db($connection,"low");
      if($db)  
        {
            $query= "INSERT INTO users(id,name,email) VALUES('','Binayak Kuikel','binbahadur@gmail.com')";
            $query_run=mysqli_query($connection,$query);
            if( $query_run)
        {
            echo '</br>'."Data Inserted Successfully";
        }
        else{
            echo "</br>"."Error Inserting DATA".mysqli_error($connection);
        }
        }
        else{
            echo "Error accessing datatbase".mysqli_error($connection);
        }   
    ?>