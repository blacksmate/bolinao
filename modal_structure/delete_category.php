<?php 
session_start();
include '../inc/connection.php';
$uid = $_POST['id'] ?? null;

$query = "SELECT * FROM questionscategory where id = :uid";
$stmt = $PDO->prepare($query);
$stmt -> bindValue(':uid',$uid);
$stmt ->execute();
$values= $stmt->fetch(PDO::FETCH_ASSOC);
$_fullname = $values['subjectcategory'];

if(isset($_POST['btn_delete'])){
    $query = "DELETE FROM questionscategory WHERE  id =  '$uid'";
    $query1 = "DELETE FROM options where qcid = '$uid'";
    $query2 = "DELETE FROM question where qcid = '$uid'";
    $stmt = $PDO->query($query);
    $stmt1 = $PDO->query($query1);
    $stmt2 = $PDO->query($query2);
    // $stmt -> bindValue(':uid',$uid);
    $stmt ->execute();
    $stmt1 ->execute();
    $stmt2 ->execute();
    $_SESSION['status'] = "$_fullname"." Category Successfully Deleted";
    $_SESSION['status_code']= "success";
    header('Location:../teacher/viewquizzes.php');

    // echo "<script type = 'text/javascript'>alert('Deleted Successfully');
    // window.location.href='../teacher/viewquizzes.php';</script>";
}
?>
     <input type = "hidden" name = "id" value = "<?=$uid; ?>"> <!--pang where clause natin-->
<h1 class = "p-4 h3 lead">Are you sure you want to Delete <span class = "fw-bold"><?= $_fullname?></span>?</h1>