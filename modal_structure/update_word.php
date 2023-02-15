<?php 
session_start();
include '../inc/connection.php';
$uid = $_POST['id'] ?? null;


// prepare na natin yong query natin para makuha yong value ng subject base sa id nia at i babato natin sa mga fields
$query = "SELECT * FROM `tagalogilocano` where id_tagalog = :uid";

$stmt = $PDO->prepare($query);
$stmt -> bindValue(':uid',$uid);
$stmt ->execute();
$values= $stmt->fetch(PDO::FETCH_ASSOC);

$fetch_tagalog = $values['word_tagalog'];
$fetch_ilocano = $values['word_ilocano'];


if(isset($_POST['btn_update'])){ // if pipindutin na tin ung update btn
   

    $tagalog = $_POST['tagalog'];
    $ilocano = $_POST['ilocano'];
    $uid = $_POST['uid'];


    $query = "UPDATE tagalogilocano
            SET
            word_tagalog    = '$tagalog',
            word_ilocano       = '$ilocano'
            WHERE id_tagalog  = '$uid'";

        $stmt = $PDO->prepare($query);
        
        // $stmt->bindValue(':id',     $uid);
        // $stmt->bindValue(':tagalog',     $tagalog);
        // $stmt->bindValue(':ilocano',     $ilocano);

        // var_dump($stmt); 
        // die();
        $stmt->execute();

        var_dump($stmt);
                $_SESSION['status'] = " Word Successfully Updated!";
                $_SESSION['status_code']= "success";
                header('Location:../teacher/add_dictionary.php');
}

?>
        <div class ="boxes bg-transparent bg-gradient p-2 mt-1">
        <p>
          Update Word
        </p>
        <div class="mb-1 form-floating">
        <input type = "hidden" name = "uid" id = "uid" value = "<?= $uid ?>"> 
        <input type="text" class="form-control" id="tagalog" name="tagalog" value ="<?=$fetch_tagalog?>";
        placeholder="Tagalog Word"required >
        <label for="tagalog">Tagalog Word</label>
    </div>
    <div class="mb-1 form-floating">
        <input type="text" class="form-control" id="ilocano" name="ilocano" value="<?=$fetch_ilocano?>"; 
        placeholder="ilocano"required >
        <label for="ilocano">Ilocano Word</label>
    </div>
            <hr class ="bg-primary border-1 border-top border-primary">
    </div>

