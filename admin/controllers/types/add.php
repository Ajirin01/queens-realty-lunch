<?php
include_once('inc/root_dir.php');
include($root_dir . '/database/db_config.php');

if(isset($_POST['add'])){
    // Get data from the request
    $name = $_POST['name'];

    // Insert data into the types table
    $sql = "INSERT INTO types (name) VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        echo "Type added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
