<?php
$host ="localhost";
$username = "root";
$password = "";
$dbname ="miniprojact041";

//สร้างการเชื่อมต่อ
$conn = new mysqli($host, $username, $password, $dbname);

//ตรวจสอบการเชื่อมต่อ
if ($conn->connect_errno){
    die("Connection failed: ".$conn->connect_errno);
}
?>