<?php
$con = mysqli_connect ("localhost", "root", "", "CAT");

if (!$con){
    die('Connection Failed'.mysqli_connect_error());
//    echo "Connection Successful";
}

?>