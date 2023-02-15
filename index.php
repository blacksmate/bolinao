<html>
    <head>
        <title>Starwars</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- start ng start -->
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Aldrich'>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    </head>
    <body>
    <div class="main">
            <img id="stars" src="star-yellow.png"/>
        </div>

        <div id="gameOver"> <p>Game Over, </p><p> Refresh to play again </p>
      
    </div>

        <p>Click on the star to catch it </p>
        <h1 id="heading">Galactic Star Catcher</h1>
        <div id="score"> 0</div>
        <div class="my-5 background-body text-center col border-end d-flex justify-content-evenly align-items-end">
<a class="btn btn-primary mx-5 text-white btn " href="login.php">
  Student Log-in
</a>
<a class="btn btn-primary mx-5 text-white btn " href="teacher.php">
  Admin Log-in
</a>
</div>
        <script>
            var countdown = 10;
            var starArray = [];
            starArray.push(['star-blue.png']);
            starArray.push(['star-purple.png']);
            starArray.push(['star-yellow.png']);
            var score = 0;

            function addScore() {
                score++;
                $('#score').text(score);
            }

            $('#stars').click(addScore);


            function moveStars(){
                var newCSS = {
                    'top':Math.random()*500+'px',
                    'left':Math.random()*1300+'px'
                };
                $('#stars').css(newCSS);

                var randomNum = Math.floor(Math.random()*starArray.length);
                var newStar = starArray[randomNum];

                $('#stars').attr('src', newStar);

            }

            setInterval(moveStars,1000);


            function gameOver() {
                $('#gameOver').show();
                $('#stars').hide();
            }

            setTimeout(gameOver,15000);

        </script>

    </body>
</html>