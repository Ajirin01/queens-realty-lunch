<?php
include('db/connection.php');

$sql = "SELECT p.*, c.name as category, t.name as type
        FROM properties p
        LEFT JOIN categories c ON p.category_id = c.id
        LEFT JOIN types t ON p.type_id = t.id
        ORDER BY p.id DESC
        LIMIT 10";
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
