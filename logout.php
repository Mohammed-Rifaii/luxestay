<?php
session_start();
session_destroy();
header("Location: /luxestay/login.php");
?>