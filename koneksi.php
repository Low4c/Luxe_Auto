<?php
    $con = mysqli_connect("localhost","root","","luxe_auto" );
    
    //Check Connection
    if (mysqli_connect_errno()) {
        echo "Connection failed: " . mysqli_connect_error();
        exit();
    }
?>