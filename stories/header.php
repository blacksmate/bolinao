
<?php 
session_start();
$now  = time();
    if(!isset($_SESSION["username"])) {
        $_SESSION['message'] = "Please log-in first to continue";
        header("location:../index.php");
        }

?>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/all.min.css">
<link rel="stylesheet" href="../css/fontawesome.min.css" />
<link rel="stylesheet" href="../css/jquery.dataTables.min.css">
<link rel="stylesheet" href="../css/hover.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bellota+Text:wght@300&family=Henny+Penny&display=swap" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://www.solodev.com/assets/pagination/jquery.twbsPagination.js"></script>
<style>/*navigation style*/
 /*navigation style*/
 #greetingtxt {
            margin-left: 10px;
            font-weight: bold;
			text-transform:initial;
            text-align:center;
            font-family: 'Bellota Text', cursive;
            font-size: 4rem;
        }
  

        .nav_select {
            background-color: transparent;
            border-radius: 40px;
            display: block;
            width: 80px;
            height: 80px;
            margin: auto;
            text-align: center;
            text-decoration: none;
            color: black;
            font-weight: bold;
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

.page {
  display: none;
}
.page-active {
  display: block;
}
p{
    font-size: 2rem;
}

span.heading{
font-size: 4rem;
/* font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif */

font-family: 'Henny Penny', cursive;
}
.page{
    letter-spacing: 3px;
    font-family: 'Bellota Text', cursive;
    font-weight: bold;
    
}
img{
    border-radius: 20px;
    border: 1px;
}
#body-part{
    margin: 20px 0;
    padding: 10px 10px 10px 10px;
    border-radius: 3em;
    background: #94EAE5;
    border: 5px solid #66A29F;
    box-shadow: #66A29F 0 0 0 4px;
    position: relative;
}
.container{
    border-radius: 10px;
}


/* header ng stories */

.books{
    background: radial-gradient(1091px at 106.5% 111.5%, rgb(250, 246, 213) 0.1%, rgb(218, 147, 93) 42.2%, rgb(137, 86, 67) 74.3%, rgb(67, 39, 39) 100.2%);

}
.books img{
    transition: 1s ease;
    width: 100rem;
    height: auto;
}

.books img:hover{
    border-radius:50%;
transition: 1s ease;
}
</style>

</head>
<body style = "background-image: url(../img/bg1.png);">
 <!-- new code -->
 <div class="container " id="myNavigation">
    <div class="row" >
            <div class="col-md-4 align-items-center d-flex">
                <img src="../img/dictionary/waving-hello.gif" alt="hand waving" width="150px" height="100px" id="greetingwave">
                <div class="display-5 hvr-float-shadow" id="greetingtxt">Hi! <?= $_SESSION["users"] ?></div>

            </div>
            <div class="col-6"></div>
                <div class="col-md-2">
			        <div class="row my-2">
				        <div class="col-xl-6 my-1 mb-1">
                            <a href="stories.php" class="nav_select hvr-pulse-shrink">
                                <img src="../img/dictionary/open-book-svgrepo-com.svg" alt="home button">
                                <div class="h6 fw-bold fs-4">Stories</div>
                            </a>
				        </div>
				    <div class="col-xl-6 mt-1 mb-1">
					<a href="../logout.php" class="nav_select hvr-pulse-shrink">
						<img src="../img/dictionary/logout.svg" alt="logout button">
						<div class="h6 fw-bold fs-4">Logout</div>
					</a>
				</div>
			</div>
		</div>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	</div>
    </div>