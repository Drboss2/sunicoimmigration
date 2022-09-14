<?php
ob_start();
session_start();
unset($_SESSION['admin_id']);
unset($_SESSION['email']);
header("location:http://localhost/account/login");

?>