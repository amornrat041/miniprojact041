<?php 
 $Id = $_GET['P_Id'];
include('connection.php');
$sql = "DELETE FROM product WHERE P_Id = $Id";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='ins_form2.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='ins_form2.php'</script>";
}

$conn->close();
?>