<?php 
session_start();
include '../inc/connection.php';
$uid = $_POST['id'] ?? null;

if(!$uid){
    header('Location:../teacher/viewstudents.php');
    exit;
}

$query = "SELECT * FROM userinfo where uid = :uid";
$stmt = $PDO->prepare($query);
$stmt -> bindValue(':uid',$uid);
$stmt ->execute();
$values= $stmt->fetch(PDO::FETCH_ASSOC);
     //kukunin natin ung existing data sa database base dun sa id nila at
    //i papasa natin sa natin yong mga yon sa mga designated variables
// $_ui = $values['uid'];
$_fullname = $values['fullname'];
$_email = $values['email'];
$_password = $values['password'];
$_address = $values['address'];
$_contactno =$values['mobileno'];
$_grade = $values['gradeid'];


$query2 = "SELECT grade from grade where gradeid = :gid";
$stmt = $PDO->prepare($query2);
$stmt -> bindValue(':gid',$_grade);
$stmt ->execute();
$values= $stmt->fetch(PDO::FETCH_ASSOC);
$grade = $values['grade'];


try {
    // para sa mga subjects
    $query = "SELECT s.subjdesc, u.uid from subjects s, userinfo u where u.gradeid = s.gradeid and u.uid = '$uid'";
    $stmt = $PDO->query($query);
    $result = $stmt->fetchAll();
    // para sa mga scores na nakuha
    $query1 = "SELECT * from submitted_students where uid = '$uid'";
    $stmt1 = $PDO->query($query1);
    $students = $stmt1->fetchAll();

} catch (Exception $e) {
    echo ($e ->getMessage());
}
?>
    <div class="container-fluid">
     
        <div class = "row">
        <div class="col-md-5 mb-3">
            <p class = "fw-bold fs-3 mb-3">Students Info</p>
                <div class="box box-primary">
                    <div class="box-body box-profile p-3">
                        <img class="profile-user-img img-fluid rounded-circle mx-auto d-block" src="../img/user-default-min.png" alt="profile picture">

                    <h3 class="profile-username text-center"><?php echo $_fullname; ?></h3>

                    <p class="text-muted text-center"><?php echo $grade ?></p>

                  
                        <b>Email</b> <a ><?php echo $_email ?></a>
                        <br>
                        <b>Contact</b> <a ><?php echo $_contactno; ?></a>
            
               
                    </div>
                </div>
            </div>
        </div>  
	<div class = "row">
    <div class = "col-md-5 mb-3 mt-3">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-subject-tab" data-bs-toggle="pill" data-bs-target="#pills-subject" type="button" role="tab" aria-controls="pills-subject" aria-selected="true">Subjects</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Scores</button>
  </li>

</ul>
<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-subject" role="tabpanel" aria-labelledby="pills-subject-tab">
        <div class="col-md-12 table-responsive">
            <p class = "fw-bold  fs-3">List of Subjects</p>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th scope="col">Subjects</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach ($result as $i => $subj): ?> 
                    <th scope="row"><?php echo$i + 1 ?></th>
                        <td >  
                            <?= $subj["subjdesc"] ?>
                        </td>
                    </tr>
                        <?php endforeach; ?>
                </tbody>
                </table>
        </div>
    </div>
<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
<div class="tab-pane fade show active" id="pills-subject" role="tabpanel" aria-labelledby="pills-subject-tab">
        <div class="col-md-12 table-responsive">
            <p class = "fw-bold  fs-3">Scores</p>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th scope="col">Quiz Category</th>
                        <th scope="col">Score</th>
                        <th scope="col">Total Points</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach ($students as $i => $stud): ?> 
                    <th scope="row"><?php echo$i + 1 ?></th>
                        <td >  
                            <?= $stud["subjectcategory"] ?>
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
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">This is Contact Page</div>
</div>
    </div>
  </div>
</div>              