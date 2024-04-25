<?php
//--------------------------- This for insert the centers data  ---------------------------

include('connect.php');

//response = ['status' => 'error', 'message' => 'Initial error.']; // Default response

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $university = $_POST['university'] ?? null;
    $saType = $_POST['saType'] ?? null;
    $therpistNumber = $_POST['therpistNumber'] ?? 0;
    $socialNumber = $_POST['socialNumber'] ?? 0;

    $stmt = $conn->prepare("INSERT INTO center (university, saType, therpistNumber, socialNumber) VALUES (?, ?, ?, ?)");

    if ($stmt === false) {
        $response = ['status' => 'error', 'message' => 'Failed to prepare statement.'];
    } else {
        $stmt->bind_param("iiii", $university, $saType, $therpistNumber, $socialNumber);

        if ($stmt->execute()) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to insert.']);
        }

        $stmt->close();
    }

    $conn->close();
}
//echo json_encode($response);
