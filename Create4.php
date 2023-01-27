<?php
$Id =$_POST["E_Id"];
$Name =$_POST["E_Name"];
$Position= $_POST["E_Position"];
$Tel= $_POST["E_Tel"];
$Salary= $_POST["E_Salary"];

include('connection.php');
//สร้างคำสั่ง sql
$sql = "INSERT INTO employee (E_Id,E_Name,E_Position,E_Tel,E_Salary) VALUES ('$Id','$Name','$Position','$Tel','$Salary')";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location:ins_form4.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>