<?php
include('db/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search'])) {
    // Assuming form is submitted using POST method

    // Get form values
    $keyword = $_POST['keyword'];
    $type = $_POST['type'];
    $city = $_POST['city'];
    $bedrooms = $_POST['bedrooms'];
    $garages = $_POST['garages'];
    $bathrooms = $_POST['bathrooms'];
    $minPrice = $_POST['min_price'];

    // Build the SQL query
    $sql = "SELECT p.*, c.name as category, t.name as type
            FROM properties p
            LEFT JOIN categories c ON p.category_id = c.id
            LEFT JOIN types t ON p.type_id = t.id
            WHERE 1";

    // Add conditions based on form values
    if (!empty($keyword)) {
        $sql .= " AND (p.name LIKE '%$keyword%' OR p.description LIKE '%$keyword%')";
    }

    if ($type !== 'All Type') {
        $sql .= " AND t.name = '$type'";
    }

    if ($city !== 'All City') {
        $sql .= " AND p.location LIKE '%$city%'";
    }

    if ($bedrooms !== 'Any') {
        $sql .= " AND p.bedrooms = '$bedrooms'";
    }

    if ($garages !== 'Any') {
        $sql .= " AND p.garages = '$garages'";
    }

    if ($bathrooms !== 'Any') {
        $sql .= " AND p.bathrooms = '$bathrooms'";
    }

    if ($minPrice !== 'Unlimited') {
        // Assuming your price column is numeric, adjust accordingly if needed
        $sql .= " AND p.price >= " . intval($minPrice);
    }

    $result = $conn->query($sql);

    $properties = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $properties[] = $row;
        }
    }
}

$query =  "keywork=". $keyword. "type=". $type. "city=". $city. "bedrooms=". $bedrooms. "garages=". $garages. "bathrooms=". $bathrooms. "min-price=".  $minPrice;

header('location: search-result.php?q='.$query);

$conn->close();
?>
