<?php 

function gettotal (){
include "../inc/connection.php";

    $query = "SELECT COUNT(*) as total FROM tagalogilocano "; //'$condition'
    $stmt = $PDO->query($query);
   
    $count = $stmt->fetchColumn();
    if($count > 0 ){
        print "There are " .  $count . " record/s.";
    }
    else{
        print "There are " .  $count . " record/s.";
    }

}

?>