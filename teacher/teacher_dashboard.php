<?php
session_start();
require_once '../function/total.php';
require_once '../function/totalsubj.php';
require_once '../function/total_activities.php';
    if(!isset($_SESSION["teacher"])) {
        $_SESSION['status'] = "Please log-in first to continue";
        $_SESSION['status_code']= "error";
        header("location:../teacher.php");
        }

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
    <a class="navbar-brand fw-bold text-uppercase me-auto" href="#">Mother Tongue-Based Multilingual Education</a>
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
                <a href= "#" class = "nav-link px-3 active">
                    <span >
                        <i class="fa-solid fa-gauge"></i>
                    </span>
                    <span> Dashboard</span>
                </a>
                <a href= "add_dictionary.php" class = "nav-link px-3 ">
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
                <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <span class = "me-2">
                        <i class="fa-sarp fa-solid fa-users"></i>
                    </span>
                    <span> Students</span>

                    <span class = "right-icon ms-auto">
                        <i class="fa-solid fa-chevron-down"></i>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <div>
                        <ul class = "navbar-nav ps-3">
                            <li>
                                <a href= "viewstudents.php" class = "nav-link px-3">
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
                                <a href= "viewstudentssubj.php" class = "nav-link px-3">
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
                <a class="nav-link px-3 sidebar-link " data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
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
                                <a href= "viewquizzes.php" class = "nav-link px-3 ">
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
            <div class="col-md-4 mb-3">
               
                <div class="card text-white bg-primary h-100">
                    <div class="card-header">Total Number of Students</div>
                    <div class="card-body  text-center">
                        <h5 class="card-title">	<i class="fa-solid fa-users fa-3x rounded-full  p-2" aria-hidden = "true"> </i></a></h5>
                        <p class="card-text text-light"><?= gettotal(); ?></p>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="viewstudents.php">
                        <span class="float-left">View Details</span>
                        <span class="float-end">
                        <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-3"><!-- h-100 and adding mb3 will set the card 100 width-->
                <div class="card text-white text-dark bg-info h-100">
                    <div class="card-header">Total Number of Subjects </div>
                    <div class="card-body  text-center">
                        <h5 class="card-title">	<i class="fa-solid fa-book fa-3x rounded-full  p-2"> </i></a></h5>
                        <p class="card-text text-light"><?= gettotalsub(); ?></p>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="viewstudentssubj.php">
                        <span class="float-left">View Details</span>
                        <span class="float-end">
                        <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mb-3">
            <div class="card text-white text-dark bg-success h-100">
                    <div class="card-header">Total Number of Activities </div>
                    <div class="card-body  text-center">
                        <h5 class="card-title">	<i class="fa-solid fa-list-check fa-3x rounded-full  p-2"> </i></a></h5>
                        <p class="card-text text-light"><?= gettotalact(); ?></p>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="viewquizzes.php">
                        <span class="float-left">View Details</span>
                        <span class="float-end">
                        <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
         
        </div>
        <!-- <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Charts
                    </div>
                    <div class="card-body">
                        <canvas id="myChart"  width= "400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Charts
                    </div>
                    <div class="card-body">
                        <canvas id="myChart1"  width= "400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div> -->
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
                                    <th>Id</th>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Address</th>
                                    <th>Contact No.</th>
                                    <th>Grade</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <th>Id</th>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Address</th>
                                    <th>Contact No.</th>
                                    <th>Grade</th>
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
<div class="modal fade" id="addStudents" tabindex="-1" aria-labelledby="addStudents" aria-hidden="true">
<form class="form-horizontal"  method="post" enctype="multipart/form-data" action = "../modal_structure/add_students.php">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="addStudents"> Adding Students</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
<!-- adding subject -->

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
<!-- end modal -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type = "text/javascript" src="../js/jquery.js" ></script>
<script type = "text/javascript" src="../js/jquery.dataTables.min.js"></script>
<script type = "text/javascript" src="../js/bootstrap.bundle.min.js"></script>
<script type = "text/javascript" src="../js/alertify.min.js" ></script>
<script>
    // adding student
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
// adding subjects

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
    
    })

$(document).ready(function() {
      $('#table').DataTable({
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
          $(nRow).attr('id', aData[0]);
        },
        'serverSide': 'true',
        'processing': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
          'url': '../function/fetch_data_dashboard.php',
          'type': 'post',
        },
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [0]
          },

        ]
      });
    });
    // function print(){
    //     swal("Good job!", "You clicked the button!", "success");
    // }


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