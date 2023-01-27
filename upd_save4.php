<?php
$Id = $_POST["E_Id"];
$Name =$_POST["E_Name"];  
$Position =$_POST["E_Position"];
$Tel =$_POST["E_Tel"];  
$Salary =$_POST["E_Salary"];

include('connection.php');
$sql = "UPDATE employee SET E_Name='$Name',E_Position='$Position',E_Tel='$Tel',E_Salary='$Salary'  WHERE E_Id='$Id'";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='ins_form4.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='ins_form4.php'</script>";
}
$conn->close();
?>