<?php
  session_start();
  include 'inc/header.php';

  ?>


   <style>
html,
body {
  height: 100%; 
}

.form-signin {
  width: 100%;
  max-width: 350px;
  margin: auto;
  font-weight: 400;
  z-index: 2;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-image: url("img/baby-panda.gif");
  background-repeat: repeat;
}

/* Panda login form CSS */
.backg{
    position: absolute;
   }
.login{
    height:220px;
    width: 280px;
    background-color: rgb(255, 255, 255); 
    position: relative;
    top:190px;
    left:25px;
    padding-left: 30px;
    box-sizing: border-box;
    z-index: 1;		
    padding-top: 50px;
    border-radius: 10px;
}
.frm{
    position: relative;
    top:50px;
    
}
.face{
    height: 120px;
    width: 135px;
    background-color: white;
    border-radius:120px 120px 90px 90px;
    position: relative;
    bottom: 40px;
}
.earl,.earr{
    background-color: #4d4449;
    height: 40px;
    width: 45px;
    border-radius: 43px 43px 0 0;
}
.earl{
    transform: rotate(-38deg);
    -webkit-transform: rotate(-38deg);
    position: relative;
    top:31px;
    right: 2px;
}
.earr{
    transform: rotate(38deg);
    -webkit-transform: rotate(38deg);
    position: relative;
    bottom:8px;
    left:96px;
}
.panda{
    position: relative;
    bottom:190px;
    left:100px;

}
.eyel,.eyer{
    background-color: #4d4449;
    height: 35px;
    width: 32px;
    border-radius:32px; 
    position: relative;	
}
.eyel{
    top:5px;
    left:22px;
    transform:rotate(-20deg); 
    -webkit-transform:rotate(-20deg); 
        
}
.eyer{
    transform: rotate(20deg);
    -webkit-transform: rotate(20deg);
    bottom:30.5px;
    left:80px;
}
.blshl,.blshr{
    background-color:#ff9999;
    height: 16px;
    width:22px;  
    border-radius: 50%;
    position: relative;
    opacity: 0.8;
}
.blshl{
    transform: rotate(25deg);
    -webkit-transform: rotate(25deg);
    position: relative;
    top:64px;
    left:17px;
}
.blshr{
    transform: rotate(-25deg);
    -webkit-transform: rotate(-25deg);
    position: relative;
    top:46px;
    left:95px;
}
.eyeball1,.eyeball2{
    height: 10px;
    width: 10px;
    background-color: white;
    border-radius: 50%;
    position: relative;
    transition:1s all;
    -webkit-transition:1s all;
}
.eyeball1{
    left:10px;
    top:10px;
    transform: rotate(20deg);
    -webkit-transform: rotate(20deg);
    
}
.eyeball2{
    left:10px;
    top:10px;
    transform: rotate(-20deg);
    -webkit-transform: rotate(-20deg);
}
.nose{
    height:17px;
    width: 17px;
    background-color: #4d4449;
    border-radius: 20px 0px 4px;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    position: relative;
    bottom: 30px;
    left:60px;  
}
.line{
    background-color: #4d4449;
    height:10px;
    width:2px;
    position: relative;
    transform:rotate(-45deg);
    -webkit-transform:rotate(-45deg);
    left:18.5px;
    top:15px;

}
.m,.mm{
    background-color: #4d4449;
    height:8px; 
    width: 15px;
    border-radius:0 0 8px 8px;
    position: relative;
     
}
.m{
    bottom: 21px;
    left:53px;
}
.m1{
    height: 6px;
    width: 13px;
    background-color: white;
    border-radius: 0 0 10px 10px;
    position: relative;
    left:1px;
    bottom:1px;
}
.mm{
    bottom: 30px;
    left:68.5px;
}
.handl,.handr{
    background-color:#4d4449;
    height:45px;
    width: 35px;
    border-radius:10px 10px 30px 30px;  
    z-index: 2;
    transition:1s all;
    -webkit-transition:1s all;
}
.handl{
    position: relative;
    bottom: 140px;
    left: 50px;
}
.handr{
    position: relative;
    bottom:185px;
    left:250px;
}
.pawl,.pawr{
    background-color: #4d4449;
    height: 50px;
    width: 50px;
    border-radius: 40px 40px 20px 20px;
    position: relative;
    z-index: 2;

}
.pawl{
    top:170px;
    left:80px;
}
.pawr{
    top:120px;
    left:200px;
}
.p1{
    background-color: white;
    height: 25px;
    width: 30px;
    position: relative;
    top:21px;
    left:10px;
    border-radius: 25px 25px 10px 10px;
}
.p2,.p3,.p4{
    background-color:white;
    height: 10px;
    width: 10px;
    border-radius: 50%;
    position: relative;
}
.p2{
    bottom:13px;
    left:9.5px;
}
.p3{
    bottom:17.2px;
    right:2.5px;
}
.p4{
    bottom:27.2px;
    left:22px;
}
span{
    color:#4d4449;
    font-family: 'Ubuntu', sans-serif;
}
input{
    color: #4d4449;
    width: 180px;
    border:none;
    outline: none;
    border-bottom: 1px solid #4d4449;
    font-family: 'Ubuntu', sans-serif;
}
.fa{
color:#4d4449; 
font-size: 20px;
outline: none;
}
 #btn_login {
background-color: #8cc8a2;
outline: none;
border:none;
color: white;
font-family: 'Ubuntu', sans-serif;
font-size: 23px;
text-transform: uppercase;
padding: 5px;
position: relative;
left:72px;
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
</head>

<body>
<div class="container-fluid">
    
    <div class = "container">
    <main class="form-signin">


    <form  class="needs-validation" action="function/loginfunction.php"  method="POST">
    <?php if(!empty($statusMsg))
    { 
      echo showMessage($statusType,$statusMsg);
    }
    ?>
			<div class="login">
				
				<i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;</i>
        <input type="text" name="username" id="usernameLogin" placeholder="username" onfocus="inputUsername()"></input type="text"><br><br>
				<i class="fa fa-unlock-alt" aria-hidden="true">&nbsp;&nbsp;</i><input type="password" name="password" id="passwordLogin" placeholder="password" onfocus="inputPassword()"><br><br>
				<button type="submit" name="btn_login" class = "btn_login"  id = "btn_login" style="border-radius: 5px;">Login</button>
			
			</div>
			<div class="backg">
				<div class="panda">
					<div class="earl"></div>
					<div class="earr"></div>
					<div class="face">
						<div class="blshl"></div>
						<div class="blshr"></div>
						<div class="eyel">
							<div class="eyeball1"></div>
						</div>
						<div class="eyer">
							<div class="eyeball2"></div>
						</div>
						<div class="nose">
							<div class="line"></div>
						</div>
						<div class="mouth">
							<div class="m">
								<div class="m1"></div>
							</div>
							<div class="mm">
								<div class="m1"></div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="pawl">
				<div class="p1">
						<div class="p2"></div>
						<div class="p3"></div>
						<div class="p4"></div>
						</div>
			</div>
			<div class="pawr">
				<div class="p1">
					<div class="p2"></div>
					<div class="p3"></div>
					<div class="p4"></div>
				</div>
			</div>
			<div class="handl"></div>
			<div class="handr"></div>
    
    </form>
    </main>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type = "text/javascript" src="js/jquery.js" ></script>
<script type = "text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type = "text/javascript" src="js/bootstrap.bundle.min.js"></script>
<script type = "text/javascript" src="js/alertify.min.js" ></script>
<script>
  //animation for, when username input is onfocus
  function inputUsername(){
    $(".handl").css({
      transform: 'rotate(0deg)',
      bottom: '140px',
      left:'50px',
      height:'45px',
      width:'35px'
    });
    $(".handr").css({
      transform: 'rotate(0deg)',
      bottom: '185px',
      left:'250px',
      height:'45px',
      width:'35px'
    });
    $(".eyeball1").css({
      top: '20px',
      left: '13px'
    });
    $(".eyeball2").css({
      top: '20px',
      left: '8px'
    });
  }

  //animation for, when password input is onfocus
  function inputPassword(){
    $(".eyeball1").css({
      top: '10px',
      left: '10px'
    });
    $(".eyeball2").css({
      top: '10px',
      left: '10px'
    });
    $(".handl").css({
      transform: 'rotate(-150deg)',
      bottom: '215px',
      left:'105px',
      height:'90px',
      width:'40px'
    });
    $(".handr").css({
      transform: 'rotate(150deg)',
      bottom: '308px',
      left:'192px',
      height:'90px',
      width:'40px'
    });
  }


  

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