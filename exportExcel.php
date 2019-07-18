<?php
set_time_limit(0);
header('Content-Type: text/html; charset=utf-8');

header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="SQA_Customer_Survey.xlsx"');
echo '<html xmlns:o="urn:schemas-microsoft-com:office:office"xmlns:x="urn:schemas-microsoft-com:office:excel"xmlns="http://www.w3.org/TR/REC-html40">';

//ทำการดึงข้อมูลจาก Database
//Connect DB
$mysqli = new mysqli('203.154.158.2:6011', 'sdiadmin', 'mis@Pass01', 'sqa_customer');
if ($mysqli->connect_errno) {
  die("Failed to connect to MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8_general_ci");
$query = " SELECT answer.answer_ID,answer.question_ID,answer.groupQuestion_ID,answer.rate_Answer,answer.answer_Time,answer.company_Name,answer.customer_Email,questions.question FROM answer INNER JOIN questions ON answer.question_ID = questions.question_ID";
$res = $mysqli->query($query);
echo '<table style="width:100%" x:str>';
echo '  <tr>
            <td>answer_ID</td>
            <td>question_ID</td>
            <td>question</td>
            <td>groupQuestion_ID</td>
            <td>rate_Answer </td>
            <td>answer_Time</td>
            <td>company_Name</td>
            <td>customer_Email</td>
        </tr>';
while ($row = $res->fetch_array()) {
  echo '<tr>
                <td>' . $row['answer_ID'] . '</td>
                <td>' . $row['question_ID'] . '</td>
                <td>' . $row['question'] . '</td>
                <td>' . $row['groupQuestion_ID'] . '</td>
                <td>' . $row['rate_Answer'] . '</td>
                <td>' . $row['answer_Time'] . '</td>
                <td>' . $row['company_Name'] . '</td>
                <td>' . $row['customer_Email'] . '</td>
            </tr>';
}
echo '</table>';
