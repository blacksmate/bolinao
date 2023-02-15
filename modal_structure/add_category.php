
<?php 
session_start();
include '../inc/connection.php';
// if($_SERVER['REQUEST_METHOD']==="POST"){



if(isset($_POST['btn_submit'])){
$gid = $_POST['gradeid'];
$subjdesc =  $_POST['dropsubj'];
$activity = $_POST['activity'];
$desc = $_POST['desc'];
$instructions = $_POST['instruction'];
if($subjdesc== "No Subjects"){
  
    $_SESSION['status'] = "Please Add Subjects First!";
    $_SESSION['status_code']= "error";
    header('Location:../teacher/viewstudentssubj.php');
}
if($activity == "Select Activity"){
    $_SESSION['status'] = "Please Select Activity!";
    $_SESSION['status_code']= "error";
    header('Location:../teacher/viewquizzes.php');
}
if($subjdesc == "Select Grade"){
    $_SESSION['status'] = "Please Select Grade!";
    $_SESSION['status_code']= "error";
    header('Location:../teacher/viewquizzes.php');

}
else{

   // kunin mo ung subject id at yan ilagay mo
    $query = "SELECT subjectid from subjects where subjdesc =:desc";
    $stmt = $PDO->prepare($query);
    $stmt ->bindValue(':desc',$subjdesc);
    $stmt ->execute();
    $values= $stmt->fetch(PDO::FETCH_ASSOC);
    $subjectid = $values['subjectid'];
          
// test mo kung existing na yong account
$existingquery = "SELECT * FROM questionscategory where subjectcategory= '$subjdesc' AND quizdesc ='$desc' AND activity = '$activity' AND gradeid= '$gid'";
$stmt= $PDO->prepare($existingquery);
$stmt->execute();
$count = $stmt->rowCount();
if($count>0){
    echo "Existing";
    $_SESSION['status'] = "Activity Category is Already Existed";
    $_SESSION['status_code']= "error";
    header('Location:../teacher/viewquizzes.php');
}
else{

       $query = "INSERT INTO questionscategory
       (subjectid,subjectcategory,quizdesc,activity,gradeid,instructions)
       VALUES
       (:subid,:sub,:desc,:act,:gradeid,:ins)";
        $stmt = $PDO->prepare($query);
        $stmt->bindValue(':subid',$subjectid);
        $stmt->bindValue(':sub',$subjdesc);
        $stmt->bindValue(':desc',$desc);
        $stmt->bindValue(':act',$activity);
        $stmt->bindValue(':gradeid',$gid);
        $stmt->bindValue(':ins',$instructions);
        $result = $stmt->execute();

        $_SESSION['status'] = "$subjdesc"." $desc"." added Successfully!";
        $_SESSION['status_code']= "success";
        header('Location:../teacher/viewquizzes.php');

        // echo "<script type = 'text/javascript'>alert('Insert Successfully');
        //        window.location.href='../teacher/viewquizzes.php';</script>";

    }
}
}

// Fetching the data of Grade in database
try {


    $query1 = "SELECT * from grade "; //subjects
    $stmt1 = $PDO->query($query1);
    $stmt1 ->execute();
    $result = $stmt1->fetchAll();
} catch (Exception $e) {
    echo ($e ->getMessage());
}

?>
        <div class ="boxes bg-transparent bg-gradient p-2 mt-1">
        <p>
            Create Question Category
        </p>
            <div class="form-group mb-2 form-floating">
                <select name="gradeid" id="gradeid" onchange = "fetchSubject(this.value)" class="form-control input-sm input-size form-select" aria-label="Select Barangay" required>
                <option disabled selected>Select Subject</option>
                    <?php 
                        foreach($result as $subjects) {
                    ?>
                <option value ="<?= $subjects["gradeid"]?>"><?= $subjects["grade"] ?></option>
                    <?php } ?>
                </select>
                <label for ="gradeid">Grade</label>
            </div>
            <hr class ="bg-primary border-1 border-top border-primary">

<!-- subjects -->

            <div class="form-group mb-2 form-floating">
              
                <select name="dropsubj" id="dropsubj" class="form-control input-sm input-size form-select" aria-label="Select Subjects" required>
                        <option>Select Grade</option>
       
                </select>
                <label for ="dropsubj">Subject</label>
            </div>
            <div class="form-group mb-2 form-floating">
              
              <select name="activity" id="activity" class="form-control input-sm input-size form-select" aria-label="Select Activity" required>
                      <option disabled selected>Select Activity</option>
                      <option>Assignment</option>
                      <option>Quizzes</option>
                      <option>Exam</option>
                      <option>Homework</option>
              </select>
              <label for ="activity">Activitiy</label>
          </div>

            <div class="mb-1 form-floating">
                <input type="text" class="form-control" id="desc" name="desc" 
                placeholder="Description"required  >
                <label for="desc" required>Activity Descriptions</label>
            </div>

            <div class="mb-1 form-floating">
                <input type="text" class="form-control" id="instruction" name="instruction" 
                placeholder="Instruction"required  >
                <label for="instruction" required>Activity Instruction</label>
            </div>
    </div>
    </div>

<script>
    $(document).ready(function() {
    });
function fetchSubject(id){
    $('#dropsubj').html('');
    $('#gid').html('');
    $.ajax({
        type:'post',
        url:'../function/ajax_fetch.php',
        data:{
            gradeid:id
        },
        success:function(data){
            $('#dropsubj').html(data);
        }
    })
}
   
</script>