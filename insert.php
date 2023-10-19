<!DOCTYPE html>
<html>
    <body>
        <h1>Insert data into our table</h1>
    
        <center>
        <?php
        // Call the database file into the current file
        require "dbconnect.php";

        // This will pick data from the user
        // $firstname = $_REQUEST['first_name'];
        // $lastname = $_REQUEST['last_name'];
        // $gender = $_REQUEST['gender'];
        // $address = $_REQUEST['address'];

        // Insert data into the table
        // $sql = "INSERT INTO staff (first_name, last_name, gender, address) VALUES ('$firstname', '$lastname', '$gender', '$address')";
        $sql = "INSERT INTO staff (first_name, last_name, gender, address) VALUES ('job', 'Alila', 'male', '123 Main St')";

        //
        //if ($conn->query($sql) === true) {
           // echo "Records inserted successfully";
        //} else {
        //    echo "Error: " . $conn->error;
       // }
        

        // Close the database connection when you're done with it
        //$conn->close();
        ?>
        </center>
    </body>
</html>
