<?php
//--------------------------- This for fetch the center data for all the universities in the dbase (Related to drResults.php)  ---------------------------

require 'connect.php';
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
<div class="center-container">
  <table class="tg">
    <thead>
      <tr>
        <?php echo '<th class="tg-wc5d" colspan="10" style="font-size: 15px;">مركز العناية بالطالب</th>'; ?>
      </tr>
    </thead>

    <tr>
      <td class="tg-wc5d" style="font-size: 12px;">اسم الجامعة</td>
      <td class="tg-wc5d" style="font-size: 12px;">تتم العناية بالطالب داخل</td>
      <td class="tg-wc5d" style="font-size: 12px;">عدد الأخصائيين النفسيين</td>
      <td class="tg-wc5d" style="font-size: 12px;">عدد الأخصائيين الاجتماعيين</td>
    </tr>


    <?php

$query = "SELECT u.id AS UniversityID,
          u.university_name AS UniversityName,
          c.therpistNumber AS TherapistNumber,
          c.socialNumber AS SocialNumber,
          c.saType AS SAType
          FROM universityname u
          LEFT JOIN center c ON u.id = c.university
          ORDER BY u.university_name;";


    $result = mysqli_query($conn, $query);


    if (!$result) {
      die("Query failed: " . mysqli_error($conn));
    }

    while ($row = mysqli_fetch_assoc($result)) {

      echo "<tr>";
      $SAType = $row["SAType"];

      switch ($SAType) {
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

      $therapistNumber = !empty($row["TherapistNumber"]) ? $row["TherapistNumber"] : "0";
      $socialNumber = !empty($row["SocialNumber"]) ? $row["SocialNumber"] : "0";

      echo "<td>" . htmlspecialchars($row["UniversityName"], ENT_QUOTES, 'UTF-8') . "</td>";
      echo "<td>" . htmlspecialchars($typeName, ENT_QUOTES, 'UTF-8') . "</td>";
      echo "<td>" . htmlspecialchars($therapistNumber, ENT_QUOTES, 'UTF-8') . "</td>";
      echo "<td>" . htmlspecialchars($socialNumber, ENT_QUOTES, 'UTF-8') . "</td>";

      echo "</tr>";
    }

    echo "</table>";
    ?>
</div>