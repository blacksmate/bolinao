
<?php 
session_start();
include '../inc/connection.php';
$uid = $_POST['id'];
$query = "SELECT * FROM questionscategory where id = '$uid'";
$stmt = $PDO->prepare($query);
$stmt ->execute();
$values= $stmt->fetch(PDO::FETCH_ASSOC);
$categ = $values['subjectcategory'];
$subjid = $values['subjectid'];

$query = "SELECT * FROM question where qcid = '$uid'";
$stmt = $PDO->query($query);
$stmt ->execute();
$values= $stmt->fetch(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();
if($count > 0){
    $query = "SELECT *  FROM question where qcid = '$uid' order by question_number desc limit 1 ";
    $stmt = $PDO->query($query);
    $stmt ->execute();
    $values= $stmt->fetch(PDO::FETCH_ASSOC);
    $next = $values['question_number'];
    ++$next;    
}
else{
    $next = 1;
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
                <p class = "mb-1">
                    Create Questions for <b class = 'fs-4 '><?= $categ?></b>
                </p>
                <input type = "hidden" name = "id" id = "id" value = "<?=$uid ?>"> <!-- ito yong mag hohold ng variable sa id na ilalagay mo sa question under qcid -->
                <input type = "hidden" name = "subjectid" id = "subjectid" value = "<?=$subjid ?>"> <!-- ito naman ung mag hohold para sa ilalagay mo sa question under subjectid -->
                <div class="mb-1 form-floating">
                    <input type="number" class="form-control" id="questionno" name="questionno" 
                    value = <?=$next ?>
                    placeholder="Question no"required  readonly>
                    <label for="questionno" >Question no.</label>

                </div>
                <div class="mb-1 form-floating">
                    <input type="test" class="form-control" id="question" name="question"
                placeholder="question" >
                    <label for="question" >Question</label>

                </div>
                <hr class ="bg-primary border-1 border-top border-primary">
                <p class = "h5">  OR image</p>
                <!-- or image -->
                <div class="mb-3">
                    <label for="upload_file" class="form-label">Question Image File</label>
                    <input class="form-control" type="file"  onchange ="getImagePreview(event)"
                     name = "upload_file" accept = "image/jpg, image/jpeg, image/png" id="upload_file">
                </div>
                <div class = "form-group mb-3" id = "preview" style="text-align:center">
                    <i id = "preview" width = "100px" height = "300px"></i>
                </div>
                <div class="mb-1 form-floating">
                    <input type="text" class="form-control" id="opt1" name="opt1" 
                    placeholder="opt1"required >
                    <label for="opt1">Option 1</label>
                </div>
                <div class="mb-1 form-floating">
                    <input type="text" class="form-control" id="opt2" name="opt2" 
                    placeholder="opt2"required >
                    <label for="opt2">Option 2</label>
                </div>
                <div class="mb-1 form-floating">
                    <input type="text" class="form-control" id="opt3" name="opt3" 
                    placeholder="opt3"required >
                    <label for="opt3">Option 3</label>
                </div>
        

                <div class="mb-1 form-floating">
                    <input type="number" max= "3" min= "1" class="form-control" id="answer" name="answer" 
                    placeholder="answer" required>
                    <label for="answer">Answer</label>
					
                </div>
            </div>
        
            <div class="col-md-12 mt-4">
            <p>
                   List of Questions <b class = 'fs-4'><?= $categ?></b>
                </p>
                <div class="table-responsive">
                        <table id="example" class="example table-bordered table-secondary   table-striped table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    
                                    <th>Question Category ID</th>
                                    <th>Question Id</th> 
                                    <th>Question </th>
       
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Question Category ID</th>
                                    <th>Question Id</th> 
                                    <th>Question </th>
                
                                    <th> Action </th>
                                </tr>
                            </tfoot>
                        </table>
                        </div>
                <hr class ="bg-primary border-1 border-top border-primary">
        </div>
    </div>
</div>
<script>
// **********   Script for updating question   **********
$('#example').on('click', '.edit ', function(){
      var table = $('#example').DataTable();

      var id = $(this).data('id');
   
      $.ajax({
        url : '../modal_structure/update_questions.php',
        data: {
          id: id
        },
        type: 'post',
        success: function(respose) {
            $('#updateQuestion').modal('show');
            $('.modal-body-edit').html(respose);
        }
      })
    });


    $('#example').on('click', '.del ', function(){
      var table = $('#example').DataTable();

      var id = $(this).data('id');
      var qcid = document.getElementById("id").value;

      $.ajax({
        url : '../modal_structure/delete_question.php',
        data: {
          id: id,
          qcid:qcid
        },
        type: 'post',
        success: function(respose) {
            $('#deleteQuestion').modal('show');
            $('.modal-body-del').html(respose);
        }
      })
    });
    
$(document).ready(function() {
    // para mag dim ang second modal
    $('#updateQuestion').on('show.bs.modal', function () {
        $('#addQuestion').css('z-index', 1050);
    });

    $('#updateQuestion').on('hidden.bs.modal', function () {
        $('#addQuestion').css('z-index', 1070);
    });

    $('#deleteQuestion').on('show.bs.modal', function () {
        $('#addQuestion').css('z-index', 1050);
    });

    $('#deleteQuestion').on('hidden.bs.modal', function () {
        $('#addQuestion').css('z-index', 1070);
    });

    fetch_data();

    function fetch_data(condition = '')
 {
  var dataTable = $('#example').DataTable({
    "fnCreatedRow": function(nRow, aData, iDataIndex) {
          $(nRow).attr('id', aData[0]);
          
        },
   "processing" : true,
   "serverSide" : true,
   "order" : [],
   "ajax" : {
    url:"../function/fetch_data_question.php",
    type:"POST",
    data:{
        condition:document.getElementById('id').value
    }// KUNIN MO UNG VALUE NG ID NA NAKA HIDDEN
   }

 });

 }


    });

    function getImagePreview(event){
    var image = URL.createObjectURL(event.target.files[0]);
    var imagediv = document.getElementById('preview');
    var newimg = document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width = "300";
    newimg.height = "150";
    imagediv.appendChild(newimg);

    }
</script>
<style>
    #updateQuestion {z-index:1061;}
    #deleteQuestion {z-index:1061;}
    .modal { overflow-y: auto }

</style>