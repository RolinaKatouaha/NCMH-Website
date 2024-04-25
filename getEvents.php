<?php
// Include database connection or configuration file
include 'dbcon.php';

// Fetch events from the database
$sql = "SELECT * FROM events";
$result = $conn->query($sql);

// Check if there are any events
if ($result->num_rows > 0) {
    $events = array();

    // Fetch each row and add it to the events array
    while ($row = $result->fetch_assoc()) {
        $events[] = array(
            'id' => $row['id'],
            'title' => $row['title'],
            'start' => $row['start'],
            'end' => $row['end'],
            'hour' => $row['hour']
        );
    }

    // Encode events array into JSON format
    echo json_encode($events);
} else {
    // No events found in the database
    echo json_encode(array());
}

// Close database connection
$conn->close();
?>
