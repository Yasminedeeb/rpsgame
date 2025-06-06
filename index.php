<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('location: login.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://use.fontawesome.com/093347fd9e.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;800;900&display=swap"
        rel="stylesheet">
       
    <title>Rock-Paper-Scissors</title>
</head>

<body>
    <div class="rect"></div>
    <div class="rect small"></div>

    <header>
        <h1>Rock Paper Scissors</h1>
    </header>
    <section>
        <div class="center">
            <div class="black"><span id="demo"></span><span caret>|</span></div>
        </div>
        
        <div class="cards">
            <div class="card">
                <img src="img/rock.png" alt="rock">
                <p>Rock</p>
                <button>Choose
            </div>
            <div class="card">
                <img src="img/paper.png" alt="rock">
                <p>Paper</p>
                <button>Choose
            </div>
            <div class="card">
                <img src="img/scissors.png" alt="rock">
                <p>Scissors</p>
                <button>Choose
            </div>
            <div id="scoreboard" class="hide">
                <p id="result"></p>
                <button id="retry"><i class="fa fa-repeat" aria-hidden="true"></i> Retry
            </div>
            <div id="1" class="card hide right">
                <img src="img/rock.png" alt="rock">
                <p>Rock</p>
            </div>
            <div id="2" class="card hide right">
                <img src="img/paper.png" alt="rock">
                <p>Paper</p>
            </div>
            <div id="3" class="card hide right">
                <img src="img/scissors.png" alt="rock">
                <p>Scissors</p>
            </div>
        </div>
    </section>
    <footer>
        <div class="black"><span id="scoreText">Score</span></div>
        <div class="black"><span id="highScoreText">Win Streak</span></div>
    </footer>
    <script src="app.js"></script>
</body>

</html>