<?php 
	include 'db.php';
	session_start(); 
include '../inc/connection.php';
    if(!isset($_SESSION["username"])) {
        $_SESSION['message'] = "Please log-in first to continue";
        header("location: ../index.php");
        }

	// kunin natin ung description ng quiz
	// kunin natin ung description ng quiz
	// die();

	//Set Question Number
	$number = $_GET['n'];
	$_SESSION['currentno'] = $number;
$_SESSION['ctr'] = $number;
	//Query for the Question
	$query = "SELECT * FROM question WHERE question_number = $number and qcid = '$_SESSION[question_id]'";

	// Get the question
	$result = mysqli_query($connection,$query);
	$question = mysqli_fetch_assoc($result); 

	//Get Choices
	$query = "SELECT * FROM options WHERE question_number = $number and qcid = '$_SESSION[question_id]'";
	$choices = mysqli_query($connection,$query);
	// Get Total questions
	$query = "SELECT * FROM question WHERE qcid = '$_SESSION[question_id]'";
	$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
 	
	
?>
<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css" />
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
<link href="https://fonts.googleapis.com/css2?family=Bellota+Text:wght@300&family=Henny+Penny&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/hover.css">

	<title>Quiz for Kids</title>
	<style>
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


  /*navigation style end*/
  #myNavigation{
	  width: 100%;
	  height: auto;

  }		
body{
	font-family: arial;
	font-size: 15px;
	line-height: 1.6em;
}

a{
	text-decoration: none;
}



footer{
	text-align: center;
	padding-top: 5px;
}
main{
	padding-bottom: 5rem;
}



input[type="radio"]{
	width: 97%;
	padding: 4px;
	border-radius: 5px;
}
input[type="radio"]{
	width: 50px;
	padding: 4px;
	border-radius: 5px;
}


.container{
	width:60%;
	margin: 0 auto;
	overflow: auto;
}

li{
	list-style: none;
}
input[type='radio'] { 
     transform: scale(2); 
 }

 .rad{
    border-radius: 1em;
    height: 15px;
    width: 15px;
	
}
.label{
	font-size: 2.2rem;
	font-weight: bold;
	padding:2rem;
	font-family: 'Bellota Text', cursive;
	color:#084298;
	letter-spacing: 2px;
	line-height: 35px;
}
.con{
	background:#9AF4EF;
}

.current{
	font-family: 'Bellota Text', cursive;
	font-size: 3rem;
	padding: 20px;
	border: #000 dotted 1px;
	margin: 20px 0 10px 0;
	letter-spacing: 5px;
	line-height: 60px;
}

#play {
  background-image: url(https://rpsthecoder.github.io/js-speech-synthesis/play.svg);
}

#play.played {
  background-image: url(https://rpsthecoder.github.io/js-speech-synthesis/play1.svg);
}

#pause {
  background-image: url(https://rpsthecoder.github.io/js-speech-synthesis/pause.svg);
}

#pause.paused {
  background-image: url(https://rpsthecoder.github.io/js-speech-synthesis/pause1.svg);
}

#stop {
  background-image: url(https://rpsthecoder.github.io/js-speech-synthesis/stop.svg);
}

#stop.stopped {
  background-image: url(https://rpsthecoder.github.io/js-speech-synthesis/stop1.svg);
}
.buttons {
  margin-top: 25px;
}
.buttons >button {
  background: none;
  border: none;
  cursor: pointer;
  height: 48px;
  outline: none;
  padding: 0;
  width: 48px;
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
</div>
	

	<main>
			<div class="container con text-white" >
				<div class="current text-center alert alert-primary "><span >Question</span> <b ><?php echo $number; ?></b>
					 of <b><?php echo $total_questions; ?></b>
				</div>
			
				<?php
		  			$image_source = basename($question['question_text']);
					if(strpos($question['question_text'],'.jpg')!== false||strpos($question['question_text'],'.png')!== false ||
					strpos($question['question_text'],'.jpeg')!== false){
				?>
				 <img src="../image/<?=$image_source ?>"width = "350px" height = "350px" class = "img-fluid rounded mx-auto d-block mb-3">
				<?php }
				else{?>
<div class="buttons text-center">
  <button id=play></button> &nbsp;
  <button id=pause></button> &nbsp;
  <button id=stop></button>
</div>
				<article>
				 <p class="current alert alert-primary "><?php echo $question['question_text']; ?> </p>
				</article>
				 <?php }?>
				<form method="POST" action="process.php">
					<ul class="choices">
						<?php while($row=mysqli_fetch_assoc($choices)){ ?>
							

						<li><input class = "rad"  type="radio" name="choice" value="<?php echo $row['qid']; ?>"><span class = "label"><?php echo $row['coption']; ?></span></li>
						<?php } ?>
						
						
					</ul>
					<input type="hidden" name="number" value="<?php echo $number; ?>">
	 
					<!-- <span class="btn btn-warning float-end m-2">
					<i class="fa fa-times"></i>
						<input class = "btn btn-success  " type="submit" name="submit" value="Next" >
					</span> -->
					<button type = "submit" name="submit" class = "btn btn-success  float-end m-2" ><i class="fa-solid fa-arrow-right fa-2x" style="border-radius:20px;"></i></button>
				
						<button class = "btn btn-Secondary  float-front m-2" name="btn_back"><i class="fa-solid fa-arrow-left fa-2x" style="border-radius:20px;"></i></button>
				
			</form>

			</div>
			<?php 
			// echo $_SESSION['currentno'];
			// echo '<br>counter'.($_SESSION['ctr']); 
	 		// echo '<br> score'.($_SESSION['score']);?>

	</main>
<script>
onload = function() {
  if ('speechSynthesis' in window) with(speechSynthesis) {
	
 
    var playEle = document.querySelector('#play');
    var pauseEle = document.querySelector('#pause');
    var stopEle = document.querySelector('#stop');
    var flag = false;

    playEle.addEventListener('click', onClickPlay);
    pauseEle.addEventListener('click', onClickPause);
    stopEle.addEventListener('click', onClickStop);

    function onClickPlay() {
      if (!flag) {
        flag = true;
        utterance = new SpeechSynthesisUtterance(document.querySelector('article').textContent);
        utterance.voice = getVoices()[11]; //4
		utterance.rate = .7;
        utterance.onend = function() {
          flag = false;
          playEle.className = pauseEle.className = '';
          stopEle.className = 'stopped';
        };
        playEle.className = 'played';
        stopEle.className = '';
        speak(utterance);
      }
      if (paused) { /* unpause/resume narration */
        playEle.className = 'played';
        pauseEle.className = '';
        resume();
      }
    }

    function onClickPause() {
      if (speaking && !paused) { /* pause narration */
        pauseEle.className = 'paused';
        playEle.className = '';
        pause();
      }
    }

    function onClickStop() {
      if (speaking) { /* stop narration */
        /* for safari */
        stopEle.className = 'stopped';
        playEle.className = pauseEle.className = '';
        flag = false;
        cancel();

      }
    }

  }

  else { /* speech synthesis not supported */
    msg = document.createElement('h5');
    msg.textContent = "Detected no support for Speech Synthesis";
    msg.style.textAlign = 'center';
    msg.style.backgroundColor = 'red';
    msg.style.color = 'white';
    msg.style.marginTop = msg.style.marginBottom = 0;
    document.body.insertBefore(msg, document.querySelector('div'));
  }

}
</script>
</body>
</html>