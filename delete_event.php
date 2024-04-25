<?php
require 'connect.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve event ID from POST data
    $id = $_POST['id'];

    // Prepare and execute SQL query to delete event from the database
    $deleteQuery = "DELETE FROM events WHERE id=?";
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo "Event deleted successfully.";
    } else {
        echo "Error deleting event: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Invalid request.";
}
?>
