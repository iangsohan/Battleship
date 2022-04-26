<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="author" content="Emma Forrestal">
        <meta name="description" content="">
        <meta name="keywords" content="">   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/main.css">     
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="templates/main.js"></script>   
        <title>Battleship</title>
    </head>  
    <body onload="currentScore();">
        <header class="col-12">
            <nav>
                <ul>
                    <li><a href="?command=game">Play Game</a></li>
                    <li><a href="?command=scoreboard">Scoreboard</a></li>
                    <li class="active">
                        <a href="#">Instructions</a>
                    </li>
                    <li><a href="?command=logout">Log Out</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <div class="col-3">
                <p style="color: white;"> ©2022 UVA CS </p>
            </div>
            <div class="col-6">
                <img class="logo" src="styles/logo.png" alt="Battleship logo" />
            </div>
            <div class="score col-3">
                <p id="current-score">Current Score: 0</p>
                <button type="button" class="btn btn-danger" title="Play Game button" onclick="newGame();"><a href="?command=game" style="text-decoration:none; color:white;">Play Game</a></button>
            </div>
        </section>
        <section>
            <div class ="col-12" style="padding-top:20px;">
                <div class="row text-danger"><strong style="font-size: 50px; font-weight: bold; -webkit-text-stroke-width: 1.25px; -webkit-text-stroke-color: #b3becc;">Welcome to Battleship!</strong></div>
                <div class="col-6" style="color: #b3becc; font-size: 22px; padding: 35px; padding-top:40px;">
                    <p>To get started click the Play Game button in the top right or on the top bar. Then click the New Game button on the game page. This will randomly load where your 5 ships are placed on your board.Then, it's time to play Battleship!</p>
                    <p>For each of your turns, click a square on your opponents board. The square on their board will turn yellow if you missed one of their ships (-10 points) and red if you have a hit (+1000 points)! At the same time your opponent (the computer) will attack a spot on your board. If they hit your ship that square on your board will turn red (-500 points) and if they have a miss the square on your board will turn yellow (+20 points).</p>
                    <p> The first player to find all 16 squares of the opponents 5 ships wins! Your scoreboard will show you your top 15 scores, as well as the top 15 scores of everyone playing. Good luck!</p>
                </div>
                <img class="col-6" src="styles/example.png" alt="example board" style="width:45%; padding: 5vw; padding-top:2.5vw; text-align:center;"/>
            </div>
        </section>
    </body>
</html>
