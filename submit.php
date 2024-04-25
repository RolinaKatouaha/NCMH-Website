<?php
//--------------------------- This for insert the report and activities data  ---------------------------

header('Content-Type: application/json');
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //---------------------------------------------------------First table--------------------------------------------------------------------
    $university = $_POST['university'];
    $supervisor = "المركز الوطني لتعزيز الصحة النفسية";
    $initiativeLeader = "د.بسمة حلمي";
    $date = $_POST['date'];
    $studentNumber = $_POST['stuNum'];
    $groupLeader = $_POST['name'];
    $activityCount = $_POST['actNum'];

    // Insert into reportable1
    $stmt = $conn->prepare("INSERT INTO reportable1 (university, supervisor, initiativeLeader, date, studentNumber, groupLeader, activityCount) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssisi", $university, $supervisor, $initiativeLeader, $date, $studentNumber, $groupLeader, $activityCount);

    if ($stmt->execute()) {
        $reportable1Id = $conn->insert_id;
        $stmt->close();

        //---------------------------------------------------------Second table--------------------------------------------------------------------
        if (isset($_POST['actType']) && is_array($_POST['actType']) && count($_POST['actType']) > 0) {
            $actTypeArray = $_POST['actType'] ?? 0;
            $actNameArray = $_POST['actName'] ?? 0;
            $actDateArray = $_POST['actDate'] ?? 0;
            $UsersCountArray = $_POST['UsersCount'] ?? 0;
            $actPartiArray = $_POST['actParti'] ?? 0;

            // Prepare the insertion query for activities
            $stmtActivity = $conn->prepare("INSERT INTO activites (reportId, actType, actName, actDate, UsersCount, actParti) VALUES (?, ?, ?, ?, ?, ?)");

            for ($i = 0; $i < count($actTypeArray); $i++) {
                $stmtActivity->bind_param("iissis", $reportable1Id, $actTypeArray[$i], $actNameArray[$i], $actDateArray[$i], $UsersCountArray[$i], $actPartiArray[$i]);
                if (!$stmtActivity->execute()) {
                    echo json_encode(['status' => 'error', 'message' => 'Failed to insert activity data.']);
                    $stmtActivity->close();
                    $conn->close();
                    exit();
                }
            }
            $stmtActivity->close();
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Activity data is missing or incorrect.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to insert reportable1 data.']);
    }


    $conn->close();
}
