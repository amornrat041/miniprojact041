<?php
$Id = $_POST["T_Id"];
$Name =$_POST["T_Name"];  


include('connection.php');
$sql = "UPDATE typee SET T_Name = '$Name' WHERE T_Id='$Id'";
if ($conn->query($sql)) {
    echo "<script>alert('Record Inserted Successfully!');</script>";
    echo "<script>window.location.href='ins_form3.php'</script>";
} else {
    echo "<script>alert('Something went wrong! Please try again!');</script>";
    echo "<script>window.location.href='ins_form3.php'</script>";
}
$conn->close();
?>