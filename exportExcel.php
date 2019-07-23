<?php
set_time_limit(0);
header('Content-Type: text/html; charset=utf-8');

header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="Result_Loga_Survey.xls"');
echo '<html xmlns:o="urn:schemas-microsoft-com:office:office"xmlns:x="urn:schemas-microsoft-com:office:excel"xmlns="http://www.w3.org/TR/REC-html40">';

//ทำการดึงข้อมูลจาก Database
//Connect DB
$mysqli = new mysqli('localhost', 'root', '', 'loga_survey');
if ($mysqli->connect_errno) {
  die("Failed to connect to MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");
$query = " SELECT * FROM answers order by id desc ";
$res = $mysqli->query($query);
echo '<table style="width:100%" x:str>';
echo '  <tr>
  <td>id</td>
  <td>เวลาที่กรอกข้อมูล</td>
  <td>ข้อ 1</td>
  <td>รายละเอียดข้อ 1</td>
  <td>ข้อ 2</td>
  <td>ข้อ 3</td>
  <td>รายละเอียดข้อ 3</td>
  <td>ข้อ 4</td>
  <td>รายละเอียดข้อ 4</td>
  <td>ข้อ 5</td>
  <td>ข้อ 6</td>
  <td>รายละเอียดข้อ 6</td>
  <td>ข้อ 7</td>
  <td>ข้อ 8</td>
  <td>รายละเอียดข้อ 8</td>
  <td>ข้อ 9</td>
  <td>รายละเอียดข้อ 9</td>
  <td>ข้อ 10</td>
  <td>Email</td>
        </tr>';
while ($row = $res->fetch_array()) {
  echo '<tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['user_time'] . '</td>
                <td>' . $row['q1'] . '</td>
                <td>' . $row['detail_q1'] . '</td>
                <td>' . $row['q2'] . '</td>
                <td>' . $row['q3'] . '</td>
                <td>' . $row['detail_q3'] . '</td>
                <td>' . $row['q4'] . '</td>
                <td>' . $row['detail_q4'] . '</td>
                <td>' . $row['q5'] . '</td>
                <td>' . $row['q6'] . '</td>
                <td>' . $row['detail_q6'] . '</td>
                <td>' . $row['q7'] . '</td>
                <td>' . $row['q8'] . '</td>
                <td>' . $row['detail_q8'] . '</td>
                <td>' . $row['q9'] . '</td>
                <td>' . $row['detail_q9'] . '</td>
                <td>' . $row['q10'] . '</td>
                <td>' . $row['email'] . '</td>
            </tr>';
}
echo '</table>';
