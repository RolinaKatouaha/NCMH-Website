<?php
//--------------------------- This for insert the monthly report to the dbase (Related to orgNew.php)  ---------------------------

header('Content-Type: application/json');
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $university2 = $_POST['university2'] ?? null;
    $month = $_POST['month'] ?? null;
    $actTypes = $_POST['actType'] ?? []; // Assuming actType is an array
    $chckType = implode(",", $actTypes);

    $consultationType = $_POST['consultationType'] ?? null;
$consultationNumbers = $_POST['consultationNumbers'] ?? 0; // This assumes consultationNumbers is a singular value, not an array
$phoneConsultation = $_POST['phoneConsultation'] ?? 0;
$inPersonConsultation = $_POST['inPersonConsultation'] ?? 0;
$consultationUsers = $_POST['consultationUsers'] ?? 0;

    $courseNumbers = $_POST['courseNumbers'] ?? 0;
    $courseNames = $_POST['courseNames'] ?? '';
    $courseUsers = $_POST['courseUsers'] ?? 0;

    $lectureNum = $_POST['lectureNum'] ?? 0;
    $lectureLabels = $_POST['lectureLabels'] ?? '';
    $lectureUsers = $_POST['lectureUsers'] ?? 0;

    $otherAct = $_POST['otherAct'] ?? '';
    $otherUsers = $_POST['otherUsers'] ?? 0;
    $errorOccurred = false;


        // Prepare the INSERT statement for monthlyreport table
        $monthlyReportStmt = mysqli_prepare($conn, "INSERT INTO monthlyreport (month, actType, university) VALUES (?, ?, ?)");

        if ($monthlyReportStmt) {
            // Bind parameters
            mysqli_stmt_bind_param($monthlyReportStmt, "iss", $month, $chckType, $university2);

            if (mysqli_stmt_execute($monthlyReportStmt)) {
                // Retrieve the last inserted ID for the monthlyreport table
                $tableId = mysqli_insert_id($conn);
                mysqli_stmt_close($monthlyReportStmt);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to execute statement for monthly report.']);
                exit;
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to prepare statement for monthly report.']);
            exit;
        }
    // There are a three tables on the dbase each insertion is based on the user selection
    // For example: if the user select consultation, the insert will be into consultation table 
    foreach ($actTypes as $type) {
        switch ($type) {
            case "1":
                $consultationStmt = $conn->prepare("INSERT INTO consultation (consultationType, consultationNumbers, inPersonConsultation, phoneConsultation, consultationUsers, monthId) VALUES (?, ?, ?, ?, ?, ?)");
                if ($consultationStmt) {
                    $consultationStmt->bind_param("siiiii", $consultationType, $consultationNumbers, $inPersonConsultation, $phoneConsultation, $consultationUsers, $tableId);
                    if (!$consultationStmt->execute()) {
                        $errorOccurred = true;
                    }
                    $consultationStmt->close();
                } else {
                    $errorOccurred = true;
                }
                break;
            case "2":
                $coursesStmt = $conn->prepare("INSERT INTO courses (courseNumbers, courseNames, courseUsers, monthId) VALUES (?, ?, ?, ?)");
                if ($coursesStmt) {
                    $coursesStmt->bind_param("isii", $courseNumbers, $courseNames, $courseUsers, $tableId);
                    if (!$coursesStmt->execute()) {
                        $errorOccurred = true;
                    }
                    $coursesStmt->close();
                } else {
                    $errorOccurred = true;
                }
                break;
            case "3":
                $lectureStmt = $conn->prepare("INSERT INTO lectures (lectureNum, lectureLabels, lectureUsers, monthId) VALUES (?, ?, ?, ?)");
                if ($lectureStmt) {
                    $lectureStmt->bind_param("isii", $lectureNum, $lectureLabels, $lectureUsers, $tableId);
                    if (!$lectureStmt->execute()) {
                        $errorOccurred = true;
                    }
                    $lectureStmt->close();
                } else {
                    $errorOccurred = true;
                }
                break;
            case "4":
                $otherStmt = $conn->prepare("INSERT INTO others (otherAct, otherUsers, monthId) VALUES (?, ?, ?)");
                if ($otherStmt) {
                    $otherStmt->bind_param("sii", $otherAct, $otherUsers, $tableId);
                    if (!$otherStmt->execute()) {
                        $errorOccurred = true;
                    }
                    $otherStmt->close();
                } else {
                    $errorOccurred = true;
                }
                break;
        }

        if ($errorOccurred) {
            break; // Exit the loop if any error occurred
        }
    }

    $conn->close();

    if ($errorOccurred) {
        echo json_encode(['status' => 'error', 'message' => 'An error occurred during processing.']);
    } else {
        echo json_encode(['status' => 'success']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Form not submitted correctly.']);
}
