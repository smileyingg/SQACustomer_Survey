<?php

if (isset($_POST['q1']) && isset($_POST['q2_province']) && isset($_POST['q2_amphur']) && isset($_POST['q3']) && isset($_POST['q4']) && isset($_POST['q5']) && isset($_POST['q6']) &&  isset($_POST['q7']) && isset($_POST['q8']) && isset($_POST['q9']) &&  isset($_POST['q10'])) {
  include 'config.php';

  $multiple_Q5 = "";
  for ($i = 0; $i < count($_POST['q5']); $i++) {
    $multiple_Q5 .= $_POST["q5"][$i];
  }

  $maker_province = $_POST['q2_province'];
  $province = "SELECT province_name  FROM province where province_id=$maker_province";
  $result_province = mysqli_query($conn, $province);
  $province_Q2 = $result_province->fetch_array(MYSQLI_NUM);

  $maker_amphur = $_POST['q2_amphur'];
  $amphur = "SELECT amphur_name	 FROM amphur where amphur_id=$maker_amphur";
  $result_amphur = mysqli_query($conn, $amphur);
  $amphur_Q2 = $result_amphur->fetch_array(MYSQLI_NUM);

  $Answer2 = $province_Q2[0] . $amphur_Q2[0];


  $q1 = $_POST['q1'];
  $q2 = $Answer2;
  $q3 = $_POST['q3'];
  $q4 = $_POST['q4'];
  $q5 = $multiple_Q5;
  $q6 = $_POST['q6'];
  $q7 = $_POST['q7'];
  $q8 = $_POST['q8'];
  $q9 = $_POST['q9'];
  $q10 = $_POST['q10'];
  $another_Q1 = $_POST['txt_area_q1_c5'];
  $another_Q3 = $_POST['txt_area_q3_c5'];
  $another_Q4 = $_POST['txt_area_q4_c5'];
  $another_Q6 = $_POST['txt_area_q6_c4'];
  $another_Q8 = $_POST['txt_area_q8_c5'];
  $another_Q9 = $_POST['txt_area_q9_c5'];
  $email = $_POST['q11_c1'];

  $sql = "INSERT INTO answers (	q1, detail_q1, q2, q3, detail_q3, q4, detail_q4, q5, q6	, detail_q6, q7	, q8, detail_q8, q9, detail_q9, q10, email) VALUES 
  ('$q1 ', '$another_Q1', '$q2', '$q3', '$another_Q3', '$q4', '$another_Q4', '$q5', '$q6', '$another_Q6', '$q7', '$q8', '$another_Q8', '$q9', '$another_Q9', '$q10', '$email')";
  $result = mysqli_query($conn, $sql);

  if ($result === TRUE) {
    echo ('1');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
} else {
  echo ('0');
}
