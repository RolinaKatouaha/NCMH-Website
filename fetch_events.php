<?php
include('connect.php');

// Query to fetch events from your database
$query = "SELECT id, university, eventTitle, eventStartDate, eventStartTime, eventEndDate, eventEndTime FROM events";
$result = mysqli_query($conn, $query);

// Create an array to store events
$events = array();

// Loop through each row in the result set
while ($row = mysqli_fetch_assoc($result)) {
    // Create an array for each event
    $event = array();
    $event['id'] = $row['id'];
    $event['university'] = $row['university'];
    $event['title'] = $row['eventTitle'];
    $event['start'] = $row['eventStartDate'] . 'T' . $row['eventStartTime'];
    $event['end'] = $row['eventEndDate'] . 'T' . $row['eventEndTime'];

    // Add the event to the events array
    $events[] = $event;
}

// Encode the events array into JSON format
echo json_encode($events);

// Close the database connection
mysqli_close($conn);
?>
