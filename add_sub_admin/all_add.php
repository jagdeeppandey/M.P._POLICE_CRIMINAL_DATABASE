<?php
    $conn = mysqli_connect("localhost","root","","criminal_database");
    if($conn)
    {
      echo "";
    }
    else{
        echo "Connection Failed";
    }
?>