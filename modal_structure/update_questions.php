<?php
session_start();
include '../inc/connection.php';
$uid = $_POST['id'] ?? null;

$query = "SELECT * FROM question where id='$uid'";
$stmt = $PDO->query($query);
$res= $stmt->fetch(PDO::FETCH_ASSOC);
$question = $res['question_text']; //dito kinukuha mo ung question
$qno = $res['question_number'];//dito kinukuha mo ung question no.
$qcid = $res['qcid'];
//dun nman tayo ngayon sa options
// $query_option = "SELECT o.*,q.* FROM options o, question q where o.question_number=q.question_number and o.qcid = q.qcid";
$query_option = "SELECT * FROM options WHERE qcid = '$qcid' AND question_number = '$qno'";
$stmt1 = $PDO->query($query_option);
$opt= $stmt1->fetch(PDO::FETCH_ASSOC);
$id = $opt['qid'];
$opt1 = $opt['coption'];

if(isset($id)){
    $nextid = $id+1;


    $query_option = "SELECT * FROM options where qid='$nextid'";
    $stmt1 = $PDO->query($query_option);
    $opt= $stmt1->fetch(PDO::FETCH_ASSOC);
    $opt2 = $opt['coption'];
}
if(isset($nextid)){
    $lastid = $nextid+1;
    $query_option = "SELECT * FROM options where qid='$lastid'";
    $stmt1 = $PDO->query($query_option);
    $opt= $stmt1->fetch(PDO::FETCH_ASSOC);
    $opt3 = $opt['coption'];
}


// answer
$query_option = "SELECT * FROM options where question_number='$qno' and qcid= '$qcid' and is_correct ='1'";
$stmt1 = $PDO->query($query_option);
$optres= $stmt1->fetch(PDO::FETCH_ASSOC);
$opt= $stmt1->fetchAll();
$count = $stmt->rowCount();
if($count > 0){
    if($opt1 == $optres['coption']){
        $answerid = 1;
    }
    if ($opt2 == $optres['coption']){
        $answerid = 2;
    }
    if ($opt3 == $optres['coption']){
        $answerid = 3;
    }
}



?>
<div class ="bg-transparent bg-gradient p-2 mt-1">
    <p>
        Update Question <span class = "fw-b fs-3"><?= $qno;?>:</span>
    </p>
<input type = "hidden" name = "id" value = "<?=$uid; ?>"> <!--pang where clause natin-->
  <?php 
  //fetch.php
$connect = mysqli_connect("localhost", "root", "", "bolinao");
$query = "SELECT * FROM question where id='$uid'";
   $result = mysqli_query($connect, $query);
  while($row = mysqli_fetch_array($result))
  {
  $image_source = basename($row['question_text']);
  if(strpos($row['question_text'],'.jpg')!== false||strpos($row['question_text'],'.png')!== false ||
  strpos($row['question_text'],'.jpeg')!== false){
  ?>
    <div class="mb-1 form-floating">
        <img src="../image/<?=$image_source ?>"width = "150px" height = "150px" class = "rounded mx-auto d-block" aria-readonly="Readonly">
    </div>
<?php }
else{?>
    <div class="mb-1 form-floating">
        <textarea class="form-control" id="question" name="question" 
        style="height: 100px"
        placeholder="Question" required  readonly><?= $question?> </textarea>
        <label for="question" >Question</label>
    </div>
    <?php }
    }?>
    <div class="mb-1 form-floating">
        <input type="text" class="form-control" id="opt1" name="opt1" value ="<?=$opt1?>";
        placeholder="opt1"required >
        <label for="opt1">Option 1</label>
    </div>
    <div class="mb-1 form-floating">
        <input type="text" class="form-control" id="opt2" name="opt2" value="<?=$opt2?>"; 
        placeholder="opt2"required >
        <label for="opt2">Option 2</label>
    </div>
    <div class="mb-1 form-floating">
        <input type="text" class="form-control" id="opt3" name="opt3" value="<?=$opt3?>";
        placeholder="opt3"required >
        <label for="opt3">Option 3</label>
    </div>
    <div class="mb-1 form-floating">
        <input type="text" max= "3" min= "1" class="form-control" id="answer" name="answer" value = "<?= $answerid?>"
        placeholder="answer" required>
        
        <label for="answer">Answer</label>
    </div>
</div>
