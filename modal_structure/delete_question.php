<?php 
session_start();
include '../inc/connection.php';
$uid = $_POST['id'] ?? null;
$qcid = $_POST['qcid'] ?? null;
$query = "SELECT * FROM question where question_number = :uid";
$stmt = $PDO->prepare($query);
$stmt -> bindValue(':uid',$uid);
$stmt ->execute();
$values= $stmt->fetch(PDO::FETCH_ASSOC);
$_fullname = $values['question_text'];

?>
     <input type = "hidden" name = "qid" value = "<?=$uid; ?>"> <!--pang where clause natin-->
     <input type = "hidden" name = "qcid" value = "<?=$qcid; ?>"> <!--pang where clause natin-->
     
<h1 class = "p-4 h3 lead">Are you sure you want to Delete <span class = "fw-bold"><?= $_fullname?></span>?</h1>