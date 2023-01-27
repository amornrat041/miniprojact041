<?php 
 $S_Id = $_GET['S_Id'];
include('connection.php');
$sql = "DELETE FROM sale WHERE S_Id= $S_Id";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('ecord deleted successfully');</script>";
    echo "<script>window.location.href='ins_form5.php'</script>";
} else {
  
    echo "<script>alert('Error deleting record: ');</script>";
    echo "<script>window.location.href='ins_form5.php'</script>";
}

$conn->close();
?>