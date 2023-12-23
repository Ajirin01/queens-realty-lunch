<?php
include_once('inc/root_dir.php');
include($root_dir . '/database/db_config.php');

// Fetch all categories from the categories table
$sql = "SELECT * FROM categories";
$result = $conn->query($sql);

$categories = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
}

// echo json_encode($categories);

$conn->close();
?>
