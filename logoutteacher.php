<?php 
session_start();
// session_destroy();
unset($_SESSION['teacher']);

header('Location:teacher.php');
?>