
<?php 
session_start();
include '../inc/connection.php';
$uid = $_POST['id'] ?? null;

if(!$uid){
    header('Location:../teacher/viewstudents.php');
    exit;
}
// prepare na natin yong query natin
$query = "SELECT * FROM userinfo where uid = :uid";
$stmt = $PDO->prepare($query);
$stmt -> bindValue(':uid',$uid);
$stmt ->execute();
$values= $stmt->fetch(PDO::FETCH_ASSOC);
     //kukunin natin ung existing data sa database base dun sa id nila at
    //i papasa natin sa natin yong mga yon sa mga designated variables
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

if(isset($_POST['btn_update'])){ // if pipindutin na tin ung update btn
    $_fullname = strtoupper($_POST['fullname']);
    $_email = $_POST['email'];
    $_password = $_POST['password'];
    $_address = $_POST['address'];
    $_contactno =$_POST['contactno'];
    $gradeid = $_POST['drop_grade'];

    $query2 = "SELECT gradeid from grade where grade = :gid";
    $stmt = $PDO->prepare($query2);
    $stmt -> bindValue(':gid',$gradeid);
    $stmt ->execute();
    $values= $stmt->fetch(PDO::FETCH_ASSOC);
    $_gradeid = $values['gradeid'];

   

    $query = "UPDATE userinfo
            SET
            fullname    = :fn,
            email       = :em,
            password    = :pass,
            address     = :add,
            mobileno   = :cno,
            gradeid       = :drpgrade
            WHERE uid = :id";
        $stmt = $PDO->prepare($query);
        $stmt->bindValue(':id',     $uid);
        $stmt->bindValue(':fn',     $_fullname);
        $stmt->bindValue(':em',     $_email);
        $stmt->bindValue(':pass',   $_password);
        $stmt->bindValue(':add',    $_address);
        $stmt->bindValue(':cno',    $_contactno);
        $stmt->bindValue(':drpgrade',$_gradeid);
        $stmt->execute();
 
   

            $_SESSION['status'] = "$_fullname"."  Successfully Updated!";
            $_SESSION['status_code']= "success";
            header('Location:../teacher/viewstudents.php');
}

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
            Update Students
        </p>
            <div class="mb-1 form-floating">
                <input type = "hidden" name = "id" value = "<?=$uid; ?>"> <!--pang where clause natin-->
            
                <input type="text" class="form-control" id="fullname" name="fullname" 
                value = "<?= $_fullname?>"
                placeholder="Last First Middle"required  >
                <label for="fullname" required>Fullname</label>

            </div>
            <div class="mb-1 form-floating">
                <input type="email" class="form-control" id="email" name="email"
                value = "<?= $_email ?>"
                laceholder="Email"required >
                <label for="username" required>Email</label>

            </div>
            <div class="mb-1 form-floating">
                <input type="text" class="form-control" id="password" name="password" 
                value = "<?= $_password?>"
                placeholder="Password"required >
                <label for="password">Password</label>
            </div>
            <div class="mb-1 form-floating">
                <input type="text" class="form-control" id="address" name="address" 
                value = "<?= $_address?>" 
                placeholder="Password" required>
                <label for="address">Address</label>
            </div>
            <div class="mb-1 form-floating">
                <input type="text" class="form-control" id="cno" name="contactno" 
                value = "<?= $_contactno?>"
                placeholder="Contact Number" required>
                <label for="cno">Contact Number</label>
            </div>
            <div class="form-group mb-2 form-floating">
                <select name="drop_grade" id="drop_grade" class="form-control input-sm input-size form-select" aria-label="Select Barangay" required>
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

