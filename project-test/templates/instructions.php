<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 

        <meta name="author" content="Emma Forrestal & Ian Sohan">
        <meta name="description" content="">
        <meta name="keywords" content="">   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/main.css">     
        <title>Battleship</title>
    </head>  
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
                <img class="logo" src="styles/logo.png" alt="Battleship logo"/>
            </div>
        </section>
    </body>
</html>