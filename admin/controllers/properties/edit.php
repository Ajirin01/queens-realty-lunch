<?php
include_once('inc/root_dir.php');
include($root_dir . '/database/db_config.php');

if (isset($_POST['update'])) {
    // Get data from the request
    $id = $_POST['property_id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $category_id = $_POST['category_id'];
    $type_id = $_POST['type_id'];
    $size = $_POST['size'];
    $bedrooms = $_POST['bedrooms'];
    $bathrooms = $_POST['bathrooms'];
    $garages = $_POST['garages'];
    $status = $_POST['status'];
    $amenities = $_POST['amenities'];
    $location = $_POST['location'];
    $description = $_POST['description'];

    // Update data in the database
    $sql = "UPDATE properties 
            SET title = '$title', 
                price = $price, 
                category_id = $category_id, 
                type_id = $type_id, 
                size = $size, 
                bedrooms = $bedrooms, 
                bathrooms = $bathrooms, 
                garages = $garages, 
                status = '$status', 
                amenities = '$amenities', 
                location = '$location', 
                description = '$description'
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Property information updated successfully";

        // Handle photo upload
        if (!empty($_FILES['photos']['name'][0])) {
            // Ensure the 'photos' directory exists in your project
            $uploadDir = $root_dir. '/uploads/photos/';
            $uploadedPhotos = array();

            // Iterate through each uploaded photo
            foreach ($_FILES['photos']['name'] as $key => $photoName) {
                $tmpFilePath = $_FILES['photos']['tmp_name'][$key];
                if ($tmpFilePath != "") {
                    // Generate a unique filename to avoid overwriting existing files
                    $uniqueFilename = uniqid() . '_' . $photoName;
                    $targetFilePath = $uploadDir . $uniqueFilename;

                    // Move the uploaded file to the target directory
                    if (move_uploaded_file($tmpFilePath, $targetFilePath)) {
                        // Store the unique filename in the array
                        $uploadedPhotos[] = $uniqueFilename;
                    } else {
                        echo "Error uploading file: $photoName";
                    }
                }
            }

            // JSON encode the array of photo filenames
            $jsonEncodedPhotos = json_encode($uploadedPhotos);

            // Update the property record in the database with the JSON-encoded photos
            $updatePhotosSql = "UPDATE properties SET photos = '$jsonEncodedPhotos' WHERE id = $id";
            $conn->query($updatePhotosSql);
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
