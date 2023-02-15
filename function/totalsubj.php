<?php 

function gettotalsub (){
include "../inc/connection.php";

    $query = "SELECT COUNT(*) as total FROM subjects "; //'$condition'
    $stmt = $PDO->query($query);
   
    $count = $stmt->fetchColumn();
    if($count > 0 ){
        print "There are " .  $count . " record/s.";
    }
    else{
        print "There are " .  $count . " record/s.";
    }

}


function gettotalsubj1 (){
    include "../inc/connection.php";
    
        $query = "SELECT COUNT(*) as total FROM subjects where gradeid= 'g1'"; //'$condition'
        $stmt = $PDO->query($query);
       
        $count = $stmt->fetchColumn();
        if($count > 0 ){
            print "There are " .  $count . " record/s.";
        }
        else{
            print "There are " .  $count . " record/s.";
        }
    
    }
    
    function gettotalsubj2 (){
        include "../inc/connection.php";
        
            $query = "SELECT COUNT(*) as total FROM subjects where gradeid= 'g2'"; //'$condition'
            $stmt = $PDO->query($query);
           
            $count = $stmt->fetchColumn();
            if($count > 0 ){
                print "There are " .  $count . " record/s.";
            }
            else{
                print "There are " .  $count . " record/s.";
            }
        
        }
        function gettotalsubj3 (){
            include "../inc/connection.php";
            
                $query = "SELECT COUNT(*) as total FROM subjects where gradeid= 'g3'"; //'$condition'
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