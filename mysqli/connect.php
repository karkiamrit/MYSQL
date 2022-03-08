<?php
//paramaters
    $servername="localhost";
    $username="root";
    $password="";
    //create connection
    $connection=mysqli_connect($servername,$username,$password);
    //check connection
    if(!$connection)
    {
        die("Connection failed:".mysqli_connect_error());
    }
    else{
        echo "connected succesfully";
    }
?>