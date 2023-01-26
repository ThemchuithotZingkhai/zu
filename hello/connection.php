<?php
    $server = "localhost";
    $Email = "root";
    $Password = "";
    $db = "hello";

    $con = mysqli_connect($server,$Email,$Password,$db);

    if($con)
    {
       echo"";
      
    }
    else
    {
        echo"error in connection";
    }
?>
   