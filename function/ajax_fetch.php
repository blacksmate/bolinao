
<?php 
session_start();
include '../inc/connection.php';
// if($_SERVER['REQUEST_METHOD']==="POST"){


        if($_POST['gradeid']){
        $query = "SELECT * from subjects where gradeid =:id";
        $stmt = $PDO->prepare($query);
        $stmt ->bindValue(':id',$_POST['gradeid']);
        $stmt ->execute();
        $count = $stmt->rowCount();
        if($count>0){
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo '<option>'.$row['subjdesc'].'</option>';
                
            }
 
        }
        else{
            echo '<option>No Subjects</option>';
        }
    
    }
    