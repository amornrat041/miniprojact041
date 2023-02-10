<?php
$Id = $_POST["C_Id"];
$Name =$_POST["C_Name"];  
$Address =$_POST["C_Address"];
$Tel =$_POST["C_Tel"];

include('connection.php');
$sql = "UPDATE customers  SET C_Name='$Name',C_Address='$Address',C_Tel='$Tel' WHERE C_Id='$Id'";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='ins_form.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='ins_form.php'</script>";
}
$conn->close();
?>