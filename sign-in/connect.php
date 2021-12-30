<?php
$servername = "localhost";
$username = "user21003";
$password = "pwd21003";
$dbname = "db21003";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("DB 연결 실패: " . $conn->connect_error);
}
//echo "DB 연결 성공";
?>
