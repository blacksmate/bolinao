
<?php 
session_start();
include '../inc/connection.php';
// if($_SERVER['REQUEST_METHOD']==="POST"){
if(isset($_POST['btn_submit'])){
    $_fullname = trim(strtoupper($_POST['fullname']));
    $_email = trim($_POST['email']);
    $_password = trim($_POST['password']);
    $_address = trim($_POST['address']);
    $_contactno = trim($_POST['contactno']);
    $igrade = $_POST['drop_grade'];
    //gagawa tayo ng query para makuha yong value ng id para sa grade
    $query = "SELECT gradeid FROM grade where grade = :grade";
    $stmt = $PDO->prepare($query);
    $stmt -> bindValue(':grade',$igrade);
    $stmt -> execute();
    $values= $stmt->fetch(PDO::FETCH_ASSOC);
    $_grade = $values['gradeid'];

// test mo kung existing na yong account
$existingquery = "SELECT * FROM userinfo where fullname= '$_fullname' AND email ='$_email'";
$stmt= $PDO->prepare($existingquery);
$stmt->execute();
$count = $stmt->rowCount();
if($count>0){
    echo "Existing";
    $_SESSION['status'] = "Student is Already Existed";
    $_SESSION['status_code']= "error";
    header('Location:../teacher/viewstudents.php');
}
else{



    $query1 ="SELECT * from userinfo order by uid desc limit 1";
    $ey = $PDO->query($query1);
    $ey->execute();
    $values= $ey->fetch(PDO::FETCH_ASSOC);
    $result = $ey->rowCount();
        if(($result)>0){
            $uid = $values['uid'];
                $get_numbers = str_replace("stduid","",$uid);
                $id_increase = ++$get_numbers;
                $get_string = str_pad($id_increase,6,0,STR_PAD_LEFT); //changing 6 to 1
                $_newid = "stduid".$get_string;
          
                $query = "INSERT INTO userinfo
                (uid, fullname,email,password,address,mobileno,gradeid)
                VALUES
                (:id,:fn,:em,:pass,:add,:cno,:grade)";
                $stmt = $PDO->prepare($query);
                $stmt->bindValue(':id',$_newid);
                $stmt->bindValue(':fn',$_fullname);
                $stmt->bindValue(':em', $_email);
                $stmt->bindValue(':pass',$_password);
                $stmt->bindValue(':add',$_address);
                $stmt->bindValue(':cno',$_contactno);
                $stmt->bindValue(':grade',$_grade);
                $result = $stmt->execute();
    
                // echo "<script type = 'text/javascript'>alert('Insert Successfully');
                //         window.location.href='../teacher/viewstudents.php';</script>";

            $_SESSION['status'] = "$_fullname"." added Successfully!";
            $_SESSION['status_code']= "success";
            header('Location:../teacher/viewstudents.php');
        }

        else{
            $_newid = "stduid000001";
            $query = "INSERT INTO userinfo
            (uid, fullname,email,password,address,mobileno,gradeid)
            VALUES
            (:id,:fn,:em,:pass,:add,:cno,:grade)";
            $stmt = $PDO->prepare($query);
            $stmt->bindValue(':id',$_newid);
            $stmt->bindValue(':fn',$_fullname);
            $stmt->bindValue(':em', $_email);
            $stmt->bindValue(':pass',$_password);
            $stmt->bindValue(':add',$_address);
            $stmt->bindValue(':cno',$_contactno);
            $stmt->bindValue(':grade',$_grade);
            $result = $stmt->execute();

            $_SESSION['status'] = "$_fullname"."  Successfully Added!";
            $_SESSION['status_code']= "success";
            header('Location:../teacher/viewstudents.php');
        }

    

   
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
            Create New Account for Students
        </p>
            <div class="mb-1 form-floating">
                <input type="text" class="form-control" id="fullname" name="fullname" 
                
                placeholder="Last First Middle"required  >
                <label for="fullname" required>Fullname</label>
            </div>
            <div class="mb-1 form-floating">
                <input type="email" class="form-control" id="email" name="email" value = "<?php isset($_POST['email'])?>"
              placeholder="Email"required >
                <label for="username" required>Email</label>

            </div>
            <div class="mb-1 form-floating">
                <input type="password" class="form-control" id="password" name="password" 
                placeholder="Password"required >
                <label for="password">Password</label>
            </div>
            <div class="mb-1 form-floating">
                <input type="text" class="form-control" id="address" name="address" 
                 placeholder="Password" required>
                <label for="address">Address</label>
            </div>
            <div class="mb-1 form-floating">
                <input type="text" class="form-control" id="cno" name="contactno" 
               placeholder="Contact Number" required>
                <label for="cno">Contact Number</label>
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

