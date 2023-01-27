<?php
session_start();
if(isset($_POST['Username'])){
//connection

include("connection.php");

//รับค่า user & password

$Username = $_POST['Username'];
$Password = $_POST['Password'];

//query

$sql="SELECT * FROM tbl_admin Where
a_username='".$Username."' and a_pass='".$Password."' ";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
$row = mysqli_fetch_array($result);
$_SESSION["a_id"] = $row["a_id"];
$_SESSION["a_username"] = $row["a_username"];

}} //ถ้าเป็ น admin ให้กระโดดไปหน้า

    Header("Location: index.php");
    ?>