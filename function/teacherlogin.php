
<?php
session_start();
include '../inc/connection.php';
  if(isset($_POST['btn_login']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query ="SELECT * from teacher where username = :em and password = :pw";
    $stmt = $PDO->prepare($query);

    $stmt->bindValue(':em',$username);
    $stmt->bindValue(':pw', $password);
    $stmt->execute();
    // fetch data   
    $count = $stmt->rowCount();
    if( $count > 0){
        $_SESSION['teacher'] =  $_POST['username'];
        $_SESSION['start'] = time(); 
              // Ending a session in 5 hrs from the starting time.
        $_SESSION['expire'] = $_SESSION['start'] + (60*60); 
        $_SESSION['status'] = "Login Successfully!";
        $_SESSION['status_code']= "success";
        header("location: ../teacher/teacher_dashboard.php");
      
        
    }
    else if(empty($_POST['username']) || empty($_POST['password'])){
        $_SESSION['status'] = "Missing Username/Password!";
        $_SESSION['status_code']= "error";
        header("location: ../teacher.php");
    }
    else{
        // $qstring = "?status=err";
        $_SESSION['status'] = "Incorrect Username/Password!";
        $_SESSION['status_code']= "error";
        header("location: ../teacher.php");
        // header("location: ../teacher.php".$qstring);
    }
}

      

?>