<?php 
session_start();
include '../inc/connection.php';
require_once '../function/fpdf184/fpdf.php';
$uid = $_POST['uid'];
$start = $_POST['start_date'];
$end = $_POST['end_date'];

// var_dump($start);
// var_dump($end);
// die();
$query = "SELECT * FROM `submitted_students` where uid ='$uid' and 
date BETWEEN '$start' AND '$end'";

$stmt = $PDO->query($query);


if(isset($_POST['btn_print'])){
   if(empty($start)|| empty($end)){
      $_SESSION['status'] = "Please don't leave the from and to date blank!";
      $_SESSION['status_code']= "warning";
      header("location: ../teacher/viewstudents.php");
   }

   $pdf = new FPDF('L', 'mm','a4');
   $pdf->SetFont('arial','b',12);
   $pdf->AddPage();
   $pdf->cell('40','10','Student ID','1','0','C');
   $pdf->cell('60','10','Student Name','1','0','C');
   $pdf->cell('30','10','Date','1','0','C');
   $pdf->cell('20','10','Score','1','0','C');
   $pdf->cell('35','10','Total Points','1','0','C');
   $pdf->cell('50','10','Category','1','0','C');
   $pdf->cell('40','10','Activity Type','1','0','C');
$pdf->SetFont('arial','','12');
while($res= $stmt->fetch(PDO::FETCH_ASSOC)){
    $pdf->Ln(10);
    $pdf->cell('40','10', $res['uid'],'1','0','C');
    $pdf->cell('60','10', $res['stud_name'],'1','0','C');
    $pdf->cell('30','10', $res['date'],'1','0','C');
    $pdf->cell('20','10', $res['score'],'1','0','C');
    $pdf->cell('35','10', $res['total_points'],'1','0','C');
    $pdf->cell('50','10', $res['subjectcategory'],'1','0','C');
    $pdf->cell('40','10', $res['activity'],'1','0','C');
    // $studid = $res['uid'];
    // $studname = $res['stud_name'];
    // $date = $res['date'];
    // $score = $res['score'];
    // $totalpoints = $res['total_points'];
    // $category = $res['subjectcategory'];
    // $activity = $res['activity'];
} 
   $pdf ->Output();
}
?>