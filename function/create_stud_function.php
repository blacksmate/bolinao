<?php
include '../inc/connection.php';
if($_SERVER['REQUEST_METHOD']==="POST"){
    $_fullname = trim($_POST['fullname']);
    $_email = trim($_POST['email']);
    $_password = trim($_POST['password']);
    $_address = trim($_POST['address']);
    $_contactno = trim($_POST['contactno']);
    $errors = []; 
    if(empty($_fullname)){
        $errors[] = 'fullname is required';
    }
    if(empty($_email)){
        $errors[] = 'email is required';
    }
    if(empty($_password)){
        $errors[] = 'password is required';
    }
    if(empty($_address)){
        $errors[] = 'address is required';
    }
    if(empty($_contactno)){
        $errors[] = 'contactno is required';
    }
    
    if(empty($errors)){
        $query = "INSERT INTO userinfo
        (fullname,email,password,address,mobileno)
        VALUES
        (?,?,?,?,?)";
         $stmt = $con->prepare($query);
         $stmt->bind_param("sssss",$_fullname,$_email,$_password,$_address,$_contactno);//bind then execute
        
        
         $result = $stmt->execute();
    
         $qstring = "?status=succ";
                header("location: ../signup.php");
    }
}