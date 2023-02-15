<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="style.css"> -->
<style>
 @import url("https://fonts.googleapis.com/css?family=Lato:100,300,400");
@import url("https://fonts.googleapis.com/css?family=Roboto:100");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.header {
  text-align: center;
  font-family: "Roboto", sans-serif;
  font-size: 34px;
  margin-top: 12vh;
}

.footer {
  text-align: center;
  font-family: "Lato", sans-serif;
  font-weight: 300;
  font-size: 20px;
  margin-top: 15vh;
}

.button-container-1 {
  position: relative;
  width: 100px;
  height: 50px;
  margin-left: auto;
  margin-right: auto;
  margin-top: 6vh;
  overflow: hidden;
  border: 1px solid;
  font-family: "Lato", sans-serif;
  font-weight: 300;
  font-size: 20px;
  transition: 0.5s;
  letter-spacing: 1px;
  border-radius: 8px;
}
.button-container-1 button {
  width: 101%;
  height: 100%;
  font-family: "Lato", sans-serif;
  font-weight: 300;
  font-size: 11px;
  letter-spacing: 1px;
  font-weight: bold;
  background: #000;
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
  width: 100px;
  height: 50px;
  margin-left: auto;
  margin-right: auto;
  margin-top: 7vh;
  overflow: hidden;
  border: 1px solid #000;
  font-family: "Lato", sans-serif;
  font-weight: 300;
  transition: 0.5s;
  letter-spacing: 1px;
  border-radius: 8px;
}
.button-container-2 button {
  width: 101%;
  height: 100%;
  font-family: "Lato", sans-serif;
  font-weight: 300;
  font-size: 11px;
  letter-spacing: 1px;
  font-weight: bold;
  background: #000;
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
  color: #000;
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
	<script type = "text/javascript" src="../js/jquery.js" ></script>
    <title>Document</title>

</head>
<body>
<div class="header">CSS-MASK BUTTON HOVER ANIMATION 
    ( Experimental )</div>
    <div class="button-container-1">
      <span class="mas">MASK1</span>
    <button id='work' type="button" name="Hover">MASK1</button>
  </div>

  <div class="button-container-2">
    <span class="mas">MASK2</span>
  <button type="button" name="Hover">MASK2</button>
</div>

<div class="button-container-3">
  <span class="mas">MASK3</span>
<button type="button" name="Hover">MASK3</button>
</div>

<div class="footer">Inspired by <a href="https://tympanus.net/codrops/2016/09/29/transition-effect-with-css-masks/">this</a> codrops article</div>
<script>

  </script>
</body>
</html>