<?php
$Id = $_POST["P_Id"];
$Name =$_POST["P_Name"];  
$Price =$_POST["P_Price"];

include('connection.php');
$sql = "UPDATE product  SET P_Name='$Name',P_Price='$Price' WHERE P_Id='$Id'";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='ins_form2.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='ins_form2.php'</script>";
}
$conn->close();
?>