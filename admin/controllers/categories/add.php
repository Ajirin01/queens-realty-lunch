<?php
include_once('inc/root_dir.php');
include($root_dir . '/database/db_config.php');

if(isset($_POST['add'])){
    // Get data from the request
    $name = $_POST['name'];

    // Insert data into the categories table
    $sql = "INSERT INTO categories (name) VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        echo "Type added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
