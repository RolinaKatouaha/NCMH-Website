<?php
require 'connect.php'; // Connect to your database

$sql = "SELECT file_path FROM uploaded_files ORDER BY id DESC";
$result = $conn->query($sql);

$fileUrls = [];

if ($result->num_rows > 0) {
    // Fetch all file paths or URLs
    while($row = $result->fetch_assoc()) {
        $fileUrls[] = $row['file_path']; 
    }
    echo json_encode(['fileUrls' => $fileUrls]);
}

// Close the database connection
$conn->close();
?>

