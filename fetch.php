<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<title>Report Page</title>
<style>
    body, table {
        direction: rtl;
        text-align: right;
    }
</style>
</head>
<body>

<?php
include('connect.php'); // Include your connection script if not already included

// Query to fetch distinct reportIds from your first table 'reportable1'
$queryReportIds = "SELECT DISTINCT reportId FROM reportable1";
$resultReportIds = $conn->query($queryReportIds);

// Iterate over each reportId
while ($rowReportIds = $resultReportIds->fetch_assoc()) {
    $reportId = $rowReportIds['reportId'];

    // Query to fetch data from your first table 'reportable1' for the current reportId
    $query1 = "SELECT * FROM reportable1 WHERE reportId = $reportId";
    $result1 = $conn->query($query1);

    if ($result1 && $result1->num_rows > 0) {
        // Fetching the reportable1 data
        $row1 = $result1->fetch_assoc();

        // Display reportable1 data
        echo "<h2>نظرة تفصيلية للتقرير رقم: $reportId</h2>";
        echo "<table border='1'>
            <tr>
                <th>الجامعة</th>
                <th>المشرف على المبادرة</th>
                <th>مسؤول المبادرة</th>
                <th>تاريخ التقرير</th>
                <th>عدد الطلاب</th>
                <th>رئيس المجموعة</th>
                <th>عدد الأنشطة</th>
            </tr>
            <tr>
                <td>{$row1['university']}</td>
                <td>{$row1['supervisor']}</td>
                <td>{$row1['initiativeLeader']}</td>
                <td>{$row1['date']}</td>
                <td>{$row1['studentNumber']}</td>
                <td>{$row1['groupLeader']}</td>
                <td>{$row1['activityCount']}</td>
            </tr>
        </table>";

        // Query to fetch data from your second table 'activities' for the current reportId
        if ($reportId !== null) {
            $query2 = "SELECT * FROM activites WHERE reportId = $reportId";
            $result2 = $conn->query($query2);

            // Check if we have activity results
            if ($result2 && $result2->num_rows > 0) {
                // Display activities data
                echo "<h2>تفاصيل الأنشطة</h2>";
                echo "<table border='1'>
                <tr>
                    <th>المحور</th>
                    <th>الاسم</th>
                    <th>التاريخ</th>
                    <th>عدد المستفيدين (إن وجد)</th>
                    <th>رابط البحث/الجهات المشاركة</th>
                </tr>";
                
                while($row2 = $result2->fetch_assoc()) {
                    // Determine the named counterpart of the actType for each row
                    if ($row2["actType"] == "1") {
                        $actNames = "بناء الشخصية المتوازنة للطالب الجامعي";
                    } elseif ($row2["actType"] == "2") {
                        $actNames = "تعزيز مفاهيم الصحة النفسية";
                    } elseif ($row2["actType"] == "3") {
                        $actNames = "مركز العناية بالطالب";
                    } elseif ($row2["actType"] == "4") {
                        $actNames = "مبادرات مجتمعية بمجال الصحة النفسية";
                    } elseif ($row2["actType"] == "5") {
                        $actNames = "النشاط العلمي والبحثي بمجال الصحة النفسية";
                    } elseif ($row2["actType"] == "6") {
                        $actNames = "الاهتمام بعوامل الخطورة داخل البيئة الجامعية";
                    } else {
                        $actNames = "نوع غير معروف";
                    }

                    if ($row2["actType"] == "5") {
                        // Output the row with the named activity type
                    echo "<tr>
                    <td>{$actNames}</td> <!-- Display named activity type -->
                    <td>{$row2['actName']}</td>
                    <td>{$row2['actDate']}</td>
                    <td>{$row2['actParti']}</td>
                </tr>";
                
                    }
                    else{
                        // Output the row with the named activity type
                    echo "<tr>
                    <td>{$actNames}</td> <!-- Display named activity type -->
                    <td>{$row2['actName']}</td>
                    <td>{$row2['actDate']}</td>
                    <td>{$row2['UsersCount']}</td>
                    <td>{$row2['actParti']}</td>
                </tr>";

                    }
                }
                
                echo "</table>";
            }
            } else {
                // If no reportId is available, you might want to handle this case, e.g., by displaying a message
                echo "لا توجد نشاطات لهذا التقرير";
            }
            echo "<hr>";
    } else {
        // If no reportable1 data found for the current reportId
        echo "لا يوجد تقرير لهذا الرقم: $reportId.";
    }
}

$conn->close();
?>
</body>
</html>
