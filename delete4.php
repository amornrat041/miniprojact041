<?php 
 $Id = $_GET['E_Id'];
include('connection.php');
$sql = "DELETE FROM employee WHERE E_Id = $Id";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='ins_form4.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='ins_form4.php'</script>";
}

$conn->close();
?>