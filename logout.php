<?php
session_start();
session_destroy();
header('location:../../TA_PWEB/login.php');
?>