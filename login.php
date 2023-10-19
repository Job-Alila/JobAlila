<?php
session_start();

include "dbconnect.php";
$uname=$_REQUEST['uname'];
$pwd=$_REQUEST['pwd'];
//to confirm our variables

if(empty($uname)){
    header("Location:index.php?error=Username is required!");
    exit();
}
else if
    (empty($pwd)){
        header("Location: index.php?error=Fill your password.");

        exit();
    }
    $conn = mysqli_connect("localhost", "root", "", "campus");

    // Insert data
    $sql = "INSERT INTO users (uname, pwd) VALUES ('user', 'user123')";
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $conn->error;
    }
    
    // Close the connection
    mysqli_close($conn);
    
?>