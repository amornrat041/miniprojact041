<?php
$S_Id =$_POST["S_Id"];
$Id_Product= $_POST["P_Id"];
$Id_Typee = $_POST["T_Id"];
$Id_Customers= $_POST["C_Id"];
$S_Total =$_POST["S_Total"];

include('connection.php');
$sql = "UPDATE sale  SET P_Id='$Id_Product',T_Id='$Id_Typee',C_Id='$Id_Customers',S_Total='$S_Total' WHERE S_Id='$S_Id'";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='ins_form5.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='ins_form5.php'</script>";
}
$conn->close();
?>