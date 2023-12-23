<?php
include_once('inc/root_dir.php');
include($root_dir . '/database/db_config.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch single category from the database
    $sql = "SELECT * FROM categories WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $category = $result->fetch_assoc();
    } else {
        // Handle the case when category is not found
        header("Location: error-page.php");
        exit();
    }
} else {
    // Handle the case when category ID is not provided or invalid
    header("Location: error-page.php");
    exit();
}

$conn->close();
?>
