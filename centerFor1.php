<?php
//--------------------------- This for fetch the center data for the selected university in the dbase (Related to drResults.php)  ---------------------------

require 'connect.php';
$startDate = "2023-08-20";
$currentYear = (int)substr($startDate, 0, 4);
?>

<style type="text/css">
    .center-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .tg {
        border-collapse: collapse;
        border-spacing: 0;
    }

    .tg td {
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
        text-align: center;
        vertical-align: middle;
    }

    .tg th {
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: normal;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
        text-align: center;
        vertical-align: middle;
    }

    .tg .tg-c3ow {
        border-color: black;
        text-align: center;
        vertical-align: top
    }

    .tg .tg-wc5d {
        background-color: #459466;
        border-color: black;
        vertical-align: top
    }
</style>

<?php
if (isset($_GET['university']) && !empty($_GET['university'])) {
    $selectedUniversityId = mysqli_real_escape_string($conn, $_GET['university']);

    $query = "SELECT u.id AS UniversityID,
            u.university_name AS UniversityName,
            c.therpistNumber AS TherapistNumber,
            c.socialNumber AS SocialNumber,
            c.saType AS SAType FROM center c
            LEFT JOIN universityname u ON c.university = u.id
            WHERE u.id = ?
            ORDER BY u.university_name;";


    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $selectedUniversityId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }
    echo "
    <div class='center-container'>
    <table class='tg'>
        <thead>
            <tr>
                <th class='tg-wc5d' colspan='4' style='font-size: 15px;'>مركز العناية بالطالب</th>
            </tr>
            <tr>
                <td class='tg-wc5d' style='font-size: 12px;'>اسم الجامعة</td>
                <td class='tg-wc5d' style='font-size: 12px;'>تتم العناية بالطالب داخل</td>
                <td class='tg-wc5d' style='font-size: 12px;'>عدد الأخصائيين النفسيين</td>
                <td class='tg-wc5d' style='font-size: 12px;'>عدد الأخصائيين الاجتماعيين</td>
            </tr>
        </thead>
        <tbody>";

    // Fetch and display each row of the result set
    if ($row = mysqli_fetch_assoc($result)) {
        // Determine the type name based on SAType
        switch ($row["SAType"]) {
            case "1":
                $typeName = 'مركز';
                break;
            case "2":
                $typeName = 'إدارة';
                break;
            case "3":
                $typeName = 'وحدة';
                break;
            case "4":
                $typeName = 'أخرى';
                break;
            default:
                $typeName = 'غير محدد';
        }

        // Output table rows
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["UniversityName"], ENT_QUOTES, 'UTF-8') . "</td>";
        echo "<td>" . htmlspecialchars($typeName, ENT_QUOTES, 'UTF-8') . "</td>";
        echo "<td>" . htmlspecialchars($row["TherapistNumber"] ?: "0", ENT_QUOTES, 'UTF-8') . "</td>"; // Fallback to "0" if null or empty
        echo "<td>" . htmlspecialchars($row["SocialNumber"] ?: "0", ENT_QUOTES, 'UTF-8') . "</td>"; // Fallback to "0" if null or empty
        echo "</tr>";
    } else {
        echo "<tr><td colspan='10'>لم يتم تسجيل أي نشاط. </td></tr>";
    }

    echo "</tbody>";
    echo "</table>";
    echo "</div>";
}

// Close the database connection
mysqli_close($conn);
?>