<?php 
session_start();
if(!isset($_SESSION["teacher"])) {
    $_SESSION['status'] = "Please log-in first to continue";
    $_SESSION['status_code']= "error";
    header("location:../teacher.php");
    }

include '../function/total_activities.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">


    <title>Mother Tongue-Based Multilingual Education</title>
    <link rel="icon" href="img/mtml.png" type="image/ico">
    
</head>

<body>


<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <!-- offcanvas trigger -->
    <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas"        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
         <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
    </button>

    <!-- end offcanvas trigger -->
    <a class="navbar-brand fw-bold text-uppercase me-auto" href="#">MOTHER TONGUE-BASED MULTILINGUAL EDUCATION
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <form class="d-flex ms-auto">
        <div class="input-group my-3 my-lg-0">
           
        </div>
      </form>
      <ul class="navbar-nav  mb-2 mb-lg-0">
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          HELLO <?php echo strtoupper ($_SESSION['teacher']); ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../logoutteacher.php">Log-out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- end nav bar -->

<!-- offcanvas -->
<div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-body p-0">
    <nav class = "navbar-dark">
        <ul class = "navbar-nav">
            <li>
                <div class = "text-muted small fw-bold text-uppercase px-3">Core </div>
            </li>
            <li>
                <a href= "teacher_dashboard.php" class = "nav-link px-3 ">
                    <span >
                        <i class="fa-solid fa-gauge"></i>
                    </span>
                    <span> Dashboard</span>
                </a>
                <a href= "add_dictionary.php" class = "nav-link px-3">
                    <span >
                        <i class="fa-solid fa-book-open-reader"></i>
                    </span>
                    <span> Dictionary </span>
                </a>
            </li>
            <li class = "my-4">
                 <hr class = "dropdown-diver">  
            </li>
            <li>
                <div class = "text-muted small fw-bold text-uppercase px-3">Students </div>
            </li>
            <li>
                <a class="nav-link px-3 sidebar-link " data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <span class = "me-2">
                        <i class="fa-sarp fa-solid fa-users"></i>
                    </span>
                    <span> Student</span>

                    <span class = "right-icon ms-auto">
                        <i class="fa-solid fa-chevron-down"></i>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <div>
                        <ul class = "navbar-nav ps-3">
                            <li>
                                <a href= "viewstudents.php" class = "nav-link px-3 ">
                                    <span class = "me-2">
                                        <i class="fa-solid fa-table-columns"></i>
                                    </span>
                                <span> View Students</span>
                                </a>
                            </li>
                            <li>
                                <a href= "javascript:void(0)" class = "nav-link px-3" id = "_add" >
                                    <span class = "me-2">
                                        <i class="fa-sharp fa-solid fa-user-plus"></i>
                                    </span>
                                <span> Add Students</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class = "my-4">
                 <hr class = "dropdown-diver">  
            </li>
            <li>
                <div class = "text-muted small fw-bold text-uppercase px-3">Subjects </div>
            </li>
            <li>
                <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <span class = "me-2">
                        <i class="fa-solid fa-book-open-reader"></i>
                    </span>
                    <span> Subjects</span>

                    <span class = "right-icon ms-auto">
                        <i class="fa-solid fa-chevron-down"></i>
                    </span>
                </a>
                <div class="collapse" id="collapseExample1">
                    <div>
                        <ul class = "navbar-nav ps-3">
                            <li>
                                <a href= "viewstudentssubj.php" class = "nav-link px-3 ">
                                    <span class = "me-2">
                                        <i class="fa-solid fa-table-columns"></i>
                                    </span>
                                <span> View Subjects</span>
                                </a>
                            </li>
                            <li>
                                <a href= "javascript:void(0)" class = "nav-link px-3" id = "_addsub" >
                                    <span class = "me-2">
                                        <i class="fa-solid fa-square-plus"></i>
                                    </span>
                                <span> Add Subjects</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a class="nav-link px-3 sidebar-link active" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <span class = "me-2">
                        <i class="fa-solid fa-book-open-reader"></i>
                    </span>
                    <span> Activities</span>

                    <span class = "right-icon ms-auto">
                        <i class="fa-solid fa-chevron-down"></i>
                    </span>
                </a>
                <div class="collapse" id="collapseExample2">
                    <div>
                        <ul class = "navbar-nav ps-3">
                            <li>
                                <a href= "javascript:void(0)" class = "nav-link px-3 active">
                                    <span class = "me-2">
                                        <i class="fa-solid fa-table-columns"></i>
                                    </span>
                                <span> View Activities</span>
                                </a>
                            </li>
                            <li>
                                <a href= "javascript:void(0)" class = "nav-link px-3" id = "_addcategory" >
                                    <span class = "me-2">
                                        <i class="fa-solid fa-square-plus"></i>
                                    </span>
                                <span> Add Activities Category</span>
                                </a>
                            </li>
                
                        </ul>
                    </div>
                </div>
            </li>
        </ul>

    </nav>
  </div>
</div>
<!-- end offcanvas -->
<main class = "mt-5 pt-3">
    <div class="container-fluid">
        <div class ="row">
            <div class = "col-md-12 fw-bold fs-3">Dashboard</div>
        </div>
        <div class = "row">
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-success h-100">
                    <div class="card-header">Total Number of Activities</div>
                    <div class="card-body  text-center">
                        <h5 class="card-title">	<i class="fa-solid fa-users fa-3x rounded-full  p-2" aria-hidden = "true"> </i></a></h5>
                        <p class="card-text text-light"><?= gettotalact(); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-primary  h-100" > <!-- h-100 and adding mb3 will set the card 100 width-->
                <div class="card-header">Total Activies in Grade 1</div>
                    <div class="card-body  text-center">
                        <h5 class="card-title"><i class="fa-solid fa-children  fa-3x rounded-full  p-2" aria-hidden = "true"> </i> </h5>
                        <p class="card-text text-light"><?= gettotalact1(); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-danger  h-100" > <!-- h-100 and adding mb3 will set the card 100 width-->
                <div class="card-header">Total Activies in Grade 2</div>
                    <div class="card-body  text-center">
                        <h5 class="card-title"><i class="fa-solid fa-children  fa-3x rounded-full  p-2" aria-hidden = "true"> </i> </h5>
                        <p class="card-text text-light"><?= gettotalact2(); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-info  h-100" > <!-- h-100 and adding mb3 will set the card 100 width-->
                <div class="card-header">Total Activies in Grade 3</div>
                    <div class="card-body  text-center">
                        <h5 class="card-title"><i class="fa-solid fa-children  fa-3x rounded-full  p-2" aria-hidden = "true"> </i> </h5>
                        <p class="card-text text-light"><?= gettotalact3(); ?></p>
                    </div>
                </div>
            </div>
            <div class="container-fluid ">
    <!-- <button class = "btn btn-light mb-3 mt-3" type = "submit" onclick="print();">
        Press Me!
    </button>

<script>
    function print(){
        swal("Good job!", "You clicked the button!", "success");
    }
</script> -->
</div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Datatables
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="table" class="table table-bordered table-secondary   table-striped table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Category Id</th> 
                                    <th>Activy Category</th>
                                    <th>Activity Description</th>
                                    <th>Activity Type</th>
                                    <th>Grade</th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <th>Category Id</th> 
                                    <th>Activy Category</th>
                                    <th>Activity Description</th>
                                    <th>Activity Type</th>
                                    <th>Grade</th>
                                    <th> Action </th>
                                </tr>
                            </tfoot>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</main>

<!-- modal -->
<!-- add modal students-->
<div class="modal fade" id="addStudents" tabindex="-1" aria-labelledby="addStudents" aria-hidden="true">
<form class="form-horizontal"  method="post" enctype="multipart/form-data" action = "../modal_structure/add_students.php">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="addStudents"> Adding Students</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"   value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_submit" id="btn_submit" value="Submit"/>
        </div>
        </div>
    </div>
</form>
</div>
<!-- add subjects -->
<div class="modal fade" id="addSubjects" tabindex="-1" aria-labelledby="addSubjects" aria-hidden="true">
<form class="form-horizontal"  method="post" enctype="multipart/form-data" action = "../modal_structure/add_subjects.php">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
        <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="addSubjects"> Adding Subject</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"   value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_submit" id="btn_submit" value="Submit"/>
        </div>
        </div>
    </div>
</form>
</div>


<!-- delete modal -->
<div class="modal fade" id="deleteCategory" tabindex="-1" aria-labelledby="deleteCategory" aria-hidden="true">
<form class="form-horizontal"  method="post" enctype="multipart/form-data" action = "../modal_structure/delete_category.php">

    <div class="modal-dialog modal-md">
        <div class="modal-content">
        <div class="modal-header bg-danger text-light">
            <h5 class="modal-title" id="deleteCategory"> Delete Category</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body-del">
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"   value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_delete" id="btn_delete" value="Submit"/>
        </div>
        </div>
    </div>
</form>
</div>

<!-- add category -->
<div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="addCategory" aria-hidden="true">
<form class="form-horizontal"  method="post" enctype="multipart/form-data" action = "../modal_structure/add_category.php">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
        <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="addCategory"> Adding Category</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body-category">
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"   value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_submit" id="btn_submit" value="Submit"/>
        </div>
        </div>
    </div>
</form>
</div>

<!-- add question -->
<div class="modal fade" id="addQuestion" tabindex="-1" aria-labelledby="addQuestion" aria-hidden="true">
<form class="form-horizontal"  method="post" enctype="multipart/form-data" action = "../modal_structure/_add_ques.php">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="addQuestion"> Adding Questions</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body-question">
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"   value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_submit" id="btn_submit" value="Submit"/>
        </div>
        </div>
    </div>
</form>
</div>

<!-- update question -->
<div class="modal fade" id="updateQuestion" tabindex="-1" aria-labelledby="updateQuestion" aria-hidden="true">
<form class="form-horizontal"  method="post" enctype="multipart/form-data" action = "../modal_structure/update_ques.php">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header bg-success text-white">
            <h5 class="modal-title" id="updateQuestion"> Update Questions</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body-edit">
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" data-target="#addQuestion"   value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_update" id="btn_update" value="Submit"/>
        </div>
        </div>
    </div>
</form>
</div>

<!-- delete question -->
<div class="modal fade" id="deleteQuestion" tabindex="-1" aria-labelledby="deleteQuestion" aria-hidden="true">
<form class="form-horizontal"  method="post" enctype="multipart/form-data" action = "../modal_structure/delete_ques.php">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header bg-danger text-white">
            <h5 class="modal-title" id="deleteQuestion"> Delete Question</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body-del">
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_delete" id="btn_update" value="Submit"/>
        </div>
        </div>
    </div>
</form>
</div>
<!-- modal -->

<!-- end -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type = "text/javascript" src="../js/jquery.js" ></script>
<script type = "text/javascript" src="../js/jquery.dataTables.min.js"></script>
<script type = "text/javascript" src="../js/bootstrap.bundle.min.js"></script>
<script type = "text/javascript" src="../js/alertify.min.js" ></script>
<script>
    
    // **********   Script for Adding Student   **********
    $('#_add').on('click', function(){
      $('#addStudents').modal('show');

      $.ajax({
        type: 'post',
        url : '../modal_structure/add_students.php',
   
        success: function(respose) {
        $('.modal-body').html(respose);
      
        }
      })
    
    });



    // *************** Script for adding subjects
    $('#_addsub').on('click', function(){
      $('#addSubjects').modal('show');

      $.ajax({
        type: 'post',
        url : '../modal_structure/add_subjects.php',
   
        success: function(respose) {
        $('.modal-body').html(respose);
      
        }
      })
    
    })
// **********Script for adding quiz category
    $('#_addcategory').on('click', function(){
      $('#addCategory').modal('show');

      $.ajax({
        type: 'post',
        url : '../modal_structure/add_category.php',
   
        success: function(respose) {
        $('.modal-body-category').html(respose);
      
        }
      })
    
    });

   
    // ********   Script for Deleting Student   ********
    $('#table').on('click', '.del ', function(){
      var table = $('#table').DataTable();
    
      var id = $(this).data('id');
      $('#deleteCategory').modal('show');

      $.ajax({
        url : '../modal_structure/delete_category.php',
        data: {
          id: id
        },
        type: 'post',
        success: function(respose) {
            $('.modal-body-del').html(respose);
        }
      })
    });

     // ********   Script for Adding Question********
     $('#table').on('click', '.add ', function(){
      var table = $('#table').DataTable();
      var id = $(this).data('id');
      $('#addQuestion').modal('show');
      $.ajax({
        url : '../modal_structure/_add_question.php',
        data: {
          id: id
        },
        type: 'post',
        success: function(respose) {
            $('.modal-body-question').html(respose);
        }
      })
    });
// **********   Script for viewing data in DataTable
$(document).ready(function() {

    fetch_data();

    function fetch_data()
 {
  var dataTable = $('#table').DataTable({
    "fnCreatedRow": function(nRow, aData, iDataIndex) {
          $(nRow).attr('id', aData[0]);
        },
   "processing" : true,
   "serverSide" : true,
   
   "order" : [],
   "ajax" : {
    url:"../function/fetch_data_category.php",
    type:"POST",

   },
   "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [4]
          },

        ]

 });

 }


    });
<?php 
if(isset($_SESSION['status']) && $_SESSION['status']!= ''){
    ?>
    swal({
            title:"<?= $_SESSION['status'];?>",
            icon:"<?=  $_SESSION['status_code'];?>",
            button: "Confirm"
        });
    <?php
    unset($_SESSION['status']);
}
?>
</script>
</body>
</html>