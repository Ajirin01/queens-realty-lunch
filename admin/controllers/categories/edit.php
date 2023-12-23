<?php
include_once('inc/root_dir.php');
include($root_dir . '/database/db_config.php');

if(isset($_POST['update'])){
    // Get data from the request
    $id = $_POST['id'];
    $name = $_POST['name'];

    // Update data in the categories table
    $sql = "UPDATE categories SET name = '$name' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Type updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
