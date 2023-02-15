<?php 
session_start();
// session_destroy();
unset($_SESSION['question_id']);
unset($_SESSION['quizdesc']);
unset($_SESSION["users"]); 
unset($_SESSION['uid']);
unset($_SESSION['gradeid']);
unset($_SESSION['username']);
unset($_SESSION['score']);
unset($_SESSION['total']);
unset($_SESSION['currentno']);
unset($_SESSION['ctr']);
header('Location:index.php');
?>