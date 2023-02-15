<?php 
session_start();
include '../inc/connection.php';

$uid = $_POST['id'] ?? null;

if(isset($_POST['btn_update'])){

//dun nman tayo ngayon sa options
$query_option = "SELECT question_number, qcid FROM question where id='$uid'";
$stmt1 = $PDO->query($query_option);
$opt= $stmt1->fetch(PDO::FETCH_ASSOC);
$qno = $opt['question_number'];
$qcid = $opt['qcid'];

// sunod na mga options
     $opt1 = trim($_POST['opt1']);
     $opt2 = trim($_POST['opt2']);
     $opt3 = trim($_POST['opt3']);

// kunin ntin ung sagot
$answer = $_POST['answer'];
// kunin natin ung id sa  options

$query_id = "SELECT qid FROM options WHERE question_number = '$qno' AND qcid = '$qcid'";
$stmtid = $PDO->query($query_id);
$res = $stmtid->fetch(PDO::FETCH_ASSOC);
$id = $res['qid'];

if(isset($id)){
    $query = "UPDATE options
    SET
    coption   = :option
     WHERE qid = :id";
    $stmt = $PDO->prepare($query); 
    $stmt->bindValue(':id',$id);
    $stmt->bindValue(':option',$opt1);
    $stmt->execute();
    $nextid = $id+1;

}
if(isset($nextid)){
   

    $query = "UPDATE options
    SET
    coption   = :option WHERE qid = :id";
    $stmt = $PDO->prepare($query); 
    $stmt->bindValue(':id',$nextid);
    $stmt->bindValue(':option',$opt2);
    $stmt->execute();
    $lastid = $nextid+1;
}  
if(isset($lastid)){


    $query = "UPDATE options
    SET
    coption   = :option
     WHERE qid = :id";
    $stmt = $PDO->prepare($query); 
    $stmt->bindValue(':id',$lastid);
    $stmt->bindValue(':option',$opt3);
    $stmt->execute();
}
// changing the value of correct answer
// una

if(isset($id) && $answer == 1){
    $correct = "1";
    $incorrect = "0";
    $query = "UPDATE options
    SET
    is_correct   = :correct
     WHERE qid = :id";
    $stmt = $PDO->prepare($query); 
    $stmt->bindValue(':id',$id);
    $stmt->bindValue(':correct',$correct);
    $stmt->execute();
    // pangalawa
    $query = "UPDATE options
    SET
    is_correct   = :correct
     WHERE qid = :id";
    $stmt = $PDO->prepare($query); 
    $stmt->bindValue(':id',$nextid);
    $stmt->bindValue(':correct',$incorrect);
    $stmt->execute();
      // pangatlo
      $query = "UPDATE options
      SET
      is_correct   = :correct
       WHERE qid = :id";
      $stmt = $PDO->prepare($query); 
      $stmt->bindValue(':id',$lastid);
      $stmt->bindValue(':correct',$incorrect);
      $stmt->execute();
}

else if(isset($nextid) && $answer == 2){

    $correct = "1";
    $incorrect = "0";
    $query = "UPDATE options
    SET
    is_correct   = :correct
     WHERE qid = :id";
    $stmt = $PDO->prepare($query); 
    $stmt->bindValue(':id',$nextid);
    $stmt->bindValue(':correct',$correct);
    $stmt->execute();

    // pangalawa
    $query = "UPDATE options
    SET
    is_correct   = :correct
        WHERE qid = :id";
    $stmt = $PDO->prepare($query); 
    $stmt->bindValue(':id',$id);
    $stmt->bindValue(':correct',$incorrect);
    $stmt->execute();
        // pangatlo
        $query = "UPDATE options
        SET
        is_correct   = :correct
        WHERE qid = :id";
        $stmt = $PDO->prepare($query); 
        $stmt->bindValue(':id',$lastid);
        $stmt->bindValue(':correct',$incorrect);
        $stmt->execute();
}

else if(isset($lastid) && $answer == 3){

    $correct = "1";
    $incorrect = "0";
    $query = "UPDATE options
    SET
    is_correct   = :correct
     WHERE qid = :id";
    $stmt = $PDO->prepare($query); 
    $stmt->bindValue(':id',$lastid);
    $stmt->bindValue(':correct',$correct);
    $stmt->execute();

    // pangalawa
    $query = "UPDATE options
    SET
    is_correct   = :correct
        WHERE qid = :id";
    $stmt = $PDO->prepare($query); 
    $stmt->bindValue(':id',$id);
    $stmt->bindValue(':correct',$incorrect);
    $stmt->execute();
        // pangatlo
        $query = "UPDATE options
        SET
        is_correct   = :correct
        WHERE qid = :id";
        $stmt = $PDO->prepare($query); 
        $stmt->bindValue(':id',$nextid);
        $stmt->bindValue(':correct',$incorrect);
        $stmt->execute();
}
$_SESSION['status'] =  "Successfully Updated!";
$_SESSION['status_code']= "success";
header('Location:../teacher/viewquizzes.php');   
}



// if($answer == 0){
//     $answer = 0;
// }
// elseif($answer == 1){
//     $answer ==1;
// }


// if(isset($id)){
//     $nextid = $id+1;
//     $query_option = "SELECT * FROM options where id='$nextid'";
//     $stmt1 = $PDO->query($query_option);
//     $opt= $stmt1->fetch(PDO::FETCH_ASSOC);

//     $query = "UPDATE options
//     SET
//     coption   = :option WHERE id = :id";
//     $stmt = $PDO->prepare($query); 
//     $stmt->bindValue(':id',$nextid);
//     $stmt->bindValue(':option',$opt2);
//     $stmt->execute();
// }
// if(isset($nextid)){
//     $lastid = $nextid+1;
//     $query_option = "SELECT * FROM options where id='$lastid'";
//     $stmt1 = $PDO->query($query_option);
//     $opt= $stmt1->fetch(PDO::FETCH_ASSOC);

//     $query = "UPDATE options
//     SET
//     coption   = :option,
//     is_correct = :answer
//      WHERE id = :id";
//     $stmt = $PDO->prepare($query); 
//     $stmt->bindValue(':id',$lastid);
//     $stmt->bindValue(':option',$opt3);
//     $stmt->bindValue(':answer',$answer);
//     $stmt->execute();
// }    