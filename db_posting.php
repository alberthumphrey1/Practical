<?php

session_start();
require 'connection.php';

if (isset($_POST['save'])) {
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $location = mysqli_real_escape_string($con, $_POST['location']);

    $query = "INSERT INTO CAT(fname,lname,email,phone,location) VALUES('$fname','$lname','$email','$phone','$location')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        echo "Connection Successful";
//        $SESSION['message'] = "CAT created successfully";
//        header('Location:form.php');
//        exit(0);
    } else {
        echo "Connection Failed";
//        $SESSION['message'] = "CAT NOT created successfully";
//        header('Location:form.php');
//        exit(0);
    }
}
