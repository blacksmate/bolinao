
<?php
session_start();
include '../../inc/connection.php';
$now  = time();
    if(!isset($_SESSION["username"])) {
        $_SESSION['message'] = "Please log-in first to continue";
        header("location: ../index.php");
        }



?>
<style>

/*navigation style*/
#greetingtxt {
    margin: auto;
    margin-left: 10px;
    font-weight: bold;
}
#greetingwave {
    margin: auto;
    margin-right: 0px;
}

#myNavigation a {
    background-color: #C4DEF5;
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
/*navigation style end*/



/* Page logo title */
#logo-boy {
    z-index: -1;
    height: 100px;
}
#logo-book {
    margin-top: -30px;
    height: 20rem;
}

#logo-title {
    font-weight: bolder;
    margin-top: -15px;
    color: black;
}

/* */
#dictionary-input .col-xl-6 {
    border: solid 2px black;
    border-radius: 10px;
    background-color: #c4def575;
}
#dictionary-input .h2 {
    margin: 10px;
}
#dictionary-input img {
    margin-top: -15px;
}

#dictionary-input input {
    margin: 40px auto;
    display: block;
    border-radius: 10px;
    width: 70%;
    text-align: center;
    font-size: 2rem;
}

#dictionary-input button {
    margin: 30px;
    width: 10rem;
    border-radius: 20px;
    background-color: #FFD782;
}

#dictionary-input button img {
    transform: rotate(90deg);
    display: block;
    margin: auto;
}

#lightbulb {
    margin: auto;
    display: block;
}

#translationbox {
    /* border-top:solid 1px black; */
    font-size: 30px;
}

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
   
 <html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/all.min.css">
<link rel="stylesheet" href="../../css/fontawesome.min.css" />
<link rel="stylesheet" href="../../css/jquery.dataTables.min.css">



<title>Mother Tongue-Based Multilingual Education</title>
    <link rel="icon" href="img/mtml.png" type="image/ico">
</head>
<body>
<div class="container mt-4" id="myNavigation">
        <div class="row">
            <div class="col-md-4 align-items-center d-flex">
                <img src="../../img/dictionary/hand-wave.svg" alt="hand waving" width="60" height="60" id="greetingwave">
                <div class="display-5" id="greetingtxt"><?= $_SESSION["users"] ?></div>
            </div>
            <div class="col-6"></div>
            <div class="col-md-2">
                <div class="row">
                    <div class="col-xl-6 mt-1 mb-1">
                    <a href="../stories.php">
                            <img src="../../img/dictionary/book.svg" alt="home button">
                            <div class="h6">Home</div>
                        </a>
                    </div>
                    <div class="col-xl-6 mt-1 mb-1">
                        <a href="../../logout.php">
                            <img src="../../img/dictionary/logout.svg" alt="logout button">
                            <div class="h6">Logout</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
</div>
<div class = "container mt-2 bg-transparent text-dark mb-3 text-center">
    <div class = "img-con ">
        <img src = "../../img/stories/grade1/Grade 1 Short Stories_page-0005.png" width ="60%" height="80%"/>

    </div>
    <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="lizard.php" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item "><a class="page-link" href="jack.php">1</a></li>
    <li class="page-item "><a class="page-link" href="len.php">2</a></li>
    <li class="page-item  "><a class="page-link" href="pig.php">3</a></li>
    <li class="page-item"><a class="page-link" href="lizard.php">4</a></li>
    <li class="page-item active"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="bob.php">6</a></li>
    <li class="page-item"><a class="page-link" href="pat.php">7</a></li>
    <li class="page-item"><a class="page-link" href="trees.php">8</a></li>
    <li class="page-item"><a class="page-link" href="valndon.php">9</a></li>
    <li class="page-item"><a class="page-link" href="fish.php">10</a></li>

    <li class="page-item">
      <a class="page-link" href="bob.php">Next</a>
    </li>
  </ul>
</nav>
</div>

<script type = "text/javascript" src="../../js/bootstrap.bundle.min.js"></script>
<script type = "text/javascript" src="../../js/jquery.js" ></script>
<script type = "text/javascript" src="../../js/jquery.dataTables.min.js"></script>

</body>

</html>