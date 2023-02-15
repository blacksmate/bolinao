<?php
session_start();
include '../inc/connection.php';



if(isset($_POST['btn_submit'])){
$tagalog = $_POST['tagalog'];
$ilocano = $_POST['ilocano'];
$file_name = basename($_FILES['upload_file']['name']);
$temp = $_FILES['upload_file']['tmp_name'];
$imagetype = $_FILES['upload_file']['type'];
$size = $_FILES['upload_file']['size'];
    if (($imagetype == "image/jpeg" || $imagetype == "image/jpg" || $imagetype == "image/png" || $imagetype == "image/bmp") && $size <= 2048000) {
        if(move_uploaded_file($temp, '../image/'.$file_name)){
            $image = $file_name;
            $existing = "SELECT * FROM tagalogilocano WHERE word_tagalog = '$tagalog' OR word_ilocano ='$ilocano'";
            $stmt= $PDO->query($existing);
            $stmt->execute();
            $count = $stmt->rowCount();

            if($count>0){
                $_SESSION['status'] = "Subject is Already Existed";
                $_SESSION['status_code']= "error";
                header('Location:../teacher/add_dictionary.php');
            }
            else{
                $query = "INSERT INTO tagalogilocano
                (word_tagalog,word_ilocano, image)
                VALUES
                (:wt,:ti, :img)";
                $stmt = $PDO->prepare($query);
                $stmt->bindValue(':wt',$tagalog);
                $stmt->bindValue(':ti',$ilocano);
                $stmt->bindValue(':img',$image);
                $result = $stmt->execute();

                $_SESSION['status'] = "Word successfully Inserted";
                $_SESSION['status_code']= "success";
                header('Location:../teacher/add_dictionary.php');
                }

        }
    }
    else{

// test if existing na ung word
$existing = "SELECT * FROM tagalogilocano WHERE word_tagalog = '$tagalog' OR word_ilocano ='$ilocano'";
$stmt= $PDO->query($existing);
$stmt->execute();
$count = $stmt->rowCount();

if($count>0){
    $_SESSION['status'] = "Subject is Already Existed";
    $_SESSION['status_code']= "error";
    header('Location:../teacher/add_dictionary.php');
}
else{
    $query = "INSERT INTO tagalogilocano
    (word_tagalog,word_ilocano)
    VALUES
    (:wt,:ti)";
    $stmt = $PDO->prepare($query);
    $stmt->bindValue(':wt',$tagalog);
    $stmt->bindValue(':ti',$ilocano);
    $result = $stmt->execute();

    $_SESSION['status'] = "Word successfully Inserted";
    $_SESSION['status_code']= "success";
    header('Location:../teacher/add_dictionary.php');
    }
}
}

?>