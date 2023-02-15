
<?php 
session_start();
    if(!isset($_SESSION["username"])) {
        $_SESSION['message'] = "Please log-in first to continue";
        header("location: index.php");
        }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Mother Tongue-Based Multilingual Education</title>
  <!-- <link rel="icon" href="img/mtml.png" type="image/ico"> -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/all.min.css">
	<link rel="stylesheet" href="../css/fontawesome.min.css" />
	<link rel="stylesheet" href="../css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="../css/hover.css">
  <link href="https://fonts.googleapis.com/css2?family=Bellota+Text:wght@300&family=Henny+Penny&display=swap" rel="stylesheet">

   
  
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

/* para sa effect ng button */
particle {
  position: fixed;
  top: 0;
  left: 0;
  opacity: 0;
  pointer-events: none;
  background-repeat: no-repeat;
  background-size: contain;
}
.nav_select:hover{
			background-color: #66A29F;
			color:white;
			
		}


.preloader {
  position: absolute;
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/127738/mario-face.png);
}
/* new effect */
@import url("https://fonts.googleapis.com/css?family=Lato:100,300,400");
@import url("https://fonts.googleapis.com/css?family=Roboto:100");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.button-container-1 {
  position: relative;
  width: 400px;
  height: 50x;
  margin-left: auto;
  margin-right: auto;
  margin-top: 20px;
  overflow: hidden;
  border: 1px solid;
  font-weight: bolder;
  font-size: 1.5rem;
  transition: 0.5s;
  letter-spacing: 1px;
  border-radius: 8px;
  background: #FFF;
}
.button-container-1 button {
  width: 101%;
  height: 100%;
  font-family: "Lato", sans-serif;
  font-weight: 300;
  font-size: 1.5rem;
  letter-spacing: 1px;
  font-weight: bold;
  background: #66A29F;
  -webkit-mask: url("https://raw.githubusercontent.com/robin-dela/css-mask-animation/master/img/nature-sprite.png");
  mask: url("https://raw.githubusercontent.com/robin-dela/css-mask-animation/master/img/nature-sprite.png");
  -webkit-mask-size: 2300% 100%;
  mask-size: 2300% 100%;
  border: none;
  color: #fff;
  cursor: pointer;
  -webkit-animation: ani2 0.7s steps(22) forwards;
  animation: ani2 0.7s steps(22) forwards;
}
.button-container-1 button:hover {
  -webkit-animation: ani 0.7s steps(22) forwards;
  animation: ani 0.7s steps(22) forwards;
}

.button-container-2 {
  position: relative;
  width: 400px;
  height: 50x;
  margin-left: auto;
  margin-right: auto;
  margin-top: 20px;
  overflow: hidden;
  border: 1px solid;
  font-weight: bolder;
  font-size: 1.5rem;
  transition: 0.5s;
  letter-spacing: 1px;
  border-radius: 8px;
  background: #FFF;
}
.button-container-2 button {
  
  width: 101%;
  height: 100%;
  font-family: "Lato", sans-serif;
  font-weight: 300;
  font-size: 1.5rem;
  letter-spacing: 1px;
  font-weight: bold;
  background: #66A29F;
  -webkit-mask: url("https://raw.githubusercontent.com/robin-dela/css-mask-animation/master/img/urban-sprite.png");
  mask: url("https://raw.githubusercontent.com/robin-dela/css-mask-animation/master/img/urban-sprite.png");
  -webkit-mask-size: 3000% 100%;
  mask-size: 3000% 100%;
  border: none;
  color: #fff;
  cursor: pointer;
  -webkit-animation: ani2 0.7s steps(29) forwards;
  animation: ani2 0.7s steps(29) forwards;
}
.button-container-2 button:hover {
  -webkit-animation: ani 0.7s steps(29) forwards;
  animation: ani 0.7s steps(29) forwards;
}

.mas {
  position: absolute;
  color: #FFF;
  text-align: center;
  width: 101%;
  font-family: "Lato", sans-serif;
  font-weight: 300;
  position: absolute;
  font-size: 11px;
  margin-top: 17px;
  overflow: hidden;
  font-weight: bold;
}

@-webkit-keyframes ani {
  from {
    -webkit-mask-position: 0 0;
    mask-position: 0 0;
  }
  to {
    -webkit-mask-position: 100% 0;
    mask-position: 100% 0;
  }
}
@keyframes ani {
  from {
    -webkit-mask-position: 0 0;
    mask-position: 0 0;
  }
  to {
    -webkit-mask-position: 100% 0;
    mask-position: 100% 0;
  }
}
@-webkit-keyframes ani2 {
  from {
    -webkit-mask-position: 100% 0;
    mask-position: 100% 0;
  }
  to {
    -webkit-mask-position: 0 0;
    mask-position: 0 0;
  }
}
@keyframes ani2 {
  from {
    -webkit-mask-position: 100% 0;
    mask-position: 100% 0;
  }
  to {
    -webkit-mask-position: 0 0;
    mask-position: 0 0;
  }
}
a {
  color: #00ff95;
}

.button-container-3 {
  position: relative;
  width: 100px;
  height: 50px;
  margin-left: auto;
  margin-right: auto;
  margin-top: 8vh;
  overflow: hidden;
  border: 1px solid #000;
  font-family: "Lato", sans-serif;
  font-weight: 300;
  transition: 0.5s;
  letter-spacing: 1px;
  border-radius: 8px;
}
.button-container-3 button {
  width: 101%;
  height: 100%;
  font-family: "Lato", sans-serif;
  font-weight: 300;
  font-size: 11px;
  letter-spacing: 1px;
  font-weight: bold;
  background: #000;
  -webkit-mask: url("https://raw.githubusercontent.com/pizza3/asset/master/natureSmaller.png");
  mask: url("https://raw.githubusercontent.com/pizza3/asset/master/natureSmaller.png");
  -webkit-mask-size: 7100% 100%;
  mask-size: 7100% 100%;
  border: none;
  color: #fff;
  cursor: pointer;
  -webkit-animation: ani2 0.7s steps(70) forwards;
  animation: ani2 0.7s steps(70) forwards;
}
.button-container-3 button:hover {
  -webkit-animation: ani 0.7s steps(70) forwards;
  animation: ani 0.7s steps(70) forwards;
}/*# sourceMappingURL=style.css.map */
/*# sourceMappingURL=style.css.map */

   </style>
</head>

<body  style = "background-image: url(../img/bg1.png);">
<!-- new code -->
<div class="container p-2" id="myNavigation">
        <div class="row">
        <div class="col-md-4 align-items-center d-flex">
                <img src="../img/dictionary/waving-hello.gif" alt="hand waving" width="150px" height="100px" id="greetingwave">
                <div class="h4 fw-bold hvr-float-shadow" id="greetingtxt">Hi! <?= $_SESSION["users"] ?></div>
            </div>
            <div class="col-6"></div>
            <div class="col-md-2">
                <div class="row">
                    <div class="col-xl-6 mt-1 mb-1">
                        <a href="../user_dashboard.php" class="nav_select hvr-pulse-shrink">
                            <img src="../img/dictionary/home.svg" alt="home button">
                            <div class="h6">Home</div>
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
<div class="d-grid gap-2 col-12 mx-auto py-5">
    <h1 class = " fw-bold">Piliin sa ibaba ang gusto mong mangyari.</h1>
    
<div class="button-container-1">
  <span class="mas pt-3" style = "font-size:1.5rem;color: #66A29F; ">Tagalog - Ilocano</span>

  <button data-type="square" id = "work" onclick="location.href='tagalogilocano.php'"  class = " btn btn-lg mb-5 " >Tagalog - Ilocano</button>
</div>


<div class="button-container-2">
  <span class="mas pt-3" style = "font-size:1.5rem;color: #66A29F; ">Ilocano - Tagalog</span>

  <button data-type="shadow" id = "work" onclick="location.href='ilocanotagalog.php'"  class = " btn btn-lg mb-5 " >Ilocano - Tagalog</button>

</div>



  <span class="preloader"></span>

    </div>
</div>

   
<script type = "text/javascript" src="../js/bootstrap.bundle.min.js"></script>
<script type = "text/javascript" src="../js/jquery.js" ></script>
<script type = "text/javascript" src="../js/jquery.dataTables.min.js"></script>

<script>
    function pop (e) {
  let amount = 30;
  switch (e.target.dataset.type) {
    case 'shadow':
    case 'line':
      amount = 60;
      break;
  }
  // Quick check if user clicked the button using a keyboard
  if (e.clientX === 0 && e.clientY === 0) {
    const bbox = e.target.getBoundingClientRect();
    const x = bbox.left + bbox.width / 2;
    const y = bbox.top + bbox.height / 2;
    for (let i = 0; i < 30; i++) {
      // We call the function createParticle 30 times
      // We pass the coordinates of the button for x & y values
      createParticle(x, y, e.target.dataset.type);
    }
  } else {
    for (let i = 0; i < amount; i++) {
      createParticle(e.clientX, e.clientY + window.scrollY, e.target.dataset.type);
    }
  }
}
function createParticle (x, y, type) {
  const particle = document.createElement('particle');
  document.body.appendChild(particle);
  let width = Math.floor(Math.random() * 30 + 8);
  let height = width;
  let destinationX = (Math.random() - 0.5) * 300;
  let destinationY = (Math.random() - 0.5) * 300;
  let rotation = Math.random() * 520;
  let delay = Math.random() * 200;
  
  switch (type) {
    case 'square':
      particle.style.background = `hsl(${Math.random() * 90 + 270}, 70%, 60%)`;
      particle.style.border = '1px solid white';
      break;
    case 'emoji':
      particle.innerHTML = ['❤','🧡','💛','💚','💙','💜','🤎'][Math.floor(Math.random() * 7)];
      particle.style.fontSize = `${Math.random() * 24 + 10}px`;
      width = height = 'auto';
      break;
    case 'mario':
      particle.style.backgroundImage = 'url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/127738/mario-face.png)';
      break;
    case 'shadow':
      var color = `hsl(${Math.random() * 90 + 90}, 70%, 50%)`;
      particle.style.boxShadow = `0 0 ${Math.floor(Math.random() * 10 + 10)}px ${color}`;
      particle.style.background = color;
      particle.style.borderRadius = '50%';
      width = height = Math.random() * 5 + 4;
      break;
    case 'line':
      var color = `hsl(${Math.random() * 90 + 90}, 70%, 50%)`;
      particle.style.background = 'black';
      height = 1;
      rotation += 1000;
      delay = Math.random() * 1000;
      break;
  }
  
  particle.style.width = `${width}px`;
  particle.style.height = `${height}px`;
  const animation = particle.animate([
    {
      transform: `translate(-50%, -50%) translate(${x}px, ${y}px) rotate(0deg)`,
      opacity: 1
    },
    {
      transform: `translate(-50%, -50%) translate(${x + destinationX}px, ${y + destinationY}px) rotate(${rotation}deg)`,
      opacity: 0
    }
  ], {
    duration: Math.random() * 1000 + 5000,
    easing: 'cubic-bezier(0, .9, .57, 1)',
    delay: delay
  });
  animation.onfinish = removeParticle;
}
function removeParticle (e) {
  e.srcElement.effect.target.remove();
}

if (document.body.animate) {
  document.querySelectorAll('button').forEach(button => button.addEventListener('click', pop));
}

</script>
</body>

</html>