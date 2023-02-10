<?php
$Id =$_POST["C_Id"];
$Name =$_POST["C_Name"];
$Address= $_POST["C_Address"];
$Tel= $_POST["C_Tel"];

include('connection.php');
//สร้างคำสั่ง sql
$sql = "INSERT INTO customers (C_Id,C_Name,C_Address,C_Tel) VALUES ('$Id','$Name','$Address','$Tel')";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location:ins_form.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>