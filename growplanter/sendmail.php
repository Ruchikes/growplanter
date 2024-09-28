<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "growplanter";


// Create Connection

$con  = mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_connect_errno()){
    echo "Failed to Connect";
}

// echo "Connection Success";


// Submit form data
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email  = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact form` (`fname`, `lname`, `phone`, `email`, `message`)
    VALUES ('$fname', '$lname', '$phone', '$email', '$message')";

    if(mysqli_query($con, $sql)){
        echo "Form Submission Successful 😊";
    }

    else {
        echo "Error" . $sql . ": -" . mysqli_error($con);
    }

    mysqli_close($con);
}

?>