<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['cid']);
    header("Location: logIn.php");
?>