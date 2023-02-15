<?php 

session_start();
    if(!isset($_SESSION["username"])) {
        $_SESSION['message'] = "Please log-in first to continue";
        header("location: ../index.php");
        }

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
	<link href="https://fonts.googleapis.com/css2?family=Bellota+Text:wght@300&family=Henny+Penny&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/hover.css">
	<style>
	#greetingtxt, p {
    font-size: 2rem;
	  text-transform:initial;
	  font-family: 'Bellota Text', cursive;
  }
  #greetingwave {
	  margin: auto;
	  margin-right: 0px;
  }
  span{
	color:green;
	font-size: 2rem;
	font-weight: bolder;
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


  /*navigation style end*/
  #myNavigation{
	  width: 100%;
	  height: auto;

  }		


a{
	text-decoration: none;
}

header{
	border-bottom: 3px #f4f4f4 solid;
	background: 4c7578;
}


main{
	padding-bottom: 20px;
}



label{
	display: inline-block;
	width: 180px;
}
input[type="text"]{
	width: 97%;
	padding: 4px;
	border-radius: 5px;
}
input[type="number"]{
	width: 50px;
	padding: 4px;
	border-radius: 5px;
}


.container{
	width:60%;
	margin: 0 auto;
	overflow: auto;
}
a.start{
	display: inline-block;
	color:#666;
	padding: 6px 13px;
}
li{
	list-style: none;
}
.current{
	padding: 10px;
	background: #f4f4f4;
	border: #000 dotted 1px;
	margin: 20px 0 10px 0;
}
body {
  margin: 0;
  padding: 0;
  background: #000;
  overflow: hidden;
}

.pyro > .before, .pyro > .after {
  position: absolute;
  width: 5px;
  height: 5px;
  border-radius: 50%;
  box-shadow: 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff, 0 0 #fff;
  -webkit-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
  animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
}

.pyro > .after {
  -webkit-animation-delay: 1.25s, 1.25s, 1.25s;
  animation-delay: 1.25s, 1.25s, 1.25s;
  -webkit-animation-duration: 1.25s, 1.25s, 6.25s;
  animation-duration: 1.25s, 1.25s, 6.25s;
}

@-webkit-keyframes bang {
  to {
    box-shadow: 218px 51.3333333333px hsl(25deg, 100%, 50%), -121px -229.6666666667px hsl(127deg, 100%, 50%), -220px -172.6666666667px hsl(187deg, 100%, 50%), 109px 19.3333333333px hsl(122deg, 100%, 50%), 22px -243.6666666667px hsl(303deg, 100%, 50%), 67px -14.6666666667px hsl(201deg, 100%, 50%), -86px -247.6666666667px hsl(188deg, 100%, 50%), -112px -163.6666666667px hsl(111deg, 100%, 50%), 127px -382.6666666667px hsl(109deg, 100%, 50%), -35px -90.6666666667px hsl(66deg, 100%, 50%), -54px -279.6666666667px hsl(188deg, 100%, 50%), -15px -69.6666666667px hsl(265deg, 100%, 50%), -179px 53.3333333333px hsl(179deg, 100%, 50%), -164px -252.6666666667px hsl(76deg, 100%, 50%), 57px -339.6666666667px hsl(295deg, 100%, 50%), -86px -103.6666666667px hsl(172deg, 100%, 50%), 127px -330.6666666667px hsl(325deg, 100%, 50%), 117px -50.6666666667px hsl(255deg, 100%, 50%), -73px -47.6666666667px hsl(180deg, 100%, 50%), -184px -178.6666666667px hsl(134deg, 100%, 50%), 138px -44.6666666667px hsl(332deg, 100%, 50%), -195px -43.6666666667px hsl(150deg, 100%, 50%), 18px -241.6666666667px hsl(216deg, 100%, 50%), -240px -160.6666666667px hsl(236deg, 100%, 50%), -225px -241.6666666667px hsl(92deg, 100%, 50%), -210px -321.6666666667px hsl(151deg, 100%, 50%), -158px -218.6666666667px hsl(233deg, 100%, 50%), 11px -179.6666666667px hsl(340deg, 100%, 50%), 250px -323.6666666667px hsl(301deg, 100%, 50%), -175px -31.6666666667px hsl(43deg, 100%, 50%), 187px -372.6666666667px hsl(92deg, 100%, 50%), -54px -188.6666666667px hsl(251deg, 100%, 50%), -100px -113.6666666667px hsl(38deg, 100%, 50%), 61px -261.6666666667px hsl(110deg, 100%, 50%), 122px -354.6666666667px hsl(217deg, 100%, 50%), -188px -264.6666666667px hsl(177deg, 100%, 50%), -172px -122.6666666667px hsl(243deg, 100%, 50%), -135px -160.6666666667px hsl(124deg, 100%, 50%), -59px -93.6666666667px hsl(335deg, 100%, 50%), -68px 21.3333333333px hsl(45deg, 100%, 50%), -87px -184.6666666667px hsl(62deg, 100%, 50%), -174px -385.6666666667px hsl(225deg, 100%, 50%), -26px 2.3333333333px hsl(254deg, 100%, 50%), 171px -359.6666666667px hsl(276deg, 100%, 50%), 127px 12.3333333333px hsl(249deg, 100%, 50%), -115px -330.6666666667px hsl(246deg, 100%, 50%), 149px -122.6666666667px hsl(149deg, 100%, 50%), 147px -115.6666666667px hsl(56deg, 100%, 50%), -172px -344.6666666667px hsl(238deg, 100%, 50%), 83px -340.6666666667px hsl(248deg, 100%, 50%), -50px 76.3333333333px hsl(148deg, 100%, 50%);
  }
}
@keyframes bang {
  to {
    box-shadow: 218px 51.3333333333px hsl(25deg, 100%, 50%), -121px -229.6666666667px hsl(127deg, 100%, 50%), -220px -172.6666666667px hsl(187deg, 100%, 50%), 109px 19.3333333333px hsl(122deg, 100%, 50%), 22px -243.6666666667px hsl(303deg, 100%, 50%), 67px -14.6666666667px hsl(201deg, 100%, 50%), -86px -247.6666666667px hsl(188deg, 100%, 50%), -112px -163.6666666667px hsl(111deg, 100%, 50%), 127px -382.6666666667px hsl(109deg, 100%, 50%), -35px -90.6666666667px hsl(66deg, 100%, 50%), -54px -279.6666666667px hsl(188deg, 100%, 50%), -15px -69.6666666667px hsl(265deg, 100%, 50%), -179px 53.3333333333px hsl(179deg, 100%, 50%), -164px -252.6666666667px hsl(76deg, 100%, 50%), 57px -339.6666666667px hsl(295deg, 100%, 50%), -86px -103.6666666667px hsl(172deg, 100%, 50%), 127px -330.6666666667px hsl(325deg, 100%, 50%), 117px -50.6666666667px hsl(255deg, 100%, 50%), -73px -47.6666666667px hsl(180deg, 100%, 50%), -184px -178.6666666667px hsl(134deg, 100%, 50%), 138px -44.6666666667px hsl(332deg, 100%, 50%), -195px -43.6666666667px hsl(150deg, 100%, 50%), 18px -241.6666666667px hsl(216deg, 100%, 50%), -240px -160.6666666667px hsl(236deg, 100%, 50%), -225px -241.6666666667px hsl(92deg, 100%, 50%), -210px -321.6666666667px hsl(151deg, 100%, 50%), -158px -218.6666666667px hsl(233deg, 100%, 50%), 11px -179.6666666667px hsl(340deg, 100%, 50%), 250px -323.6666666667px hsl(301deg, 100%, 50%), -175px -31.6666666667px hsl(43deg, 100%, 50%), 187px -372.6666666667px hsl(92deg, 100%, 50%), -54px -188.6666666667px hsl(251deg, 100%, 50%), -100px -113.6666666667px hsl(38deg, 100%, 50%), 61px -261.6666666667px hsl(110deg, 100%, 50%), 122px -354.6666666667px hsl(217deg, 100%, 50%), -188px -264.6666666667px hsl(177deg, 100%, 50%), -172px -122.6666666667px hsl(243deg, 100%, 50%), -135px -160.6666666667px hsl(124deg, 100%, 50%), -59px -93.6666666667px hsl(335deg, 100%, 50%), -68px 21.3333333333px hsl(45deg, 100%, 50%), -87px -184.6666666667px hsl(62deg, 100%, 50%), -174px -385.6666666667px hsl(225deg, 100%, 50%), -26px 2.3333333333px hsl(254deg, 100%, 50%), 171px -359.6666666667px hsl(276deg, 100%, 50%), 127px 12.3333333333px hsl(249deg, 100%, 50%), -115px -330.6666666667px hsl(246deg, 100%, 50%), 149px -122.6666666667px hsl(149deg, 100%, 50%), 147px -115.6666666667px hsl(56deg, 100%, 50%), -172px -344.6666666667px hsl(238deg, 100%, 50%), 83px -340.6666666667px hsl(248deg, 100%, 50%), -50px 76.3333333333px hsl(148deg, 100%, 50%);
  }
}
@-webkit-keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0;
  }
}
@keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0;
  }
}
@-webkit-keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%;
  }
  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%;
  }
  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%;
  }
  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%;
  }
  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%;
  }
}
@keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%;
  }
  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%;
  }
  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%;
  }
  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%;
  }
  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%;
  }
}/*# sourceMappingURL=style.css.map */
.fa-face-sad-tear{
	color :red;
}
.fa-face-smile{
	color:green;
}
	</style>
</head>
<body style = "background-image:url(../img/quizbg.png);background-repeat:no-repeat;background-size:cover;background-position:center;background-attachment:fixed">
<div class="container" id="myNavigation">
<div class="row">

            <div class="col-md-4 align-items-center d-flex">
                <img src="../img/dictionary/waving-hello.gif" alt="hand waving" width="150px" height="100px" id="greetingwave">
                <div class = "h4 fw-bold hvr-float-shadow" id="greetingtxt">Hi! <?= $_SESSION["users"] ?></div>
            </div>
            <div class="col-6"></div>
		<div class="col-md-2">
			<div class="row">
				<div class="col-xl-6 mt-1 mb-1">
					<a href="../user_dashboard.php" class="nav_select hvr-pulse-shrink">
						<?php
					
						?>
						<img src="../img/home.svg" alt="home button">
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
</div>


	<main>
			<div class="container pt-5">
				<div class = "pyro">
				<div class="before"></div>
  				<div class="after"></div>
				<h2 class = "display-3">Your Result:</h2><br>
				<p class = "display-5">Congratulation You have completed this test succesfully.</p><br>
				
				<?php 
				$total = $_SESSION['total'];
				$score = $_SESSION['score'];
				$passing = intval($total *.60);
				if($score > $passing)
				{
				?>
				<p >Your <strong>Score</strong> is: <span style = "color:green;"> <?php echo $score; ?></span> <i class="fa-solid fa-face-smile"></i></p>

				<?php 
				}else{
				?>
				<p >Your <strong>Score</strong> is: <span style = "color:red;"> <?php echo $score; ?></span> <i class="fa-solid fa-face-sad-tear"></i> </p>
<?php 
				}
				?>
				
				<p> Total Question Item is :<span style = "color:green;"> <?=$total?>	</span> </p>
				<?php
				unset($_SESSION['score']);
				unset($_SESSION['total']);
				unset($_SESSION['ctr']);
				?>
				
			
			   <div class="before"></div>
  				<div class="after"></div>
				</div>
				
			</div>

	</main>







</body>
</html>