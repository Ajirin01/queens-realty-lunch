<?php
include('db/connection.php');

// Assuming you have a search term from the user input
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

// Use mysqli_real_escape_string to prevent SQL injection
$searchTerm = mysqli_real_escape_string($conn, $searchTerm);

// Modify the SQL query to include the WHERE clause for search
$sql = "SELECT p.*, c.name as category, t.name as type
        FROM properties p
        LEFT JOIN categories c ON p.category_id = c.id
        LEFT JOIN types t ON p.type_id = t.id
        WHERE p.title LIKE '%$searchTerm%'
           OR c.name LIKE '%$searchTerm%'
           OR t.name LIKE '%$searchTerm%'";

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
