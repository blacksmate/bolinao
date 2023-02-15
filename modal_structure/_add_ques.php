<?php
session_start();
include '../inc/connection.php';
$uid = $_POST['id'] ?? null;


if(isset($_POST['btn_submit'])){
    // ito muna una mung ipasok
    $qno = trim($_POST['questionno']);
    $question = trim($_POST['question']);
// sunod na mga options
    $opt1 = trim($_POST['opt1']);
    $opt2 = trim($_POST['opt2']);
    $opt3 = trim($_POST['opt3']);
    $answer = $_POST['answer'];
    $subjectid = $_POST['subjectid'];

//  choice array
$choice = array();
$choice[1] = $_POST['opt1'];
$choice[2] = $_POST['opt2'];
$choice[3] = $_POST['opt3'];



    // check the question number
    
    $query ="SELECT * from question where qcid = :id AND question_number = :qno";
    $stmt = $PDO->prepare($query);
    $stmt->bindValue(':id',$uid);
    $stmt->bindValue(':qno',$qno);
    $stmt->execute();
    // fetch data   
    $count = $stmt->rowCount();
    if( $count > 0){
        $_SESSION['status'] = "Please double check the id number";
        $_SESSION['status_code']= "error";
        header('Location:../teacher/viewquizzes.php');
        // echo "<script type = 'text/javascript'>alert('Please double check the id number');
        // window.location.href='../teacher/viewquizzes.php';</script>";
    }
    else{
        
        if($_POST['question']){


            $query = "INSERT INTO question
            (question_number, question_text , subjectid, qcid)
            VALUES
            (:qno,:ques,:subjid,:qcid)";
            $stmt = $PDO->prepare($query);
            $stmt->bindValue(':qno',$qno);
            $stmt->bindValue(':ques',$question);
            $stmt->bindValue(':subjid',$subjectid);
            $stmt->bindValue(':qcid',$uid);
            $result = $stmt->execute();

            foreach($choice as $option => $value){
                if($value != ""){
                    if($answer == $option){
                        $is_correct = 1;
                    }else{
                        $is_correct = 0;
                    }
       
                    //Second Query for Choices Table
                    $query = "INSERT INTO options (";
                    $query .= "question_number,qcid,is_correct,coption)";
                    $query .= " VALUES (";
                    $query .=  "'{$qno}','{$uid}','{$is_correct}','{$value}' ";
                    $query .= ")";
                    $stmt = $PDO->prepare($query);
                    $result = $stmt->execute();
                
                    // Validate Insertion of Choices
                    $_SESSION['status'] = " Question is Successfully Inserted ";
                    $_SESSION['status_code']= "success";
                    header('Location:../teacher/viewquizzes.php');
                    // window.location.href='../teacher/viewquizzes.php';
                }
            }
        }   
        else{
            //dito naman ung image
            //  mag initialize ka dito para makuha ang image 
            $file_name = basename($_FILES['upload_file']['name']);
            $temp = $_FILES['upload_file']['tmp_name'];
            $imagetype = $_FILES['upload_file']['type'];
            $size = $_FILES['upload_file']['size'];
            if(($imagetype=="image/jpeg" || $imagetype=="image/jpg" || $imagetype=="image/png" || $imagetype=="image/bmp") && $size<=2048000){
                            
                if(move_uploaded_file($temp, '../image/'.$file_name)){
                    $image = $file_name;
                    $query = "INSERT INTO question
                    (question_number, question_text , subjectid, qcid)
                    VALUES
                    (:qno,:ques,:subjid,:qcid)";
                    $stmt = $PDO->prepare($query);
                    $stmt->bindValue(':qno',$qno);
                    $stmt->bindValue(':ques',$image);
                    $stmt->bindValue(':subjid',$subjectid);
                    $stmt->bindValue(':qcid',$uid);
                    $result = $stmt->execute();
        
                    foreach($choice as $option => $value){
                        if($value != ""){
                            if($answer == $option){
                                $is_correct = 1;
                            }else{
                                $is_correct = 0;
                            }
               
                            //Second Query for Choices Table
                            $query = "INSERT INTO options (";
                            $query .= "question_number,qcid,is_correct,coption)";
                            $query .= " VALUES (";
                            $query .=  "'{$qno}','{$uid}','{$is_correct}','{$value}' ";
                            $query .= ")";
                            $stmt = $PDO->prepare($query);
                            $result = $stmt->execute();

                            $_SESSION['status'] = " Question is Successfully Inserted";
                            $_SESSION['status_code']= "success";
                            header('Location:../teacher/viewquizzes.php'); 
                            // Validate Insertion of Choices
                            // echo "<script type = 'text/javascript'>alert('Insert Successfully');
                            // window.location.href='../teacher/viewquizzes.php';</script>";
                        }
                    }
                }
            }
        }
    }
}