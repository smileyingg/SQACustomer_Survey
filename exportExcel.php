<?php
set_time_limit(0);
header('Content-Type: text/html; charset=utf-8');

header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="Result_SQA_Customer_Survey.xls"');
echo '<html xmlns:o="urn:schemas-microsoft-com:office:office"xmlns:x="urn:schemas-microsoft-com:office:excel"xmlns="http://www.w3.org/TR/REC-html40">';

//ทำการดึงข้อมูลจาก Database
//Connect DB
$mysqli = new mysqli('203.154.158.2:6011', 'sdiadmin', 'mis@Pass01', 'sqa_customer');
if ($mysqli->connect_errno) {
  die("Failed to connect to MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");
$query = " SELECT * FROM answers";
$res = $mysqli->query($query);
echo '<table style="width:100%" x:str>';
echo '  <tr>
            <td>ID</td>
            <td>Date_time</td>
            <td>Company_Name</td>
            <td>Customer_Name</td>
            <td>Customer_Position</td>
            <td>Customer_Telephone</td>
            <td>Customer_Email</td>
            <td>Q1_1</td>
            <td>Q1_2</td>
            <td>Q1_3</td>
            <td>Q1_4</td>
            <td>Q1_5</td>
            <td>Q2_1</td>
            <td>Q2_2</td>
            <td>Q2_3</td>
            <td>Q2_4</td>
            <td>Q2_5</td>
            <td>Q3_1</td>
            <td>Q3_2</td>
            <td>Q3_3</td>
            <td>Q3_4</td>
            <td>Suggestions</td>
        </tr>';
while ($row = $res->fetch_array()) {
  echo '<tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['date_time'] . '</td>
                <td>' . $row['company_name'] . '</td>
                <td>' . $row['customer_name'] . '</td>
                <td>' . $row['customer_position'] . '</td>
                <td>' . $row['customer_telephone'] . '</td>
                <td>' . $row['customer_email'] . '</td>
                <td>' . $row['q1_1'] . '</td>
                <td>' . $row['q1_2'] . '</td>
                <td>' . $row['q1_3'] . '</td>
                <td>' . $row['q1_4'] . '</td>
                <td>' . $row['q1_5'] . '</td>
                <td>' . $row['q2_1'] . '</td>
                <td>' . $row['q2_2'] . '</td>
                <td>' . $row['q2_3'] . '</td>
                <td>' . $row['q2_4'] . '</td>
                <td>' . $row['q2_5'] . '</td>
                <td>' . $row['q3_1'] . '</td>
                <td>' . $row['q3_2'] . '</td>
                <td>' . $row['q3_3'] . '</td>
                <td>' . $row['q3_4'] . '</td>
                <td>' . $row['suggestions_detail'] . '</td>
            </tr>';
}
echo '</table>';
