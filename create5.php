<?php
$S_Id =$_POST["S_Id"];
$Id_Product= $_POST["P_Id"];
$Id_Typee = $_POST["T_Id"];
$Id_Customers= $_POST["C_Id"];
$S_Total =$_POST["S_Total"];

include('connection.php');
//สร้างคำสั่ง sql
$sql = "INSERT INTO sale (S_Id,P_Id,T_Id,C_Id,S_Total) VALUES ('$S_Id','$Id_Product','$Id_Typee','$Id_Customers','$S_Total')";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location:ins_form5.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>