
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
    <title>Stories for kids</title>
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
        margin: auto;
        margin-left: 10px;
        font-weight: bold;
        text-transform:initial;
        color:#fff;
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
            color: white;
            font-weight: bold;
        }
		.nav_select:hover{
			background-color: #94EAE5;
			color:#4A7472;
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
.card-header{
    text-align:center;
    font-family: 'Bellota Text', cursive;
    font-size: 3rem;
    letter-spacing: 1rem;
}
#logo-title{
    text-align:center;
    font-family: 'Henny Penny', cursive;
    font-size: 10rem;
}

/* background-image: linear-gradient(rgba(14, 14, 14, 0.5), rgba(0, 0, 0, 0.5)), url(../img/background.jpg); */
</style>

</head>
<body style = "background-image: linear-gradient(rgba(14, 14, 14, 0.3), rgba(0, 0, 0, 0.3)), url(../img/bg1.png);">
 <!-- new code -->
 <div class="container" id="myNavigation">
    <div class="row" >
            <div class="col-md-4 align-items-center d-flex">
                <img src="../img/dictionary/waving-hello.gif" alt="hand waving" width="150px" height="100px" id="greetingwave">
                <div class="display-5 hvr-float-shadow" id="greetingtxt">Hi! <?= $_SESSION["users"] ?></div>
            </div>
            <div class="col-6"></div>
                <div class="col-md-2">
			        <div class="row my-2">
				        <div class="col-xl-6 my-1 mb-1">
                            <a href="../user_dashboard.php" class="nav_select hvr-pulse-shrink">
                                <img src="../img/dictionary/home.svg"   alt="home button">
                                <div class="h6 fw-bold fs-4">Home</div>
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
	</div>
</div>


<main class = "pt-3 ">
    <div class="container bg-transparent text-white">
        <div class="row ">
                <!-- <img class="col-12" id="logo-boy" src="../img/dictionary/boy.svg" alt="page design"> -->
                <img class="col-12 p-5" id="logo-book" height="350px" width= "300px" src="../img/bookcase.svg" alt="page design">
                <div class="col-12 display-1 text-center" id="logo-title">Stories</div>
        </div>
        <div class = "row">
            <div class="col-md-4 mb-3  hvr-float">
                <div class="card text-white bg-success h-100">
                    <div class="card-header h1">Grade 1 Stories</div>
                    <div class="card-body books">
                        <a class="nav-link" href="grade1/jack.php"> 
                            <img src = "../img/grade1.png" class="img-thumbnail"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3  hvr-float">
                <div class="card text-white bg-success h-100">
                    <div class="card-header h1">Jack and the Bean Sprout</div>
                    <div class="card-body books">
                        <a class="nav-link" href="jackandthebean.php"> 
                            <img src = "../img/stories/jacndbean.png"class="img-thumbnail"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3  hvr-float">
                <div class="card text-white bg-success  h-100" > <!-- h-100 and adding mb3 will set the card 100 width-->
                    <div class="card-header h1">The tale of Peter Rabbit</div>
                    <div class="card-body books">
                        <a class="nav-link" href="peterrabit.php"> 
                            <img src = "../img/stories/peter-rabbit.jpg"class="img-thumbnail"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3  hvr-float">
                <div class="card text-white bg-success h-100">
                    <div class="card-header h1">WHEN DO HIPPOS PLAY?</div>
                    <div class="card-body books">
                        <a class="nav-link" href="hippo.php"> 
                            <img src = "../img/stories/hipo/Cover.jpeg" class="img-thumbnail"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3  hvr-float">
                <div class="card text-white bg-success h-100">
                    <div class="card-header h1">The Elves and The Shoemaker</div>
                    <div class="card-body books">
                            <a class="nav-link" href="elvesnshoe.php"> 
                                <img src = "../img/stories/Elves+Poster.jpg" class="img-thumbnail"/>
                            </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3  hvr-float">
                <div class="card text-white bg-success h-100">
                    <div class="card-header h1">THE PARTICULAR WAY OF THE ODD MS. MCKAY</div>
                    <div class="card-body books">
                        <a class="nav-link" href="msmckay.php"> 
                            <img src = "../img/stories/msmckay/1.jfif" class="img-thumbnail"/>
                        </a>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4 mb-3  hvr-float">
                <div class="card text-white bg-success h-100">
                    <div class="card-header h1">Dagiti Ngipen ni Pining</div>
                    <div class="card-body books">
                        <a class="nav-link" href="ngipin-ni-pining.php"> 
                            <img src = "../img/stories/ilocano/deped_short_stories.png" class="img-thumbnail"/>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3  hvr-float">
                <div class="card text-white bg-success h-100">
                    <div class="card-header h1">Bulan ti Mayo Manen</div>
                    <div class="card-body books">
                        <a class="nav-link" href="bulan-ti-mayo.php"> 
                            <img src = "../img/stories/ilocano/deped_short_stories.png" class="img-thumbnail"/>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3  hvr-float">
                <div class="card text-white bg-success h-100">
                    <div class="card-header h1">Ti Ina a Baket a Balasang</div>
                    <div class="card-body books">
                        <a class="nav-link" href="baket-a-balasang.php"> 
                            <img src = "../img/stories/ilocano/deped_short_stories.png" class="img-thumbnail"/>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3  hvr-float">
                <div class="card text-white bg-success h-100">
                    <div class="card-header h1">Ang Hardinerong Tipaklong</div>
                    <div class="card-body books">
                        <a class="nav-link" href="hardinerong-tipaklong.php"> 
                            <img src = "../img/stories/hardinerong-tipaklong/Anghardinerongtipaklong.webp" class="img-thumbnail"/>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3  hvr-float">
                <div class="card text-white bg-success h-100">
                    <div class="card-header h1">Ang Hipon at Biya Tipaklong</div>
                    <div class="card-body books">
                        <a class="nav-link" href="hipon-at-biya.php"> 
                            <img src = "../img/stories/hipon-at-biya/tinywow_Hipon at Biya_12555547_1.jpg" class="img-thumbnail"/>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3  hvr-float">
                <div class="card text-white bg-success h-100">
                    <div class="card-header h1">Wanted: Lolit, Lamok ng Dengue</div>
                    <div class="card-body books">
                        <a class="nav-link" href="lamok.php"> 
                            <img src = "../img/stories/lamok/tinywow_Lolit, Lamok ng Dengue_12556013_1.jpg" class="img-thumbnail"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</div>
</main>   


<script type = "text/javascript" src="../js/bootstrap.bundle.min.js"></script>
<script type = "text/javascript" src="../js/jquery.js" ></script>
<script type = "text/javascript" src="../js/jquery.dataTables.min.js"></script>
</body>

</html>