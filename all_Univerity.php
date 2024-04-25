<?php
//--------------------------- This for fetch the result of the report for all the universites in the dbase (Related to drResults.php)  ---------------------------

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
</style>
<table border="1" class="tg" style="margin-top: 30px;">
  <thead>
    <tr>
      <?php echo '<th class="tg-wc5d" colspan="10" style="font-size: 15px;">تقييم إنجاز المجموعات وفق مؤشر الأداء لخطة عمل مبادرة تعزيز الصحة النفسية بجامعات المملكة العربية السعودية للعام الدراسي (' . $currentYear . '-' . $nextYear . ')</th>'; ?>
    </tr>
  </thead>

  <tr>
    <td class="tg-wc5d" style="font-size: 12px;"><br>الجامعة / المحور</td>
    <td class="tg-wc5d" style="font-size: 12px;">بناء الشخصية <br>المتوازنة للطالب<br> الجامعي الوزن (15)</td>
    <td class="tg-wc5d" style="font-size: 12px;">تعزيز مفاهيم <br> الصحة النفسية الوزن (10)</td>
    <td class="tg-wc5d" style="font-size: 12px;">مركز العناية<br> بالطالب الوزن (10)</td>
    <td class="tg-wc5d" style="font-size: 12px;">مبادرات مجتمعية <br>بمجال الصحة النفسية<br> الوزن (5)</td>
    <td class="tg-wc5d" style="font-size: 12px;">النشاط العلمي<br> والبحثي بمجال<br> الصحة النفسية الوزن(5)</td>
    <td class="tg-wc5d" style="font-size: 12px;">الاهتمام بعوامل<br> الخطورة داخل <br>البيئة الجامعية الوزن (5)</td>
    <?php echo '<td class="tg-wc5d" style="font-size: 12px;">عدد الأنشطة <br>للعام ' . $currentYear . '</td> ' ?>
    <?php echo '<td class="tg-wc5d" style="font-size: 12px;">نسبة العام<br>' . $currentYear . '</td>' ?>
    <?php echo '<td class="tg-wc5d" style="font-size: 12px;">نسبة العام<br>' . $lastYear. '</td> ' ?>
   </tr>


  <?php
  // Fetch universities, their report IDs, and activity counts

  
  $query = "SELECT 
  u.id, 
  u.university_name, 
  r.reportId, 
  COUNT(a.actName) as activityCount
FROM 
  universityname u
LEFT JOIN (
    SELECT 
      MAX(reportId) as reportId, 
      university
    FROM reportable1 
    WHERE 
      (date IS NULL OR date = '0000-00-00' OR (date >= '$startDate' AND date <= '$endDate'))
    GROUP BY university
) latest_reports ON u.id = latest_reports.university
LEFT JOIN reportable1 r ON latest_reports.reportId = r.reportId
LEFT JOIN activites a ON r.reportId = a.reportId
GROUP BY 
  u.id, 
  u.university_name, 
  r.reportId
ORDER BY 
  u.university_name;
";
  $result = mysqli_query($conn, $query);


  if (!$result) {
    die("Query failed: " . mysqli_error($conn));
  }

  while ($row = mysqli_fetch_assoc($result)) {

    echo "<tr>";
    echo "<td>" . htmlspecialchars($row["university_name"]) . "</td>";
    $selectedUniversityId = $row['id'];
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

    if ($activitiesResult->num_rows > 0) {
      echo "<ul>";
      while ($activity = $activitiesResult->fetch_assoc()) {
        //echo "<li>Type: " . htmlspecialchars($activity["actType"]) . ", Name: " . htmlspecialchars($activity["actName"]) . "</li>";
        // Increment type counts
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
        } else {
          $type1Count = 0;
    $type2Count = 0;
    $type3Count = 0;
    $type4Count = 0;
    $type5Count = 0;
    $type6Count = 0; 
        }
      }
      echo "</ul>";
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

    if ($lastYearResult->num_rows > 0) {
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
    $lastYearWeightedSum = (($lastYearType1Count * 3) + ($lastYearType2Count * 2) + ($lastYearType3Count * 2.5) + ($lastYearType4Count * 1.2) + ($lastYearType5Count * 1.6) + ($lastYearType6Count * 1.6)) / 50;
    $weightedSum = (($type1Count * 3) + ($type2Count * 2) + ($type3Count * 2.5) + ($type4Count * 1.2) + ($type5Count * 1.6) + ($type6Count * 1.6)) / 50;


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

  echo "</table>";

  $query2 = "SELECT 
SUM(CASE WHEN a.actType = '1' THEN 1 ELSE 0 END) AS type1Total,
SUM(CASE WHEN a.actType = '2' THEN 1 ELSE 0 END) AS type2Total,
SUM(CASE WHEN a.actType = '3' THEN 1 ELSE 0 END) AS type3Total,
SUM(CASE WHEN a.actType = '4' THEN 1 ELSE 0 END) AS type4Total,
SUM(CASE WHEN a.actType = '5' THEN 1 ELSE 0 END) AS type5Total,
SUM(CASE WHEN a.actType = '6' THEN 1 ELSE 0 END) AS type6Total
FROM activites a
JOIN reportable1 r ON a.reportId = r.reportId
WHERE a.actDate IS NULL OR a.actDate = '0000-00-00' OR (a.actDate >= '$startDate' AND a.actDate <= '$endDate')";

  $result2 = mysqli_query($conn, $query2);

  if (!$result2) {
    die("Query failed: " . mysqli_error($conn));
  }
  $row = mysqli_fetch_assoc($result2);
  if ($row) {

    $type1Total = $row['type1Total'];
    $type2Total = $row['type2Total'];
    $type3Total = $row['type3Total'];
    $type4Total = $row['type4Total'];
    $type5Total = $row['type5Total'];
    $type6Total = $row['type6Total'];


    $totalActCurrent = $type1Total + $type2Total + $type3Total + $type4Total + $type5Total + $type6Total;
  }
  //---------------------------------------------------------------------------------

  $query3 = "SELECT 
SUM(CASE WHEN a.actType = '1' THEN 1 ELSE 0 END) AS type1TotalLast,
SUM(CASE WHEN a.actType = '2' THEN 1 ELSE 0 END) AS type2TotalLast,
SUM(CASE WHEN a.actType = '3' THEN 1 ELSE 0 END) AS type3TotalLast,
SUM(CASE WHEN a.actType = '4' THEN 1 ELSE 0 END) AS type4TotalLast,
SUM(CASE WHEN a.actType = '5' THEN 1 ELSE 0 END) AS type5TotalLast,
SUM(CASE WHEN a.actType = '6' THEN 1 ELSE 0 END) AS type6TotalLast
FROM activites a
JOIN reportable1 r ON a.reportId = r.reportId
WHERE YEAR(a.actDate) = $lastYear";

  $result3 = mysqli_query($conn, $query3);

  if (!$result3) {
    die("Query failed: " . mysqli_error($conn));
  }

  $row = mysqli_fetch_assoc($result3);

  if ($row) {
    // Extract each total from the query result
    $type1TotalLast = $row['type1TotalLast'];
    $type2TotalLast = $row['type2TotalLast'];
    $type3TotalLast = $row['type3TotalLast'];
    $type4TotalLast = $row['type4TotalLast'];
    $type5TotalLast = $row['type5TotalLast'];
    $type6TotalLast = $row['type6TotalLast'];

    // Calculate the total of all types for the last year
    $totalActLast = $type1TotalLast + $type2TotalLast + $type3TotalLast + $type4TotalLast + $type5TotalLast + $type6TotalLast;
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
    google.charts.setOnLoadCallback(drawCharts);

    function drawCharts() {
      drawChart();
      drawVerticalChart();
    }

    function drawChart() {
      const activitiesCurr = {
        "1400": {
          name: "بناء الشخصية المتوازنة للطالب العلمي",
          interest: <?php echo $type1Total; ?>
        },
        "1380": {
          name: "تعزيز مفاهيم الصحة النفسة",
          interest: <?php echo $type2Total; ?>
        },
        "1350": {
          name: "مركز العناية بالطالب",
          interest: <?php echo $type3Total; ?>
        },
        "1300": {
          name: "مبادرات مجتمعية بمجال الصحة النفسية",
          interest: <?php echo $type4Total; ?>
        },
        "1215": {
          name: "النشاط العلمي والبحثي بمجال الصحة النفسية",
          interest: <?php echo $type5Total; ?>
        },
        "1200": {
          name: "الاهتمام بعوامل الخطورة داخل البيئة الجامعية",
          interest: <?php echo $type6Total; ?>
        },
        "1100": {
          name: "مجموع الأنشطة المنفذة",
          interest: <?php echo $totalActCurrent; ?>
        },
      };
      const activitiesLast = {
        "1400": {
          name: "بناء الشخصية المتوازنة للطالب العلمي",
          interest: <?php echo $type1TotalLast; ?>
        },
        "1380": {
          name: "تعزيز مفاهيم الصحة النفسة",
          interest: <?php echo $type2TotalLast; ?>
        },
        "1350": {
          name: "مركز العناية بالطالب",
          interest: <?php echo $type3TotalLast; ?>
        },
        "1300": {
          name: "مبادرات مجتمعية بمجال الصحة النفسية",
          interest: <?php echo $type4TotalLast; ?>
        },
        "1215": {
          name: "النشاط العلمي والبحثي بمجال الصحة النفسية",
          interest: <?php echo $type5TotalLast; ?>
        },
        "1200": {
          name: "الاهتمام بعوامل الخطورة داخل البيئة الجامعية",
          interest: <?php echo $type6TotalLast; ?>
        },
        "1100": {
          name: "مجموع الأنشطة المنفذة",
          interest: <?php echo $totalActLast; ?>
        },
      };

      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Activity');
      data.addColumn('number', '<?php echo $currentYear; ?>');
      data.addColumn('number', '<?php echo $lastYear; ?>');

      // Populate the DataTable with data from the activities objects
      Object.keys(activitiesCurr).forEach(code => {
        data.addRow([activitiesCurr[code].name, activitiesCurr[code].interest, activitiesLast[code].interest]);
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
        //title: 'عدد الأنشطة المنفذة من قبل مجموعات تعزيز الصحة النفسية بجامعات المملكة العربية السعودية'
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
  </script>

  <div style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap;">
    <p>عدد الأنشطة المنفذة من قبل مجموعات تعزيز الصحة النفسية بالجامعات </p>
    <div id="chart_div" style="width: 100%; height: 400px; border: 1px solid #ccc; background-color: #f9f9f9; margin-bottom:20px;"></div>
    <!--تقييم انجاز المجموعات وفق مؤشر الأداء لخطة عمل مبادرة تعزيز الصحة النفسية بالجامعات
  <div id="chart_div_vertical" style="width: 100%; height: 400px; border: 1px solid #ccc; background-color: #f9f9f9; margin-top:20px;"></div>-->
  </div>

  <table border="1" class="tg">
    <thead>
      <tr>
        <?php echo '<th class="tg-wc5d" colspan="7" style="font-size: 15px;">تقرير مفصل لانجازات مجموعات تعزيز الصحة النفسية بجامعات المملكة العربية السعودية للعام الدراسي (' . $currentYear . '-' . $nextYear . ')</th>'; ?>
      </tr>
    </thead>

    <tr>
      <td class="tg-wc5d" style="font-size: 12px;"><br>الجامعة</td>
      <td class="tg-wc5d" style="font-size: 12px;">بناء الشخصية المتوازنة للطالب الجامعي</td>
      <td class="tg-wc5d" style="font-size: 12px;">تعزيز مفاهيم الصحة النفسية الوزن </td>
      <td class="tg-wc5d" style="font-size: 12px;">مركز العناية بالطالب </td>
      <td class="tg-wc5d" style="font-size: 12px;">مبادرات مجتمعية بمجال الصحة النفسية<br> </td>
      <td class="tg-wc5d" style="font-size: 12px;">النشاط العلمي والبحثي بمجال<br> الصحة النفسية </td>
      <td class="tg-wc5d" style="font-size: 12px;">الاهتمام بعوامل الخطورة داخل <br>البيئة الجامعية </td>
    </tr>


    <?php
    $query = "SELECT 
    u.id, 
    u.university_name, 
    latest_reports.reportId, 
    COUNT(a.actName) as activityCount
  FROM 
    universityname u
  LEFT JOIN (
      SELECT 
        r.university,
        MAX(r.reportId) as reportId
      FROM 
        reportable1 r
      WHERE 
      (date IS NULL OR date = '0000-00-00' OR (date >= '$startDate' AND date <= '$endDate'))
      GROUP BY 
        r.university
  ) latest_reports ON u.id = latest_reports.university
  LEFT JOIN reportable1 r ON u.id = r.university AND latest_reports.reportId = r.reportId
  LEFT JOIN activites a ON r.reportId = a.reportId
  GROUP BY 
    u.id, 
    u.university_name, 
    latest_reports.reportId
  ORDER BY 
    u.university_name;
  ";
    $result = mysqli_query($conn, $query);


    if (!$result) {
      die("Query failed: " . mysqli_error($conn));
    }

    while ($row = mysqli_fetch_assoc($result)) {

      echo "<tr>";
      echo "<td>" . htmlspecialchars($row["university_name"]) . "</td>";
      $reportId = $row['reportId'];
      $query2 = "SELECT actType, actName FROM activites WHERE reportId = '$reportId'";
      $result2 = mysqli_query($conn, $query2);
      $actNamesType1 = [];
      $actNamesType2 = [];
      $actNamesType3 = [];
      $actNamesType4 = [];
      $actNamesType5 = [];
      $actNamesType6 = [];

      if (mysqli_num_rows($result2) > 0) {
        while ($row2 = mysqli_fetch_assoc($result2)) {
          if ($row2["actType"] == 1) {
            $actNamesType1[] = htmlspecialchars($row2["actName"]);
          } elseif ($row2["actType"] == 2) {
            $actNamesType2[] = htmlspecialchars($row2["actName"]);
          } elseif ($row2["actType"] == 3) {
            $actNamesType3[] = htmlspecialchars($row2["actName"]);
          } elseif ($row2["actType"] == 4) {
            $actNamesType4[] = htmlspecialchars($row2["actName"]);
          } elseif ($row2["actType"] == 5) {
            $actNamesType5[] = htmlspecialchars($row2["actName"]);
          } elseif ($row2["actType"] == 6) {
            $actNamesType6[] = htmlspecialchars($row2["actName"]);
          }
        }
      }
      //-----Type1
      echo "<td>";
      if (!empty($actNamesType1)) {
        echo "<ul>";
        foreach ($actNamesType1 as $name) {
          echo "<li>$name</li>";
        }
        echo "</ul>";
      } else {
        echo "لا يوجد أنشطة";
      }
      echo "</td>";

      //-----Type2
      echo "<td>";
      if (!empty($actNamesType2)) {
        echo "<ul>";
        foreach ($actNamesType2 as $name) {
          echo "<li>$name</li>";
        }
        echo "</ul>";
      } else {
        echo "لا يوجد أنشطة";
      }
      echo "</td>";

      //-----Type3
      echo "<td>";
      if (!empty($actNamesType3)) {
        echo "<ul>";
        foreach ($actNamesType3 as $name) {
          echo "<li>$name</li>";
        }
        echo "</ul>";
      } else {
        echo "لا يوجد أنشطة";
      }
      echo "</td>";

      //-----Type4
      echo "<td>";
      if (!empty($actNamesType4)) {
        echo "<ul>";
        foreach ($actNamesType4 as $name) {
          echo "<li>$name</li>";
        }
        echo "</ul>";
      } else {
        echo "لا يوجد أنشطة";
      }
      echo "</td>";

      //-----Type5
      echo "<td>";
      if (!empty($actNamesType5)) {
        echo "<ul>";
        foreach ($actNamesType5 as $name) {
          echo "<li>$name</li>";
        }
        echo "</ul>";
      } else {
        echo "لا يوجد أنشطة";
      }
      echo "</td>";


      //-----Type6
      echo "<td>";
      if (!empty($actNamesType6)) {
        echo "<ul>";
        foreach ($actNamesType6 as $name) {
          echo "<li>$name</li>";
        }
        echo "</ul>";
      } else {
        echo "لا يوجد أنشطة";
      }
      echo "</td>";

      echo "</tr>";
    }



    echo "</table>";
    ?>
    <div class="row" style="margin-top: 13px;">
      <div class="col-md-12">
        <div class="border" style="font-size: 15px; padding: 18px;">
          <label for="fileUpload">عدد الخطابات:</label>
          <?php
          // Include the file for database connection
          include 'connect.php';

          // Query to fetch the count of records from fileUpload table
          $sql = "SELECT COUNT(*) AS total FROM fileUpload";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "  ";
            echo "<span>" . $row["total"] . "</span>";
          } else {
            echo "0";
          }
          ?>
        </div>
      </div>
    </div>