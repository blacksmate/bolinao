<?php 
session_start();
include '../inc/connection.php';
$uid = $_POST['id'] ?? null;

$query = "SELECT * FROM userinfo where uid = :uid";
$stmt = $PDO->prepare($query);
$stmt -> bindValue(':uid',$uid);
$stmt ->execute();
$values= $stmt->fetch(PDO::FETCH_ASSOC);
$_fullname = $values['fullname'];

if(isset($_POST['btn_delete'])){
    $query = "DELETE FROM userinfo WHERE uid = :uid";
    $stmt = $PDO->prepare($query);
    $stmt -> bindValue(':uid',$uid);
    $stmt ->execute();


    $_SESSION['status'] = "$_fullname"." Successfully Deleted!";
    $_SESSION['status_code']= "success";
    header('Location:../teacher/viewstudents.php');
}
?>
     <input type = "hidden" name = "id" value = "<?=$uid; ?>"> <!--pang where clause natin-->
<h1 class = "p-4 h3 lead">Are you sure you want to Delete <span class = "fw-bold"><?= $_fullname?></span>?</h1>