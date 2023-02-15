<?php 
include 'db.php';
session_start();
    if(!isset($_SESSION["username"])) {
        $_SESSION['message'] = "Please log-in first to continue";
        header("location: ../index.php");
        }

$userid = $_GET['uid'];
?>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/all.min.css">
	<link rel="stylesheet" href="../css/fontawesome.min.css" />
	<link rel="stylesheet" href="../css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="../css/hover.css">
<link href="https://fonts.googleapis.com/css2?family=Bellota+Text:wght@300&family=Henny+Penny&display=swap" rel="stylesheet">

<script type = "text/javascript" src="../js/jquery.js" ></script>
<script type = "text/javascript" src="../js/jquery.dataTables.min.js"></script>
<script type = "text/javascript" src="../js/bootstrap.bundle.min.js"></script>
<script type = "text/javascript" src="../js/alertify.min.js" ></script>
	<title>Quiz for kids</title>
 <!-- Custom CSS -->
 <style>
        /*navigation style*/

        #greetingwave {
            margin: auto;
            margin-right: 0px;
        }
	
        .nav_select {
            background-color: #9AF4EF;
            border-radius: 40px;
            display: block;
            width: 80px;
            height: 80px;
            margin: auto;
            text-align: center;
            text-decoration: none;
            color: black;
        }
		.nav_select:hover{
			background-color: #66A29F;
			color:white;
			
		}

        #myNavigation a img {
            margin: auto;
            margin-top: 15px;
            width: 30px;
            height: 30px;
        }
        /*navigation style end*/
        
        /* Quiz list */
        #tableWrapper {
            height: 50vh;
            overflow:scroll;
        }
		body{
			/* background-color: ; */
			min-height: 100vh;
			width:100%;
			background-color: #9AF4EF;
			background-image: url("../img/dictionary/tractor.gif");
			background-position: center;
			background-repeat: no-repeat;
			background-size: 70%;
			/* color: #fff; */
			padding : 0 8%
		}
		#myNavigation{
			background-color: #9AF4EF;
			width: 100%;
			height: auto;
			-webkit-box-shadow: -1px 0px 8px 5px rgba(133,196,188,1);
-moz-box-shadow: -1px 0px 8px 5px rgba(133,196,188,1);
box-shadow: -1px 0px 8px 5px rgba(133,196,188,1);
		}
		


		
.button {
	
	/* background: #ffc421; */
	font-family: 'Staatliches', cursive;
	letter-spacing: 1px;
	box-shadow: 0px 0px 0px rgba(0,0,0,0.4);
	transition: 500ms;
}

.button:after {
	content: '';
	position: absolute;
	transform: translateX(-55px) translateY(-40px);
	width: 25px;
	height: 25px;
	border-radius: 50%;
	background: transparent;
	box-shadow: 0px 0px 50px transparent;
	transition: 500ms;
}

.button:hover {
	transform: translateY(-10px);
	box-shadow: 0px 10px 10px rgba(0,0,0,0.4);
}

.button:hover:after {
	background: white;
	box-shadow: 0px 0px 20px #ffc421, 0px 0px 30px #ffc421, inset 0px 0px 10px #ffc421;
	animation: spin 1s infinite linear;
}


@keyframes spin{
	25%{transform: translateX(-15px) translateY(-35px);
			width: 15px;
			height: 15px;}
	50% {transform: translateX(-35px) translateY(-35px);
			width: 5px;
			height: 5px;}
	75% {transform: translateX(-65px) translateY(-35px);
			width: 15px;
			height: 15px;}
}

/* -15		-35
   -35		-35
   -65 		-35*/

.button:focus {
	outline: none;
}



/* truck */
.loop-wrapper {
  margin: -4px auto;
  position: relative;
  display: block;
  width: 600px;
  height: 250px;
  overflow: hidden;
  border-bottom: 3px solid #fff;
  color: #fff;
}
.mountain {
  position: absolute;
  right: -900px;
  bottom: -20px;
  width: 2px;
  height: 2px;
  box-shadow: 
    0 0 0 50px #4DB6AC,
    60px 50px 0 70px #4DB6AC,
    90px 90px 0 50px #4DB6AC,
    250px 250px 0 50px #4DB6AC,
    290px 320px 0 50px #4DB6AC,
    320px 400px 0 50px #4DB6AC
    ;
  transform: rotate(130deg);
  animation: mtn 20s linear infinite;
}
.hill {
  position: absolute;
  right: -900px;
  bottom: -50px;
  width: 400px;
  border-radius: 50%;
  height: 20px;
  box-shadow: 
    0 0 0 50px #4DB6AC,
    -20px 0 0 20px #4DB6AC,
    -90px 0 0 50px #4DB6AC,
    250px 0 0 50px #4DB6AC,
    290px 0 0 50px #4DB6AC,
    620px 0 0 50px #4DB6AC;
  animation: hill 4s 2s linear infinite;
}
.tree, .tree:nth-child(2), .tree:nth-child(3) {
  position: absolute;
  height: 100px; 
  width: 35px;
  bottom: 0;
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/130015/tree.svg) no-repeat;
}
.rock {
  margin-top: -17%;
  height: 2%; 
  width: 2%;
  bottom: -2px;
  border-radius: 20px;
  position: absolute;
  background: #ddd;
}
.truck, .wheels {
  transition: all ease;
  width: 85px;
  margin-right: -60px;
  bottom: 0px;
  right: 50%;
  position: absolute;
  background: #eee;
}
.truck {
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/130015/truck.svg) no-repeat;
  background-size: contain;
  height: 60px;
}
.truck:before {
  content: " ";
  position: absolute;
  width: 25px;
  box-shadow:
    -30px 28px 0 1.5px #fff,
     -35px 18px 0 1.5px #fff;
}
.wheels {
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/130015/wheels.svg) no-repeat;
  height: 15px;
  margin-bottom: 0;
}

.tree  { animation: tree 3s 0.000s linear infinite; }
.tree:nth-child(2)  { animation: tree2 2s 0.150s linear infinite; }
.tree:nth-child(3)  { animation: tree3 8s 0.050s linear infinite; }
.rock  { animation: rock 4s   -0.530s linear infinite; }
.truck  { animation: truck 4s   0.080s ease infinite; }
.wheels  { animation: truck 4s   0.001s ease infinite; }
.truck:before { animation: wind 1.5s   0.000s ease infinite; }


@keyframes tree {
  0%   { transform: translate(1350px); }
  50% {}
  100% { transform: translate(-50px); }
}
@keyframes tree2 {
  0%   { transform: translate(650px); }
  50% {}
  100% { transform: translate(-50px); }
}
@keyframes tree3 {
  0%   { transform: translate(2750px); }
  50% {}
  100% { transform: translate(-50px); }
}

@keyframes rock {
  0%   { right: -200px; }
  100% { right: 2000px; }
}
@keyframes truck {
  0%   { }
  6%   { transform: translateY(0px); }
  7%   { transform: translateY(-6px); }
  9%   { transform: translateY(0px); }
  10%   { transform: translateY(-1px); }
  11%   { transform: translateY(0px); }
  100%   { }
}
@keyframes wind {
  0%   {  }
  50%   { transform: translateY(3px) }
  100%   { }
}
@keyframes mtn {
  100% {
    transform: translateX(-2000px) rotate(130deg);
  }
}
@keyframes hill {
  100% {
    transform: translateX(-2000px);
  }
}

table th{
	font-family: 'Bellota Text', cursive;
	font-size:1.3rem;
	font-weight: bold;
}
table td{
	font-family: 'Bellota Text', cursive;
	font-size:1.2rem;
	font-weight: bold;
}
#greetingtxt {
      
	  text-transform:initial;
	  font-family: 'Bellota Text', cursive;
  }
    </style>
</head>
<body>
<div class="container" id="myNavigation">
	<div class="row" >
	<div class="col-md-4 align-items-center d-flex">
                <img src="../img/dictionary/waving-hello.gif" alt="hand waving" width="150px" height="100px" id="greetingwave">
                <div class="h4 fw-bold hvr-float-shadow" id="greetingtxt">Hi! <?= $_SESSION["users"] ?></div>
            </div>
            <div class="col-6"></div>
		<div class="col-md-2">
			<div class="row my-2">
				<div class="col-xl-6 my-1 mb-1">
					<a href="../user_dashboard.php" class="nav_select hvr-pulse-shrink">
						<img src="../img/dictionary/home.svg" alt="home button">
						<div class="h6 ">Home</div>
					</a>
				</div>
				<div class="col-xl-6 mt-1 mb-1">
					<a href="../logout.php" class="nav_select hvr-pulse-shrink">
						<img src="../img/dictionary/logout.svg" alt="logout button">
						<div class="h6">Logout</div>
					</a>
				</div>
			</div>
		</div>
	</div>
<main >
<div class="container px-0 border rounded my-2" id="tableWrapper">
    <div class = "menu text-center ">

	
	<table class="table table table-striped" id = "table">
		<thead class = "table-dark">
			<tr>
			<th scope="col">Subject Category ID</th>
			<th scope="col">Subject Category</th>
			<th scope="col">Acitivity Type</th>
			<th scope="col">Quiz Description</th>
			<th scope="col">Action</th>
			
			</tr>
		</thead>
		<tbody>
			<?php 
		

				$query = "SELECT * FROM questionscategory where gradeid = '$_SESSION[gradeid]' ";
				$result = mysqli_query($connection,$query);
				$row_cnt = mysqli_num_rows($result);
				if($row_cnt > 0){
				

				while($row=mysqli_fetch_assoc($result)){
					$qcid = $row['id'];
					$querychecksubmitted = "SELECT * FROM submitted_students where uid='$userid' and qcid = '$qcid'";
					$res =	mysqli_query($connection,$querychecksubmitted);
					if(mysqli_num_rows($res) == 0) {
				?>
			<tr>
			<td ><?php echo $row['id'] ?></td>
			<td ><?php echo $row['subjectcategory'] ?></td>
			<td ><?php echo $row['activity'] ?></td>

			<td ><?php echo $row['quizdesc'] ?></td>
			<td >

			<div id="wrap">
				<a class="btn btn-sm btn-primary btn-slide button" href="main.php?id=<?=$row['id'] ?>">
					<i class="fa-solid fa-play " aria-hidden = "true"> 

					</i> Let's Start!
				
				</a>
			</div>

			</td>
			</tr>
			
			<?php }
			else{
			?>	
			<tr>
			<td ><?php echo $row['id'] ?></td>
			<td><?php echo $row['subjectcategory'] ?></td>
			<td ><?php echo $row['activity'] ?></td>

			<td ><?php echo $row['quizdesc'] ?></td>
			<!-- <td><a class="btn btn-sm btn-Danger" href="main.php?id=">View</a></td> -->
			<td>
				<button id="<?=$row['id'] ?>" class="btn btn-success btn-sm  btn-slide button" > 
			<i class="fas fa-eye" aria-hidden = "true"> </i> View</button></td>
			<?php 	
			}
			}
		}else{
			?>

		<div class = "alert alert-danger">
		No Activities Available
		</div>
		
			<?php
		}
			?>
			</tr>
		</tbody>


	</table>
	<div class="loop-wrapper">
  <div class="mountain"></div>
  <div class="hill"></div>
  <div class="tree"></div>
  <div class="tree"></div>
  <div class="tree"></div>
  <div class="rock"></div>
  <div class="truck"></div>
  <div class="wheels"></div>
</div> 
</div>
	</main>
<input type = "hidden" value = "<?php echo $userid?>" name = "userid" id = "userid">
</div>

</div>

	

	<!-- modal -->
<div class="modal fade" id="viewStudents" tabindex="-1" aria-labelledby="viewStudents" aria-hidden="true">
<div class="modal-dialog modal-md">
	<div class="modal-content">
	<div class="modal-header bg-primary text-white">
		<h5 class="modal-title" id="viewStudents"> Student Result</h5>
		<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
	</div>
	<div class="modal-view-body">
	</div>
	<div class="modal-footer">
		<input type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"   value="Back"/>

	</div>
	</div>
</div>
</div>



	<script>


$(document).ready(function(){
	$('.btn').click(function(){
		qcid = $(this).attr('id')
		studid = document.getElementById("userid").value;
		$.ajax({
			method:'post',
			url: "../modal_structure/view_student_grade.php",
			data:{qcid:qcid,
				studid:studid},
			 success: function(result){
		$('.modal-view-body').html(result);
	  }});
		$('#viewStudents').modal('show');
	})
})

	</script>

</body>
</html>
