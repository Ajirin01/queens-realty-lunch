<?php
include_once('inc/root_dir.php');
include($root_dir . '/database/db_config.php');

// Fetch all types from the types table
$sql = "SELECT * FROM types";
$result = $conn->query($sql);

$types = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $types[] = $row;
    }
}

// echo json_encode($types);

$conn->close();
?>
