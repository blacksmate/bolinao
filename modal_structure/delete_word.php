<?php 
session_start();
include '../inc/connection.php';
$uid = $_POST['id'] ?? null;

$query = "SELECT * FROM `tagalogilocano` where id_tagalog = :uid";
$stmt = $PDO->prepare($query);
$stmt -> bindValue(':uid',$uid);
$stmt ->execute();
$values= $stmt->fetch(PDO::FETCH_ASSOC);
$_fullname = $values['word_tagalog'];

if(isset($_POST['btn_delete'])){
    $query = "DELETE FROM tagalogilocano WHERE id_tagalog = :uid";
    $stmt = $PDO->prepare($query);
    $stmt -> bindValue(':uid',$uid);
    $stmt ->execute();

    $_SESSION['status'] = "$_fullname"." Subject Successfully Deleted";
    $_SESSION['status_code']= "success";
    header('Location:../teacher/add_dictionary.php');

    // echo "<script type = 'text/javascript'>alert('Deleted Successfully');
    // window.location.href='../teacher/viewstudentssubj.php';</script>";
}
?>
     <input type = "hidden" name = "id" value = "<?=$uid; ?>"> <!--pang where clause natin-->
<h1 class = "p-4 h3 lead">Are you sure you want to Delete <span class = "fw-bold"><?= $_fullname?></span>?</h1>