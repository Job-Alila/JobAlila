<?php
// Establish a database connection
$conn = mysqli_connect("localhost", "root", "", "campus");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Your database operations here...

// Close the connection when you're done
mysqli_close($conn);

?>
