<?php include 'db.php'; ?>
<?php session_start(); ?>
<?php 

	//For first question, score will not be there.
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
	if(isset($_POST['btn_back'])){
		$back =$_SESSION['currentno']-1;
		if($back < 1){
			header('location:index.php?uid='.$_SESSION['uid']);
			unset($_SESSION['score']);
			unset($_SESSION['total']);
		}
		else{
			if($back==1){
				$_SESSION['score']= 0;
			}
			// if($selected_choice == $correct_choice){
				if($_SESSION['ctr']==1){
				$_SESSION['score']--;
				$_SESSION['ctr'] =0;
			}
			
			
		
		header('location:question.php?n='.$back);
		}
	
	
		
	 }
 if(isset($_POST['submit'])){
	//We need total question in process file too
 	$query = "SELECT * FROM question where qcid = '$_SESSION[question_id]'";
	$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
	
	//We need to capture the question number from where form was submitted
 	$number = $_POST['number'];
	
	//Here we are storing the selected option by user
 	$selected_choice = $_POST['choice'];
	
	//What will be the next question number
 	$next = $number+1;
	
	//Determine the correct choice for current question
 	$query = "SELECT * FROM options WHERE question_number = $number AND is_correct = 1 and qcid = '$_SESSION[question_id]' ";
 	 $result = mysqli_query($connection,$query);
 	 $row = mysqli_fetch_assoc($result);

 	 $correct_choice = $row['qid'];
	
	//Increase the score if selected cohice is correct
 	 if($selected_choice == $correct_choice){
 	 	$_SESSION['score']++;
		$_SESSION['ctr'] = 1;
	
 	 }
	 else{
		$_SESSION['ctr'] =0;
	 }
		//Redirect to next question or final score page. 
 	 if($number == $total_questions){
			$_SESSION['total'] = $total_questions;
			$user = $_SESSION['users'];
			$date= date('Y-m-d');
		$query = "INSERT INTO submitted_students(uid,stud_name,date,score,total_points,subjectcategory,activity, qcid) 
			VALUES('$_SESSION[uid]','$user','$date','$_SESSION[score]','$total_questions','$_SESSION[quizdesc]','$_SESSION[activity]','$_SESSION[question_id]')";
			$result = mysqli_query($connection,$query);
			//dito k na mag iinsert
			if($result){
		header("LOCATION: final.php");
			}
 	 }else{
 	 	header("LOCATION: question.php?n=". $next);
 	 }

 }



?>