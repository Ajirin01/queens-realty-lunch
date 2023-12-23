<?php
include_once('../../inc/root_dir.php');
include($root_dir . '/database/db_config.php');

if(isset($_POST['delete'])){
    // Get data from the request
    $id = $_POST['id'];

    // Delete the type from the properties table
    $sql = "DELETE FROM properties WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Category deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
