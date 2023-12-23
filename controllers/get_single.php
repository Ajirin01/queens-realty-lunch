<?php
include('db/connection.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch single property from the database
    $sql = "SELECT * FROM properties WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $property = $result->fetch_assoc();

        // Get associated type
        $typeId = $property['type_id'];
        $typeSql = "SELECT * FROM types WHERE id = $typeId";
        $typeResult = $conn->query($typeSql);
        $type = $typeResult->fetch_assoc();

        // Get associated category
        $categoryId = $property['category_id'];
        $categorySql = "SELECT * FROM categories WHERE id = $categoryId";
        $categoryResult = $conn->query($categorySql);
        $category = $categoryResult->fetch_assoc();
    } else {
        // Handle the case when property is not found
        header("Location: error-page.php");
        exit();
    }
} else {
    // Handle the case when property ID is not provided or invalid
    header("Location: error-page.php");
    exit();
}

$conn->close();
?>

