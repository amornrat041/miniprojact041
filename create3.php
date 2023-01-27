
<?php
$Id =$_POST["T_Id"];
$Name =$_POST["T_Name"];

include('connection.php');
//สร้างคำสั่ง sql
$sql = "INSERT INTO typee (T_Id,T_Name) VALUES ('$Id','$Name')";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location:ins_form3.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>