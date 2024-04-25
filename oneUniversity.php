<?php
//--------------------------- This for fetch the result of the report for the selected university in the dbase (Related to drResults.php)  ---------------------------

require 'connect.php';
$startDate = "2023-08-20";
$endDate = "2024-08-17";
$currentYear = (int)substr($startDate, 0, 4);
$lastYear = $currentYear - 1;
$nextYear = $currentYear + 1;
?>
<style type="text/css">
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

  .download-btn {
    display: inline-block;
    padding: 7px 15px;
    font-size: 14px;
    background-color: #459466;
    color: white;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .download-btn:hover {
    background-color: #459466;
  }
</style>
<?php
$universitiesQuery = "SELECT id, university_name FROM universityname";
$universitiesResult = mysqli_query($conn, $universitiesQuery);

if (isset($_GET['university']) && !empty($_GET['university'])) {
  $selectedUniversityId = $_GET['university'];

  echo "
  <table border='1' class='tg' style='margin-top:10px'>
  <thead>
      <tr>
          <th class='tg-wc5d' colspan='10' style='font-size: 15px;'>تقييم إنجاز المجموعات وفق مؤشر الأداء لخطة عمل مبادرة تعزيز الصحة النفسية بجامعات المملكة العربية السعودية للعام الدراسي ($currentYear - $nextYear)</th>
      </tr>
  </thead>
  
  <tr>
      <td class='tg-wc5d' style='font-size: 12px;'><br>الجامعة / المحور</td>
      <td class='tg-wc5d' style='font-size: 12px;'>بناء الشخصية <br>المتوازنة للطالب<br> الجامعي الوزن (15)</td>
      <td class='tg-wc5d' style='font-size: 12px;'>تعزيز مفاهيم<br> (10)الصحة النفسية </td>
      <td class='tg-wc5d' style='font-size: 12px;'>مركز العناية<br> بالطالب الوزن (10)</td>
      <td class='tg-wc5d' style='font-size: 12px;'>مبادرات مجتمعية <br>بمجال الصحة النفسية<br> الوزن (5)</td>
      <td class='tg-wc5d' style='font-size: 12px;'>النشاط العلمي<br> والبحثي بمجال<br> الصحة النفسية الوزن(5)</td>
      <td class='tg-wc5d' style='font-size: 12px;'>الاهتمام بعوامل<br> الخطورة داخل <br>البيئة الجامعية الوزن (5)</td>
      <td class='tg-wc5d' style='font-size: 12px;'>عدد الأنشطة <br>للعام $currentYear</td>
      <td class='tg-wc5d' style='font-size: 12px;'>نسبة العام<br> $currentYear</td>
      <td class='tg-wc5d' style='font-size: 12px;'>نسبة العام<br> $lastYear</td>
  </tr>";
  // Query to fetch activities and their details
  $query = "SELECT u.university_name, r.reportId, COUNT(a.actName) as activityCount 
  FROM reportable1 r
  LEFT JOIN activites a ON r.reportId = a.reportId
  JOIN universityname u ON r.university = u.id
  WHERE r.university = ? AND r.date BETWEEN ? AND ?
  GROUP BY u.university_name, r.reportId
  ORDER BY r.date DESC
  LIMIT 1;
  ";


  $stmt = $conn->prepare($query);
  $stmt->bind_param("iss", $selectedUniversityId, $startDate, $endDate);
  $stmt->execute();
  $result = $stmt->get_result();


  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . htmlspecialchars($row["university_name"]) . "</td>";

      // Fetch and display activities related to the reportId
      $reportId = $row['reportId'];
      $activitiesQuery = "SELECT actType, actName FROM activites WHERE reportId = ?";
      $activitiesStmt = $conn->prepare($activitiesQuery);
      $activitiesStmt->bind_param("i", $reportId);
      $activitiesStmt->execute();
      $activitiesResult = $activitiesStmt->get_result();


      $type1Count = 0;
      $type2Count = 0;
      $type3Count = 0;
      $type4Count = 0;
      $type5Count = 0;
      $type6Count = 0;
      if ($activitiesResult) {
        echo "<ul>";
        while ($activity = $activitiesResult->fetch_assoc()) {
          if ($activity["actType"] == "1") {
            $type1Count++;
          } elseif ($activity["actType"] == "2") {
            $type2Count++;
          } elseif ($activity["actType"] == "3") {
            $type3Count++;
          } elseif ($activity["actType"] == "4") {
            $type4Count++;
          } elseif ($activity["actType"] == "5") {
            $type5Count++;
          } elseif ($activity["actType"] == "6") {
            $type6Count++;
          }
        }
        echo "</ul>";
      } else {
        echo "No activities found111";
      }

      // -------------------------last year -----------------------------
      $lastYearActivitiesQuery = "SELECT a.actType, COUNT(a.actName) as count 
                            FROM activites a
                            JOIN reportable1 r ON a.reportId = r.reportId
                            WHERE r.university = ? AND YEAR(r.date) = ?
                            GROUP BY a.actType";

      $lastYearStmt = $conn->prepare($lastYearActivitiesQuery);
      $lastYearStmt->bind_param("is", $selectedUniversityId, $lastYear);
      $lastYearStmt->execute();
      $lastYearResult = $lastYearStmt->get_result();

      // Initialize counts for the last year
      $lastYearType1Count = 0;
      $lastYearType2Count = 0;
      $lastYearType3Count = 0;
      $lastYearType4Count = 0;
      $lastYearType5Count = 0;
      $lastYearType6Count = 0;

      if ($lastYearResult) {
        while ($activity = $lastYearResult->fetch_assoc()) {
          switch ($activity["actType"]) {
            case "1":
              $lastYearType1Count += $activity["count"];
              break;
            case "2":
              $lastYearType2Count += $activity["count"];
              break;
            case "3":
              $lastYearType3Count += $activity["count"];
              break;
            case "4":
              $lastYearType4Count += $activity["count"];
              break;
            case "5":
              $lastYearType5Count += $activity["count"];
              break;
            case "6":
              $lastYearType6Count += $activity["count"];
              break;
          }
        }
      }
      $totalActCurrent = $type1Count + $type2Count + $type3Count + $type4Count + $type5Count + $type6Count;
      $totalActLast =  $lastYearType1Count + $lastYearType2Count + $lastYearType3Count + $lastYearType4Count + $lastYearType5Count + $lastYearType6Count;


      $lastYearWeightedSum = (($lastYearType1Count * 3) + ($lastYearType2Count * 2) + ($lastYearType3Count * 2.5) +
        ($lastYearType4Count * 1.2) + ($lastYearType5Count * 1.6) + ($lastYearType6Count * 1.6)) / 50;

      $weightedSum = (($type1Count * 3) + ($type2Count * 2) + ($type3Count * 2.5) +
        ($type4Count * 1.2) + ($type5Count * 1.6) + ($type6Count * 1.6)) / 50;
      // Display Type 1 and Type 2 counts
      echo "<td>" . ($type1Count * 3) . "</td>";
      echo "<td>" . ($type2Count * 2) . "</td>";
      echo "<td>" . ($type3Count * 2.5) . "</td>";
      echo "<td>" . ($type4Count * 1.2) . "</td>";
      echo "<td>" . ($type5Count * 1.6) . "</td>";
      echo "<td>" . ($type6Count * 1.6) . "</td>";
      echo "<td>" . htmlspecialchars($row["activityCount"]) . "</td>";
      echo "<td>" . ($weightedSum * 100) . "%</td>";
      echo "<td>" . ($lastYearWeightedSum * 100) . "%</td>";

      echo "</tr>";
    }
  } else {
    echo "<tr><td colspan='10'>لم يتم تسجيل أي نشاط. </td></tr>";
  }

  echo "</table>";
}

?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<div style="font-family: 'Tajawal'; margin-top:30px; margin-bottom:20px; font-size: 20px; text-align: right;">
  التحليل البياني
</div>


<script type="text/javascript">
  google.charts.load('current', {
    'packages': ['corechart']
  });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    // Define activities data for two years
    const activities2019 = {
      "1400": {
        name: "بناء الشخصية المتوازنة للطالب العلمي",
        interest: <?php echo $type1Count; ?>
      },
      "1380": {
        name: "تعزيز مفاهيم الصحة النفسة",
        interest: <?php echo $type2Count; ?>
      },
      "1350": {
        name: "مركز العناية بالطالب",
        interest: <?php echo $type3Count; ?>
      },
      "1300": {
        name: "مبادرات مجتمعية بمجال الصحة النفسية",
        interest: <?php echo $type4Count; ?>
      },
      "1215": {
        name: "النشاط العلمي والبحثي بمجال الصحة النفسية",
        interest: <?php echo $type5Count; ?>
      },
      "1200": {
        name: "الاهتمام بعوامل الخطورة داخل البيئة الجامعية",
        interest: <?php echo $type6Count; ?>
      },
      "1100": {
        name: "مجموع الأنشطة المنفذة",
        interest: <?php echo $totalActCurrent; ?>
      },
    };
    const activities2020 = {
      "1400": {
        name: "بناء الشخصية المتوازنة للطالب العلمي",
        interest: <?php echo $lastYearType1Count; ?>
      },
      "1380": {
        name: "تعزيز مفاهيم الصحة النفسة",
        interest: <?php echo $lastYearType2Count; ?>
      },
      "1350": {
        name: "مركز العناية بالطالب",
        interest: <?php echo $lastYearType3Count; ?>
      },
      "1300": {
        name: "مبادرات مجتمعية بمجال الصحة النفسية",
        interest: <?php echo $lastYearType4Count; ?>
      },
      "1215": {
        name: "النشاط العلمي والبحثي بمجال الصحة النفسية",
        interest: <?php echo $lastYearType5Count; ?>
      },
      "1200": {
        name: "الاهتمام بعوامل الخطورة داخل البيئة الجامعية",
        interest: <?php echo $lastYearType6Count; ?>
      },
      "1100": {
        name: "مجموع الأنشطة المنفذة",
        interest: <?php echo $totalActLast; ?>
      },
    };

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Activity');
    data.addColumn('number', <?php echo $currentYear; ?>);
    data.addColumn('number', <?php echo $lastYear; ?>);

    // Populate the DataTable with data from the activities objects
    Object.keys(activities2019).forEach(code => {
      data.addRow([activities2019[code].name, activities2019[code].interest, activities2020[code].interest]);
    });

    var options = {
      //: 'مقارنة النشاطات بين سنتين',
      chartArea: {
        width: '40%'
      },
      hAxis: {
        //title: 'عدد الاهتمامات',
      },
      vAxis: {
        // title: 'النشاطات',
      },
      bars: 'horizontal',
      colors: ['#244d35', '#427245'],
    };

    var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>
<div style="justify-content: center; align-items: center; height:200vh;">
  <div id="chart_div" style="width: 100%; height: 400px; border: 1px solid #ccc; background-color: #f9f9f9;"></div>

  <div style="font-family: 'Tajawal'; margin-top:30px; font-size: 20px; text-align: right;">
    الخطابات:
    <hr>
  </div>
  <br>

  <?php
  if (isset($_GET['university']) && !empty($_GET['university'])) {
    $selectedUniversityId = $_GET['university'];

    // Modify the SQL query to select file paths based on the selected university ID
    $sel = "SELECT file_path FROM fileupload WHERE university_id = ?";
    $stmt = $conn->prepare($sel);
    $stmt->bind_param("i", $selectedUniversityId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows < 1) {
      echo "<div style='color: red; font-size: smaller;'>لم يتم رفع الخطاب!</div>";
    } else {
      // Display file content using iframe
      while ($row = $result->fetch_assoc()) {
        $file_path = $row['file_path'];
        // Check the file extension to determine the appropriate embedding method
        $file_extension = pathinfo($file_path, PATHINFO_EXTENSION);
        if ($file_extension === 'pdf') {
          echo "<iframe src='$file_path' width='100%' height='500px' frameborder='0'></iframe>";
        } else {
          echo "<div>Unsupported file format. Please download the file using the link below.</div>";
        }
        echo "<br><a href='$file_path' download class='download-btn'>تحميل الخطاب</a><br>";
      }
    }
  }
  ?>
</div>