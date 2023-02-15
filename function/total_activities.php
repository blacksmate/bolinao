<?php 

function gettotalact (){
include "../inc/connection.php";

    $query = "SELECT COUNT(*) as total FROM questionscategory "; //'$condition'
    $stmt = $PDO->query($query);
   
    $count = $stmt->fetchColumn();
    if($count > 0 ){
        print "There are " .  $count . " record/s.";
    }
    else{
        print "There are " .  $count . " record/s.";
    }

}


function gettotalact1 (){
    include "../inc/connection.php";
    
        $query = "SELECT COUNT(*) as total FROM questionscategory where gradeid='g1'"; //'$condition'
        $stmt = $PDO->query($query);
       
        $count = $stmt->fetchColumn();
        if($count > 0 ){
            print "There are " .  $count . " record/s.";
        }
        else{
            print "There are " .  $count . " record/s.";
        }
    
    }
    function gettotalact2 (){
        include "../inc/connection.php";
        
            $query = "SELECT COUNT(*) as total FROM questionscategory where gradeid='g2'"; //'$condition'
            $stmt = $PDO->query($query);
           
            $count = $stmt->fetchColumn();
            if($count > 0 ){
                print "There are " .  $count . " record/s.";
            }
            else{
                print "There are " .  $count . " record/s.";
            }
        
        }
        function gettotalact3 (){
            include "../inc/connection.php";
            
                $query = "SELECT COUNT(*) as total FROM questionscategory where gradeid='g3'"; //'$condition'
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