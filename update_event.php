<?php
require 'connect.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve event details from POST data
    $id = $_POST['id'];
    $eventTitle = $_POST['eventTitle'];
    $eventStartDate = $_POST['eventStartDate'];
    $eventStartTime = $_POST['eventStartTime'];
    $eventEndDate = $_POST['eventEndDate'];
    $eventEndTime = $_POST['eventEndTime'];

    // Construct the full start and end datetime strings
    $startDateTime = $eventStartDate . ' ' . $eventStartTime;
    $endDateTime = $eventEndDate . ' ' . $eventEndTime;

    // Prepare and execute SQL query to update event details in the database
    $updateQuery = "UPDATE events SET eventTitle=?, eventStartDate=?, eventStartTime=?, eventEndDate=?, eventEndTime=? WHERE id=?";
    $stmt = $conn->prepare($updateQuery);
    $stmt->bind_param("sssssi", $eventTitle, $eventStartDate, $eventStartTime, $eventEndDate, $eventEndTime, $id);
    if ($stmt->execute()) {
        echo "Event updated successfully.";
    } else {
        echo "Error updating event: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Invalid request.";
}
