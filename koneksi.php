<?php
$connect = new mysqli("localhost", "root", "", "db_megajati");
if($connect->connect_error) {
  exit('Error connecting to database'); //Should be a message a typical user could understand in production
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connect->set_charset("utf8mb4");
