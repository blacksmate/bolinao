
<?php
session_start();
include '../inc/connection.php';
  if(isset($_POST['btn_login']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query ="SELECT * from userinfo where email = :em and password = :pw";
    $stmt = $PDO->prepare($query);
    // $stmt->bindValue(':em',$_fullname);
    // $stmt->bindValue(':pw', $_email);
    //or pupwede mong gamitin
    $stmt->execute(  
        array(  
             ':em'     =>     $_POST["username"],  
             ':pw'     =>     $_POST["password"]  
        )  
   );  
    // fetch data   
    $values= $stmt->fetch(PDO::FETCH_ASSOC);
    $count = $stmt->rowCount();  
    if( $count > 0){
        $_SESSION['gradeid'] = $values['gradeid'];
        $_SESSION['users'] = $values['fullname'];
        $_SESSION['uid'] = $values['uid'];
        $_SESSION['username'] = $_POST['username'];

        $_SESSION['status'] = "Login Successfully!";
        $_SESSION['status_code']= "success";
        header("location: ../user_dashboard.php");
        
    }
    else if(empty($_POST['username']) || empty($_POST['password'])){
        $_SESSION['status'] = "Missing Username/Password!";
        $_SESSION['status_code']= "error";
        header("location: ../login.php");
    }
    else{
        // $qstring = "?status=err";
        $_SESSION['status'] = "Incorrect Username/Password!";
        $_SESSION['status_code']= "error";
        header("location: ../login.php");
        // header("location: ../login.php".$qstring);
    }
}

      

?>