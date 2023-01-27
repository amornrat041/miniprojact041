
<?php
$Id =$_POST["P_Id"];
$Name =$_POST["P_Name"];
$Price= $_POST["P_Price"];

include('connection.php');
//สร้างคำสั่ง sql
$sql = "INSERT INTO product (P_Id,P_Name,P_Price) VALUES ('$Id','$Name','$Price')";

if ($conn->query($sql)) {
echo "New record created successfully";
header('location:ins_form2.php'); //กลับไปยังหน้าตาราง
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>