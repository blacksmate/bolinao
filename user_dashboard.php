
<?php 
session_start();
    if(!isset($_SESSION["username"])) {
        $_SESSION['status'] = "Please log-in first to continue";
        $_SESSION['status_code']= "error";
        // $_SESSION['message'] = "Please log-in first to continue";
        header("location:index.php");
        }

 ?>
<!-- new -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="css/mystyle.css">
<link href="https://fonts.googleapis.com/css2?family=Bellota+Text:wght@300&family=Henny+Penny&display=swap" rel="stylesheet">
<style>
    #greetingmsg{
        font-family: 'Bellota Text', cursive;
    }
</style>
</head>
<body>
 
    <div id="logoutbtn">
        <a href="logout.php"><button>Log Out</button></a>
    </div>

    <div id="greetingmsg" class = "hvr-bob py-3"></div>
    <hr id="head-divider"/>
    <div id="wrapper" class = "mt-1">
        <div id="nightbg" ></div>
        <div class="zzz1"></div>
        <div class="zzz2"></div>
        <div class="zzz3"></div>
        <div class="planet hvr-pulse" > 
            <div class="face">
                <div class="eye">
                    <div class="eye-in"></div>
                </div>
                <div class="mouth"></div>
                <div class="eye">
                    <div class="eye-in"></div>
                </div>
            </div>
        </div>
        <div class="star pos-star1 "></div>
        <div class="star pos-star2 "></div>
        <div class="star pos-star3 "></div>
    </div>
    <div class="cloudswrapper">
        <a href="dictionary/translationoption.php" class="cloud hvr-buzz">
            <div class="cloudTitle">Dictionary</div>
        </a>
        <a href="quiz/index.php?uid=<?=$_SESSION['uid']?>" class="cloud hvr-buzz">
            <div class="cloudTitle">Quiz</div>
        </a>
        <a href="stories/stories.php" class="cloud hvr-buzz">
            <div class="cloudTitle">Stories</div>
        </a>
    </div>

<!-- old -->
<script type = "text/javascript" src="js/jquery.js" ></script>
<script type = "text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type = "text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type = "text/javascript" src="js/alertify.min.js" ></script>
<script>
        $(document).ready(function() {
            $(".planet").click(function() {
                $('body').toggleClass('day');
            });

            let _hourOfDay = (new Date()).getHours();
            if (_hourOfDay >= 7 && _hourOfDay <= 19) {
                $('body').toggleClass("day");
                $("#greetingmsg").html("Good Morning <?php echo strtoupper ($_SESSION['users']); ?>!");
            } else {
                $("#greetingmsg").html("Good Evening <?php echo strtoupper ($_SESSION['users']); ?>!");
            }
            });


            <?php 
if(isset($_SESSION['status']) && $_SESSION['status']!= ''){
?>
swal({
        title:"<?= $_SESSION['status'];?>",
        icon:"<?=  $_SESSION['status_code'];?>",
        button: "Confirm"
    });
<?php
unset($_SESSION['status']);
}
?>
    </script>

<?php 
include 'inc/script.php';
?>
</body>
</html>