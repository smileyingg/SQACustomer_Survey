<?php
set_time_limit(0);
header('Content-Type: text/html; charset=utf-8');

header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="SQA_Customer_Survey.xls"');
echo '<html xmlns:o="urn:schemas-microsoft-com:office:office"xmlns:x="urn:schemas-microsoft-com:office:excel"xmlns="http://www.w3.org/TR/REC-html40">';

//ทำการดึงข้อมูลจาก Database
//Connect DB
include 'configdb.php';
if ($conn->connect_errno) {
  die("Failed to connect to MySQL : (" . $conn->connect_errno . ") " . $conn->connect_error);
}
$conn->set_charset("utf8");
$query = " SELECT * from answers";
$res = $conn->query($query);
echo '<table style="width:100%" x:str>';
echo '  <tr>
            <td>id</td>
            <td>เวลาที่กรอกข้อมูล</td>
            <td>ชื่อบริษัท</td>
            <td>ชื่อ</td>
            <td>ตำแหน่ง</td>
            <td>เบอร์โทรศัพท์</td>
            <td>Email</td>
            <td>ข้อ 1.1</td>
            <td>ข้อ 1.2</td>
            <td>ข้อ 1.3</td>
            <td>ข้อ 1.4</td>
            <td>ข้อ 1.5</td>
            <td>ข้อ 2.1</td>
            <td>ข้อ 2.2</td>
            <td>ข้อ 2.3</td>
            <td>ข้อ 2.4</td>
            <td>ข้อ 2.5</td>
            <td>ข้อ 3.1</td>
            <td>ข้อ 3.2</td>
            <td>ข้อ 3.3</td>
            <td>ข้อ 3.4</td>
            <td>ข้อเสนอแนะ</td>
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
