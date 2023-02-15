<?php 
session_start();
include '../inc/connection.php';
$qcid = $_POST['qcid'] ?? null;
// echo $qcid;
// die();
$uid = $_POST['studid'] ?? null;

if(!$uid){
    header('Location:../teacher/viewstudents.php');
    exit;
}

$query = "SELECT * FROM userinfo where uid = :uid";
$stmt = $PDO->prepare($query);
$stmt -> bindValue(':uid',$uid);
$stmt ->execute();
$values= $stmt->fetch(PDO::FETCH_ASSOC);



try {
    // para sa mga scores na nakuha
    $query1 = "SELECT * from submitted_students where uid = '$uid' and qcid = '$qcid'";
    $stmt1 = $PDO->query($query1);
    $students = $stmt1->fetchAll();

} catch (Exception $e) {
    echo ($e ->getMessage());
}
?>
<div class="container-fluid">
     
<div class = "row">

<div class = "col-md-12 ">
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

<li class="nav-item" role="presentation">
<button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Scores</button>
</li>

</ul>
<div class="tab-content" id="pills-tabContent">

<div class="tab-pane fade show active" id="pills-subject" role="tabpanel" aria-labelledby="pills-subject-tab">
<div class="col-md-12 table-responsive">
    <p class = "fw-bold  fs-3">Scores</p>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th scope="col">Activity Category</th>
                <th scope="col">Activity Type</th>
                <th scope="col">Score</th>
                <th scope="col">Total Points</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ($students as $stud): ?>  <!-- $i => -->
            <th scope="row"><?=$stud["qcid"]?></th>
                <td >  
                    <?= $stud["subjectcategory"] ?>
                </td>
                <td >  
                    <?= $stud["activity"] ?>
                </td>
                <td >  
                    <?= $stud["score"] ?>
                </td>
                <td >  
                    <?= $stud["total_points"] ?>
                </td>
                <td >  
                    <?= $stud["date"] ?>
                </td>
            </tr>
                <?php endforeach; ?>
        </tbody>
        </table>
</div>
</div>
</div>

</div>
</div>
