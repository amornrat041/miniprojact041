
<?php
    session_start();
    session_destroy();
    header("Location : Form_Login.php");
    ?>