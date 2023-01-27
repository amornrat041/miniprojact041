<?php 
 $Id = $_GET['C_Id'];
include('connection.php');
$sql = "DELETE FROM customers WHERE C_Id=$Id";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='ins_form.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='ins_form.php'</script>";
}

$conn->close();
?>