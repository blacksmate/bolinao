<?php 
include '../inc/connection.php';
require_once '../function/fpdf184/fpdf.php';
$uid = $_POST['id'];

?>

<div class="container">
		<hr style="border-top:1px dotted #000;"/>
        <div class = "row">

        <div class="col">
			<label>From:</label>
			<input type="date" class="form-control" placeholder="Start" id = "start_date" name="start_date" autocomplete="off"/>
        </div>	

        <div class = "col"> <label>To</label>
			<input type="date" class="form-control" placeholder="End" id= "end_date" name="end_date" autocomplete="off"/>
        </div>
 
        <div class = "col">
            <br>
            <span class="btn btn-primary" name="clear" id="clear" >
                <i class="fa-solid fa-arrows-rotate"></i> 
            </span>
            </div>
        </div>

        <div class="row">
        <div class="col-md-12">
                <p class = "mb-1">
                </p>
                <input type="hidden" name="uid" id="uid" value = "<?= $uid?>">
           
            </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                   
                        <div class="card-header">
                            Datatables
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table id="example" class="table table-bordered table-secondary table-striped table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Student Name</th>
                                        <th>Date</th>
                                        <th>Score</th>
                                        <th>Total Points</th>
                                        <th>Category</th>
                                        <th>Activity Type</th>
                                    </tr>
                                </thead>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<script>
$(document).ready(function(){
    fetch_data("");


 function fetch_data(is_date_search, start_date='', end_date='', condition = '')
 {
    var dataTable = $('#example').DataTable({
    "fnCreatedRow": function(nRow, aData, iDataIndex) {
          $(nRow).attr('id', aData[0]);
          
        },
   "processing" : true,
   "serverSide" : true,
   "order" : [],
   "ajax" : {
    url:"../function/fetch_data_stud_res.php",
    type:"POST",
    data:{
        is_date_search:is_date_search, 
        start_date:start_date, 
        end_date:end_date,
        condition:document.getElementById("uid").value
    }// KUNIN MO UNG VALUE NG ID NA NAKA HIDDEN
   }

 });

 }
    
 $('#clear').click(function(){
   
   if(start != '' && end !=''){
       var start = $('#start_date').val("");
       var end = $('#end_date').val("");
       $('#example').DataTable().destroy();
       fetch_data('no');
   }
})

$('#search').click(function(){
 var start_date = $('#start_date').val();
 var end_date = $('#end_date').val();
 if(start_date != '' && end_date !='')
 {
  $('#example').DataTable().destroy();
  fetch_data('yes', start_date, end_date);
 }
 else
 {
  alert("Both Date is Required");
 }

});


$("#start_date").change(function changeSession(){
    var start_date = $('#start_date').val();
 var end_date = $('#end_date').val();
 if(start_date != '' && end_date !='')
 {
  $('#example').DataTable().destroy();
  fetch_data('yes', start_date, end_date);
 }

});
$("#end_date").change(function changeSession(){
    var start_date = $('#start_date').val();
 var end_date = $('#end_date').val();
 if(start_date != '' && end_date !='')
 {
  $('#example').DataTable().destroy();
  fetch_data('yes', start_date, end_date);
 }

});

});


</script>