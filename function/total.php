<?php 

function gettotal (){
include "../inc/connection.php";

    $query = "SELECT COUNT(*) as total FROM userinfo "; //'$condition'
    $stmt = $PDO->query($query);
   
    $count = $stmt->fetchColumn();
    if($count > 0 ){
        print "There are " .  $count . " record/s.";
    }
    else{
        print "There are " .  $count . " record/s.";
    }

}


function gettotalg1 (){
    include "../inc/connection.php";
    
        $query = "SELECT COUNT(*) as total FROM userinfo where gradeid = 'g1'"; //'$condition'
        $stmt = $PDO->query($query);
       
        $count = $stmt->fetchColumn();
        if($count > 0 ){
            print "There are " .  $count . " record/s.";
        }
        else{
            print "There are " .  $count . " record/s.";
        }
    
    }

    function gettotalg2 (){
        include "../inc/connection.php";
        
            $query = "SELECT COUNT(*) as total FROM userinfo where gradeid = 'g2'"; //'$condition'
            $stmt = $PDO->query($query);
           
            $count = $stmt->fetchColumn();
            if($count > 0 ){
                print "There are " .  $count . " record/s.";
            }
            else{
                print "There are " .  $count . " record/s.";
            }
        
        }
function gettotalg3 (){
    include "../inc/connection.php";
    
        $query = "SELECT COUNT(*) as total FROM userinfo where gradeid = 'g3'"; //'$condition'
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