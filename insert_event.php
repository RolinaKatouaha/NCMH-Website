<?php
require 'connect.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve event details from POST data
    $university = $_POST['university'] ?? 'لا يوجد';
    $eventTitle = $_POST['eventTitle'];
    $eventStartDate = $_POST['eventStartDate'];
    $eventStartTime = $_POST['eventStartTime'];
    $eventEndDate = $_POST['eventEndDate'];
    $eventEndTime = $_POST['eventEndTime'];

    // Construct the full start and end datetime strings
    $startDateTime = $eventStartDate . ' ' . $eventStartTime;
    $endDateTime = $eventEndDate . ' ' . $eventEndTime;

    // Prepare and execute SQL query to insert event details into the database
    $insertQuery = "INSERT INTO events (university, eventTitle, eventStartDate, eventStartTime, eventEndDate, eventEndTime) 
                    VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("ssssss", $university, $eventTitle, $eventStartDate, $eventStartTime, $eventEndDate, $eventEndTime);
    if ($stmt->execute()) {
        echo "Event added successfully.";
    } else {
        echo "Error adding event: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Invalid request.";
}
