<?php
    session_start();
    session_destroy();
    // header("Location : Form_Login.php");
    echo "<script>window.location.href='Form_Login.php'</script>";
?>