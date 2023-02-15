<?php
session_start();
include 'db.php';
    if(!isset($_SESSION["username"])) {
        $_SESSION['message'] = "Please log-in first to continue";
        header("location: ../index.php");
        }

// $query = "SELECT * FROM question";

$question_id = $_GET['id']; // kunin mo ung id nung question category
$_SESSION['question_id'] = $question_id;
$queryquizdesc = "SELECT * FROM questionscategory where id ='$question_id'";
$result = mysqli_query($connection,$queryquizdesc);
$row = mysqli_fetch_assoc($result);
$_SESSION['quizdesc'] = $row['quizdesc'];
$_SESSION['activity'] = $row['activity'];
$instruction = $row['instructions'];
if(isset($question_id)){


$query = "SELECT q.*, s.* from question q, subjects s WHERE q.subjectid = s.subjectid AND q.qcid = '$question_id'";


$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
//kunin mo ung id ng questions
}
//nakuha mo na ung category
?>
<html>
<head>
	<title>Quiz for kids</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/all.min.css">
	<link rel="stylesheet" href="../css/fontawesome.min.css" />
	<link rel="stylesheet" href="../css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="../css/hover.css">
    <link rel="stylesheet" href="../css/bird.css">
<link href="https://fonts.googleapis.com/css2?family=Bellota+Text:wght@300&family=Henny+Penny&display=swap" rel="stylesheet">

<script type = "text/javascript" src="../js/jquery.js" ></script>
<script type = "text/javascript" src="../js/jquery.dataTables.min.js"></script>
<script type = "text/javascript" src="../js/bootstrap.bundle.min.js"></script>
<script type = "text/javascript" src="../js/alertify.min.js" ></script>
	<style>

        /*navigation style*/
       /*navigation style*/
       #greetingtxt {
      
			text-transform:initial;
            font-family: 'Bellota Text', cursive;
        }
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

        #myNavigation a img {
            margin: auto;
            margin-top: 15px;
            width: 30px;
            height: 30px;
        }
        /* end */
   
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
        #myNavigation{
			background-color: #9AF4EF;
			width: 100%;
			height: auto;
			-webkit-box-shadow: -1px 0px 8px 5px rgba(133,196,188,1);
-moz-box-shadow: -1px 0px 8px 5px rgba(133,196,188,1);
box-shadow: -1px 0px 8px 5px rgba(133,196,188,1);
		}
		table{
    font-family: 'Bellota Text', cursive;
	font-size: 1rem;
    font-weight: bold;    
        }
        td#total{
            font-weight: bolder;
            color:green;
            font-size: 1.3rem;
        }
      .fs40{
        font-size: 2rem;
        font-family: 'Bellota Text', cursive;
        font-weight: bolder;    
      }
 
    </style>
</head>
<body  style = "background-image: url(../img/bg1.png);">

<div class="container" id="myNavigation">
<div class="row">
            <div class="col-md-4 align-items-center d-flex">
                <img src="../img/dictionary/waving-hello.gif" alt="hand waving" width="150px" height="100px" id="greetingwave">
                <div class=" h4 fw-bold hvr-float-shadow" id="greetingtxt">Hi! <?= $_SESSION["users"] ?></div>
            </div>
            <div class="col-6"></div>
		<div class="col-md-2">
			<div class="row">
				<div class="col-xl-6 mt-1 mb-1">
					<a href="index.php?uid=<?=$_SESSION['uid']?>" class="nav_select hvr-pulse-shrink">
						<img src="../img/quiz.svg" alt="home button">
						<div class="h6">Quiz</div>
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
	<div class="row">
            <div class="container">
                <div class="col-md-6 mx-auto my-2 text-center border rounded text-bg-light">
                    <img class="col-2" src="../img/quiz.svg" alt="Quiz logo">
            <p class="display-5 mt-1"><strong><u><?=$_SESSION['quizdesc'] ?></u></strong></p>

            <p class=" mt-1"><strong>Instruction: </strong><?=$instruction ?></p>
                    <div class="embed-responsive embed-responsive-16by9">
                        <video muted="" autoplay="" loop=""
                        src="../video/instructions.mp4" type="video/mp4"
                        width="500">
                        <img src="https://storage.googleapis.com/cms-storage-bucket/a667e994fc2f3e85de36.png" alt="Fast">
                        </video>
                    </div>
                </div>


            </div>
            
        </div>
	<main>

		<div class="col-md-6 mx-auto">
				<h1 class = "p-2 h3">Quiz Information

				<?php 
					if($total_questions >0){
						?>
                        <table class="table table-striped table-success text-success mt-3">
                        <thead>
    
                        </thead>
                        <tbody>
                            <tr >
                                <th scope="row">Subject:</th>
                                <td><?=$_SESSION['quizdesc']  ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Quiz Type:</th>
                                <td>Multiple Choice</td>
                            </tr>
                            <tr>
                                <th scope="row">Number of Questions:</th>
                                <td id = "total"><?=$total_questions ?></td>
                            </tr>
                       
                        </tbody>
                    </table>
    </div>
                
<div class="col-12 text-center">
			
 <div class="wrapper-no4">
    <br>
    <button class="button-bird " type="button" id= "blogLink">
        <p class="button-bird__text ">START</p>
        <svg version="1.1" class="feather" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 75 38" style="enable-background:new 0 0 75 38;" xml:space="preserve">
        <g>
            <path d="M20.8,31.6c3.1-0.7,2.9-2.3,2,1c9.1,4.4,20.4,3.7,29.1-0.8l0,0c0.7-2.1,1-3.9,1-3.9c0.6,0.8,0.8,1.7,1,2.9
                c4.1-2.3,7.6-5.3,10.2-8.3c0.4-2.2,0.4-4,0.4-4.1c0.6,0.4,0.9,1.2,1.2,2.1c4.5-6.1,5.4-11.2,3.7-13.5c1.1-2.6,1.6-5.4,1.2-7.7
                c-0.5,2.4-1.2,4.7-2.1,7.1c-5.8,11.5-16.9,21.9-30.3,25.3c13-4,23.6-14.4,29.1-25.6C62.8,9,55.6,16.5,44.7,20.7
                c2.1,0.7,3.5,1.1,3.5,1.6c-0.1,0.4-1.3,0.6-3.2,0.4c-7-0.9-7.1,1.2-16,1.5c1,1.3,2,2.5,3.1,3.6c-1.9-0.9-3.8-2.2-5.6-3.6
                c-0.9,0.1-10.3,4.9-22.6-12.3C5.9,17.7,11.8,26.9,20.8,31.6z"/>
        </g>
        </svg>
        <span class="bird"></span>
        <span class="bird--1"></span>
        <span class="bird--2"></span>
        <span class="bird--3"></span>
        <span class="bird--4"></span>
        <span class="bird--5"></span>
        <span class="bird--6"></span>
        <span class="bird--7"></span>
        <span class="bird--8"></span>
        <span class="bird--9"></span>
        <span class="bird--10"></span>
        <span class="bird--11"></span>
        <span class="bird--12"></span>
        <span class="bird--13"></span>
        <span class="bird--14"></span>
        <span class="bird--15"></span>
        <span class="bird--16"></span>
        <span class="bird--17"></span>
        <span class="bird--18"></span>
        <span class="bird--19"></span>
        <span class="bird--20"></span>
        <span class="bird--21"></span>
        <span class="bird--22"></span>
        <span class="bird--23"></span>
        <span class="bird--24"></span>
        <span class="bird--25"></span>
        <span class="bird--26"></span>
        <span class="bird--27"></span>
        <span class="bird--28"></span>
        <span class="bird--29"></span>
        <span class="bird--30"></span>
    </button>
</div>
                    <!-- end test -->
</div>
						<?php
					}
					else{
						?>
				  <table class="table table-striped table-danger text-danger">
                        <thead>
    
                        </thead>
                        <tbody>
                            <tr >
                                <th scope="row">Subject:</th>
                                <td><?=$_SESSION['quizdesc']  ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Quiz Type:</th>
                                <td>Multiple Choice</td>
                            </tr>
                            <tr>
                                <th scope="row">Number of Questions:</th>
                                <td ><?=$total_questions ?></td>
                            </tr>
                       
                        </tbody>
                    </table>
                    <div class = "text-end">
    <!-- <a href="../user_dashboard.php" class="start"> -->
    <a href="../quiz/index.php?uid=<?=$_SESSION['uid']?>" class="start">
        
    <button class="btn btn-danger " >
    Back</button></a>
</div>
						
						<?php
					}
				?>
				
			
        </div>

	</main>

</div>
<script>
     document.addEventListener("DOMContentLoaded", function(){
      var el = document.querySelector(".button-bird");
      var text = document.querySelector(".button-bird__text");
          el.addEventListener('click', function() {
            el.classList.toggle('active');

            if(el.classList.contains('active')){
            	console.log('true');
            	text.innerHTML = '<span class="fs40">Goodluck!</span>';
              // location.href="index.php";
              // delay
              setTimeout(function () {
   window.location.href = "question.php?n=1"; //will redirect to your blog page (an ex: blog.html)
}, 2800); //will call the function after 2 secs.
              // end delay
            }else{
            	text.innerHTML = 'Start';
            }
        });
    });
</script>
</body>
</html>