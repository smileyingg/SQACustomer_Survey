<?php

if (
  isset($_POST['company_name']) && isset($_POST['customer_name']) && isset($_POST['customer_position']) && isset($_POST['customer_telephone']) && isset($_POST['customer_email']) &&
  isset($_POST['q1_s1']) && isset($_POST['q1_s2']) && isset($_POST['q1_s3']) && isset($_POST['q1_s4']) && isset($_POST['q1_s5']) && isset($_POST['q2_s1']) && isset($_POST['q2_s2']) &&
  isset($_POST['q2_s3']) && isset($_POST['q2_s4']) && isset($_POST['q2_s5']) && isset($_POST['q3_s1']) && isset($_POST['q3_s2']) && isset($_POST['q3_s3']) && isset($_POST['q3_s4'])
) {

  include 'configdb.php';

  $answer_company_Name = $_POST['company_name'];
  $answer_customer_Name = $_POST['customer_name'];
  $answer_customer_Position = $_POST['customer_position'];
  $answer_customer_Telephone = $_POST['customer_telephone'];
  $answer_customer_Email = $_POST['customer_email'];


  $q1_s1 = $_POST['q1_s1'];
  $q1_s2 = $_POST['q1_s2'];
  $q1_s3 = $_POST['q1_s3'];
  $q1_s4 = $_POST['q1_s4'];
  $q1_s5 = $_POST['q1_s5'];
  $q2_s1 = $_POST['q2_s1'];
  $q2_s2 = $_POST['q2_s2'];
  $q2_s3 = $_POST['q2_s3'];
  $q2_s4 = $_POST['q2_s4'];
  $q2_s5 = $_POST['q2_s5'];
  $q3_s1 = $_POST['q3_s1'];
  $q3_s2 = $_POST['q3_s2'];
  $q3_s3 = $_POST['q3_s3'];
  $q3_s4 = $_POST['q3_s4'];
  $q4_comment = $_POST['q4_comment'];


  $sql = "INSERT INTO answers (	company_name, customer_name, customer_position, customer_telephone, customer_email, q1_1, q1_2, q1_3, q1_4, q1_5, q2_1, q2_2, q2_3, q2_4, q2_5, q3_1, q3_2, q3_3, q3_4, suggestions_detail) VALUES 
('$answer_company_Name', '$answer_customer_Name', '$answer_customer_Position', '$answer_customer_Telephone', '$answer_customer_Email', '$q1_s1', '$q1_s2', '$q1_s3', '$q1_s4', '$q1_s5', '$q2_s1', '$q2_s2', '$q2_s3', '$q2_s4', '$q2_s5', '$q3_s1', '$q3_s2', '$q3_s3','$q3_s4','$q4_comment')";
  $result = mysqli_query($conn, $sql);

  if ( $result === TRUE) {
    echo ('1');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
} else {
  echo ('0');
}
