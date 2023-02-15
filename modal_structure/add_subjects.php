
<?php 
session_start();
include '../inc/connection.php';
// if($_SERVER['REQUEST_METHOD']==="POST"){
if(isset($_POST['btn_submit'])){
    // kunin mo ung id nung grade
    $igrade = $_POST['drop_grade'];
    $query = "SELECT gradeid FROM grade where grade = :igrade";
    $stmt = $PDO->prepare($query);
    $stmt -> bindValue(':igrade',$igrade);
    $stmt -> execute();
    $values= $stmt->fetch(PDO::FETCH_ASSOC);
    $_grade = $values['gradeid'];
    $subjdesc = trim($_POST['subjdesc']);

  
// test mo kung existing na yong account
$existingquery = "SELECT * FROM subjects where subjdesc= '$subjdesc' AND gradeid ='$_grade'";
$stmt= $PDO->prepare($existingquery);
$stmt->execute();
$count = $stmt->rowCount();
if($count>0){
    echo "Existing";
    $_SESSION['status'] = "Subject is Already Existed";
    $_SESSION['status_code']= "error";
    header('Location:../teacher/viewstudentssubj.php');
}
else{

        $query = "INSERT INTO subjects
        (subjdesc,gradeid)
        VALUES
        (:sub,:grade)";
         $stmt = $PDO->prepare($query);
         $stmt->bindValue(':sub',$subjdesc);
         $stmt->bindValue(':grade',$_grade);
         $result = $stmt->execute();

    $_SESSION['status'] = "$subjdesc"." subject Successfully Added!";
    $_SESSION['status_code']= "success";
    header('Location:../teacher/viewstudentssubj.php');

}
}

// Fetching the data of Grade in database
try {
    $query = "SELECT grade FROM grade";
    $stmt = $PDO->query($query);
    $result = $stmt->fetchAll();
} catch (Exception $e) {
    echo ($e ->getMessage());
}
?>
        <div class ="boxes bg-transparent bg-gradient p-2 mt-1">
        <p>
            Create New Subjects
        </p>
        <div class="mb-1 form-floating">
                <input type="text" class="form-control" id="subjdesc" name="subjdesc" 
                
                placeholder="Subject Description "required  >
                <label for="subjdesc" required>Subject Description</label>

            </div>


            <div class="form-group mb-2 form-floating">
                <select name="drop_grade" id="drop_grade" class="form-control input-sm input-size form-select" aria-label="Select Barangay" required>
                    <?php 
                        foreach($result as $grades) {
                    ?>
                    <option><?= $grades["grade"] ?></option>
                    <?php } ?>
                </select>
                <label for ="drop_grade">Grade</label>
            </div>
            <hr class ="bg-primary border-1 border-top border-primary">
    </div>

