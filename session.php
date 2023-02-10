<?php session_start();
include('connection.php');
if(!isset($_SESSION['a_level']))
{
    echo "<script>window.location.href='Form_Login.php'</script>";
}
?>