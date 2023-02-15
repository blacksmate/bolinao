<?php
session_start();
include '../inc/connection.php';
$uid = $_POST['qid'] ?? null; 
$qcid = $_POST['qcid'] ?? null;
if(isset($_POST['btn_delete'])){
    
    // var_dump($uid);
    // die();
    $query1 = "DELETE FROM options where question_number = '$uid' AND qcid = '$qcid' ";
    $query2 = "DELETE FROM question where question_number = '$uid'AND qcid = '$qcid'";
    $stmt1 = $PDO->query($query1);
    $stmt2 = $PDO->query($query2);
    // $stmt -> bindValue(':uid',$uid);
    $stmt1 ->execute();
    $stmt2 ->execute();
    $_SESSION['status'] = "$_fullname"." Category Successfully Deleted";
    $_SESSION['status_code']= "success";
    header('Location:../teacher/viewquizzes.php');

    // echo "<script type = 'text/javascript'>alert('Deleted Successfully');
    // window.location.href='../teacher/viewquizzes.php';</script>";
}