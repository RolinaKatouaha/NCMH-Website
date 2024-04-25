<?php
//--------------------------- This for fetch the monthly report for all the universites in the dbase (Related to drResults.php)  ---------------------------
// In Excel file
header('Content-Type: text/html; charset=utf-8'); // Ensure proper content type for UTF-8
include('connect.php');

$month = isset($_GET['month']) ? $_GET['month'] : null;

$queryParts = [];
$parameters = [];
$parameterTypes = '';

if ($month !== null) {
    $queryParts[] = "monthlyreport.month = ?";
    $parameters[] = $month;
    $parameterTypes .= 'i';
}

$query = "SELECT monthlyreport.month, 
consultation.consultationType, consultation.consultationNumbers, consultation.phoneConsultation, consultation.inPersonConsultation, consultation.consultationUsers,
courses.courseNames, courses.courseNumbers, courses.courseUsers,     
lectures.lectureLabels, lectures.lectureNum, lectures.lectureUsers,
others.otherAct, others.otherUsers,
monthlyreport.university
FROM monthlyreport
LEFT JOIN consultation ON monthlyreport.tableId = consultation.monthId
LEFT JOIN courses ON monthlyreport.tableId = courses.monthId
LEFT JOIN lectures ON monthlyreport.tableId = lectures.monthId
LEFT JOIN others ON monthlyreport.tableId = others.monthId";

if (!empty($queryParts)) {
    $query .= " WHERE " . implode(' AND ', $queryParts);
}

// Add ORDER BY clause to sort by university name and then by month
$query .= " ORDER BY monthlyreport.university ASC, monthlyreport.month ASC";

$stmt = $conn->prepare($query);

if (!$stmt) {
    echo "Error preparing statement: " . htmlspecialchars($conn->error);
    exit;
}

if ($parameterTypes && !empty($parameters)) {
    $stmt->bind_param($parameterTypes, ...$parameters);
}

if ($stmt->execute()) {
    $result = $stmt->get_result();
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    if (!empty($rows)) {
        echo "<style>table { width: 100%; border-collapse: collapse; } th, td { border: 1px solid #ddd; padding: 8px; } th { background-color: #f2f2f2; }</style>";

        // Group data by university
        $universities = [];
        foreach ($rows as $row) {
            $universities[$row['university']][] = $row;
        }

        foreach ($universities as $universityName => $data) {
            // echo "<h2>" . htmlspecialchars($universityName) . "</h2>";


            echo "<table>";
            echo "<thead><tr><th colspan = '4'>" . htmlspecialchars($universityName) . "</th></tr></thead>";
            
            foreach ($data as $row) {
                if (isset($row['consultationNumbers']) && $row['consultationNumbers'] == 0){
                    echo "<tr><th>الشهر</th><th>أنواع الاستشارات</th><th> عدد الاستشارات الهاتفية</th> <th> عدد الاستشارات الحضورية</th><th>عدد المستفيدين</th></tr><tbody>";
                    echo "<tr><td>" . htmlspecialchars($row['month']) . "</td><td>" . htmlspecialchars($row['consultationType'] ?? 'لا يوجد') . "</td><td>" . htmlspecialchars($row['phoneConsultation'] ?? '0') . "</td><td>" . htmlspecialchars($row['inPersonConsultation'] ?? '0') .  "</td><td>" . htmlspecialchars($row['consultationUsers'] ?? '0') . "</td></tr>";
                }
                else{
                    echo "<tr><th>الشهر</th><th>أنواع الاستشارات</th><th>عدد الاستشارات</th><th>عدد المستفيدين</th></tr><tbody>";
                    echo "<tr><td>" . htmlspecialchars($row['month']) . "</td><td>" . htmlspecialchars($row['consultationType'] ?? 'لا يوجد') . "</td><td>" . htmlspecialchars($row['consultationNumbers'] ?? '0') . "</td><td>" . htmlspecialchars($row['consultationUsers'] ?? '0') . "</td></tr>";
                }
            }
            echo "</tbody></table><br>";

            echo "<table>";
            // echo "<thead><tr><th colspan = '4'>" . htmlspecialchars($universityName) . "</th></tr></thead>";
            echo "<tr><th>الشهر</th><th> عدد الدروات</th><th>أسماء الدورات</th><th>عدد المستفيدين</th></tr><tbody>";
            foreach ($data as $row) {
                echo "<tr><td>" . htmlspecialchars($row['month']) . "</td><td>" . htmlspecialchars($row['courseNumbers'] ?? 'لا يوجد') . "</td><td>" . htmlspecialchars($row['courseNames'] ?? '0') . "</td><td>" . htmlspecialchars($row['courseUsers'] ?? '0') . "</td></tr>";
            }
            echo "</tbody></table><br>";

            echo "<table>";
            //echo "<thead><tr><th colspan = '4'>" . htmlspecialchars($universityName) . "</th></tr></thead>";
            echo "<tr><th>الشهر</th><th> عدد المحاضرات</th><th>عناوين المحاضرات </th><th>عدد المستفيدين</th></tr><tbody>";
            foreach ($data as $row) {
                echo "<tr><td>" . htmlspecialchars($row['month']) . "</td><td>" . htmlspecialchars($row['lectureLabels'] ?? 'لا يوجد') . "</td><td>" . htmlspecialchars($row['lectureNum'] ?? '0') . "</td><td>" . htmlspecialchars($row['lectureUsers'] ?? '0') . "</td></tr>";
            }
            echo "</tbody></table><br>";

            echo "<table>";
            // echo "<thead><tr><th colspan = '4'>" . htmlspecialchars($universityName) . "</th></tr></thead>";
            echo "<tr><th>الشهر</th><th> الأنشطة </th><th>عدد المستفيدين</th></tr><tbody>";
            foreach ($data as $row) {
                echo "<tr><td>" . htmlspecialchars($row['month']) . "</td><td>" . htmlspecialchars($row['otherAct'] ?? 'لا يوجد') . "</td><td>" . htmlspecialchars($row['otherUsers'] ?? '0') . "</td></tr>";
            }
            echo "</tbody></table><br>";
        }
    } else {
        echo "No data available for the selected month.";
    }
} else {
    echo "Error executing statement: " . htmlspecialchars($stmt->error);
}

$stmt->close();
$conn->close();
