<?php
session_start();
include '../inc/connection.php';
    if(!isset($_SESSION["username"])) {
        $_SESSION['message'] = "Please log-in first to continue";
        header("location: ../index.php");
        }

if(isset($_POST['submit'])){
  $ilocano =trim($_POST['ilocano']);
  $query ="SELECT * from tagalogilocano where word_ilocano LIKE :convert";
  $stmt = $PDO->prepare($query);
  $stmt->bindValue(':convert',"%$ilocano%");
  $stmt->execute();
  $values= $stmt->fetch(PDO::FETCH_ASSOC);
  if($values){
    $tagalog = $values['word_tagalog'];
  }
  else{
    $tagalog = "No Results Found!";
}

}

?>
   <style>
    /*navigation style*/
    #greetingtxt, h1 {
      
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

/* Page logo title */
#logo-boy {
    z-index: -1;
    height: 80px;
}
#logo-book {
    margin-top: -30px;
    height: 150px;
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
#display-5{
    font-family: 'Bellota Text', cursive;
    font-size: 4rem;
    font-weight: bold;
}
   </style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Mother Tongue-Based Multilingual Education</title>
<link rel="icon" href="img/mtml.png" type="image/ico">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/all.min.css">
<link rel="stylesheet" href="../css/fontawesome.min.css" />
<link rel="stylesheet" href="../css/jquery.dataTables.min.css">
<link href="https://fonts.googleapis.com/css2?family=Bellota+Text:wght@300&family=Henny+Penny&display=swap" rel="stylesheet">



</head>

<body  style = "background-image: url(../img/bg1.png);">
<div class="container " id="myNavigation">
<div class="row">
    <div class="col-md-4 align-items-center d-flex">
            <img src="../img/dictionary/waving-hello.gif" alt="hand waving" width="150px" height="100px" id="greetingwave">
            <div class="h4 fw-bold hvr-float-shadow" id="greetingtxt">Hi! <?= $_SESSION["users"] ?></div>
    </div>
    <div class="col-6"></div>
        <div class="col-md-2">
            <div class="row">
                <div class="col-xl-6 mt-1 mb-1">
                    <a href="translationoption.php" class="nav_select hvr-pulse-shrink">
                        <img src="../img/dictionary/book.svg" alt="home button">
                        <div class="h6">Dictionary </div>
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
<div class="row" id="dictionary-input">
            <div class="col-3"></div>
            <div class="col-xl-6 text-center mt-4 mb-4">
                <img src="../img/dictionary/letters.svg" alt="letters logo" height="60">
                <div class="h2">Ilocano -> Tagalog</div>
                <form  class= "needs-validation " action = ""  method = "POST">
            
                  <input type="text" class="form-control text-break" placeholder= "ilocano" name = "ilocano" value = "<?php echo htmlspecialchars($_POST['tagalog'] ?? '', ENT_QUOTES); ?>"  required >
                    <button  name= "submit" type="submit">
                        <img src="../img/dictionary/arrows.svg" alt="Translate arrows" height="30">
                        <div class="h5">I-Translate</div>
                    </button>
                </form>
            </div>
            <div class="col-3"></div>
</div>
    <div class="row text-center">
        <img src="../img/dictionary/lightbulb.svg" alt="lightbulb" height="60px">
        <p class="h2">Translation</p>
        <div class="col-4">
        </div>
        <div class="col-xl-4 text-center" id="translationbox">
            <hr />
            <p  id = "display-5"><?php echo htmlspecialchars($tagalog?? '', ENT_QUOTES);?></p>
      
        </div>
    </div>
</div>


<script type = "text/javascript" src="../js/bootstrap.bundle.min.js"></script>
<script type = "text/javascript" src="../js/jquery.js" ></script>
<script type = "text/javascript" src="../js/jquery.dataTables.min.js"></script>
</body>

</html>