<?php		
			// Establishing Connection with Server by passing inputs as a parameter


	$PDO = new PDO('mysql:host=localhost;port=3306;dbname=bolinao','root',"");
	$PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	

			date_default_timezone_set("Asia/Manila");
?>