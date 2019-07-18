<?php
set_time_limit(0);
header('Content-Type: text/html; charset=utf-8');

header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="SQA_Customer_Survey_Comment.xls"');
echo '<html xmlns:o="urn:schemas-microsoft-com:office:office"xmlns:x="urn:schemas-microsoft-com:office:excel"xmlns="http://www.w3.org/TR/REC-html40">';

//ทำการดึงข้อมูลจาก Database
//Connect DB
$mysqli = new mysqli('203.154.158.2:6011', 'monitor', 'monitor@Pass01', 'sqa_customer');
if ($mysqli->connect_errno) {
  die("Failed to connect to MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8");
$query = " SELECT * FROM comment ";
$res = $mysqli->query($query);
echo '<table style="width:100%" x:str>';
echo '  <tr>
            <td>comment_id</td>
            <td>comment</td>
            <td>comment_time</td>
            <td>company_name </td>
            <td>customer_email</td>
        </tr>';
while ($row = $res->fetch_array()) {
  echo '<tr>
                <td>' . $row['comment_id'] . '</td>
                <td>' . $row['comment'] . '</td>
                <td>' . $row['comment_time'] . '</td>
                <td>' . $row['company_name'] . '</td>
                <td>' . $row['customer_email'] . '</td>
            </tr>';
}
echo '</table>';
