<?php
include('db/connection.php');

// Assuming you have page and limit values from user input
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = isset($_GET['limit']) ? $_GET['limit'] : 10;

// Count the total number of records
$countSql = "SELECT COUNT(*) as total FROM properties";
$countResult = $conn->query($countSql);
$totalRecords = $countResult->fetch_assoc()['total'];

// Calculate the total number of pages
$totalPages = ceil($totalRecords / $limit);

// Calculate the offset based on the page and limit
$offset = ($page - 1) * $limit;

// Modify the SQL query to include LIMIT and OFFSET for pagination
$sql = "SELECT p.*, c.name as category, t.name as type
        FROM properties p
        LEFT JOIN categories c ON p.category_id = c.id
        LEFT JOIN types t ON p.type_id = t.id
        LIMIT $limit OFFSET $offset";

$result = $conn->query($sql);

$properties = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $properties[] = $row;
    }
}

// echo json_encode($properties);

$conn->close();
?>

