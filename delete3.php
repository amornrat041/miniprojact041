<?php 
 $Id = $_GET['T_Id'];
include('connection.php');
$sql = "DELETE FROM typee WHERE T_Id = $Id";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='ins_form3.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='ins_form3.php'</script>";
}

$conn->close();
?>