<?php
  session_start();

//   if(!empty($_GET['status'])){
//     switch($_GET['status']){
//         case 'succ':
//             $statusType = 'success';
//             $statusMsg = 'Login Successfully';
//         break;
//         case 'err':
//             $statusType = 'danger';
//             $statusMsg = 'Incorrect Username/Password';
//         break;

//         default:
//         $statusType='';
//         $statusMsg='';
//     }
// }
  ?>


   <style>
html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.h3{
    text-shadow: 2px 2px 2px rgba(0,0,0,.2);
}
    </style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">


    <title>Mother Tongue-Based Multilingual Education</title>
    <link rel="icon" href="img/mtml.png" type="image/ico">
    
</head>

<body>


<div class="container-fluid log-in">
    
    <div class = "container">
    <main class="form-signin">


    <form  class= "needs-validation" action = "function/teacherlogin.php"  method = "POST"  >
    <?php if(!empty($statusMsg))
    { 
      echo showMessage($statusType,$statusMsg);
    }
    ?>
    <h1 class="h3 mt-5 mb-3 fw-normal">Please sign in  Teacher!</h1>
    <div class="form-floating mb-3">
      <input type="text" name = "username" class="form-control" id="username" placeholder="name@example.com">
      <label for="username">Username</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" name = "password" class="form-control" id="password" placeholder="Password">
      <label for="password">Password</label>
<button class="w-100 btn btn-lg btn-primary" name = "btn_login" type="submit">Sign in</button>    </div>



    <?php

    ?>


    <!-- <hr class ="bg-primary border-1 border-top border-primary">
    <div class="d-grid gap-2 d-md-block text-center">
        <a class="btn btn-success btn-sm mb-3 mt-3 " href="signup.php">
        <i class="fa fa-user-plus" aria-hidden = "true">
        </i> Sign up
        </a>
    </div> -->
    
    </form>
    </main>
    </div>
    <!-- <button class = "btn btn-light mb-3 mt-3" name= "awe"type = "submit" onclick="print();">
        Press Me!
    </button> -->
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type = "text/javascript" src="js/jquery.js" ></script>
<script type = "text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type = "text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type = "text/javascript" src="js/alertify.min.js" ></script>
<script>
    // function print(){
    //     swal("Good job!", "You clicked the button!", "success");
    // }


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
</body>
</html>