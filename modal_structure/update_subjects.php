<?php 
session_start();
include '../inc/connection.php';
$uid = $_POST['id'] ?? null;

if(!$uid){
    header('Location:../teacher/viewstudents.php');
    exit;
}
// prepare na natin yong query natin para makuha yong value ng subject base sa id nia at i babato natin sa mga fields
$query = "SELECT * FROM subjects where subjectid = :uid";

$stmt = $PDO->prepare($query);
$stmt -> bindValue(':uid',$uid);
$stmt ->execute();
$values= $stmt->fetch(PDO::FETCH_ASSOC);

$subjdesc = $values['subjdesc'];
$gradeid = $values['gradeid'];

$query2 = "SELECT grade from grade where gradeid = :gid";
$stmt = $PDO->prepare($query2);
$stmt -> bindValue(':gid',$gradeid);
$stmt ->execute();
$values= $stmt->fetch(PDO::FETCH_ASSOC);

$grade = $values['grade'];

if(isset($_POST['btn_update'])){ // if pipindutin na tin ung update btn
    
    $subjdesc = $_POST['subjdesc'];
    $gradeid = $_POST['drop_grade'];

    $query2 = "SELECT gradeid from grade where grade = :gid";
    $stmt = $PDO->prepare($query2);
    $stmt -> bindValue(':gid',$gradeid);
    $stmt ->execute();
    $values= $stmt->fetch(PDO::FETCH_ASSOC);
    $grade = $values['gradeid'];


    $query = "UPDATE subjects
            SET
            subjdesc    = :desc,
            gradeid       = :gid
            WHERE subjectid  = :id";

        $stmt = $PDO->prepare($query);
        
        $stmt->bindValue(':id',     $uid);
        $stmt->bindValue(':desc',     $subjdesc);
        $stmt->bindValue(':gid',     $grade);

        // var_dump($stmt); 
        // die();
        $stmt->execute();

                $_SESSION['status'] = "$subjdesc"." subject Successfully Updated!";
                $_SESSION['status_code']= "success";
                header('Location:../teacher/viewstudentssubj.php');
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
          Update Subject
        </p>
        <div class="mb-1 form-floating">
                <input type = "hidden" name = "id" value = "<?=$uid; ?>"> <!--pang where clause natin-->
            
                <input type="text" class="form-control" id="subjdesc" name="subjdesc" 
                value = "<?= $subjdesc?>"
                placeholder="Subject Description"required  >
                <label for="subjdesc" required>Subject Description</label>

            </div>
            <div class="form-group mb-2 form-floating">
                <select name="drop_grade" id="drop_grade" class="form-control input-sm input-size form-select"  required>
                <option selected><?= $grade?></option>
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

