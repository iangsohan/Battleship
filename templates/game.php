<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="author" content="Ian Sohan">
        <meta name="description" content="">
        <meta name="keywords" content="">   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/main.css">     
        <title>Battleship</title>
    </head>  
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <header class="col-12">
            <nav>
                <ul>
                    <li class="active">
                        <a href="#">Play Game</a>
                    </li>
                    <li><a href="?command=scoreboard">Scoreboard</a></li>
                    <li><a href="?command=instructions">Instructions</a></li>
                    <li><a href="?command=logout">Log Out</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <section>
                <div class="col-3">
                    <p style="color: white;"> ©2022 UVA CS </p>
                </div>
                <div class="col-6">
                    <img class="logo" src="styles/logo.png" alt="Battleship logo" />
                </div>
                <div class="score col-3">
                    <p id="score">Score: 0</p>
                    <button type="button" class="btn btn-danger" title="New Game button" onclick="newGame();">New Game</button>
                </div>
            </section>
            <section>
                <div class="content col-6">
                    <h1>Opponent</h1>
                    <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups"  style="background-image: url('styles/grid.png')">
                        <?php for ($i = 0; $i < 10; $i++) { ?>
                            <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                                <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title=<?= "oa". (string)($i*10)?>  id=<?=(string)($i*10)?>></button>
                                <?php for ($j = $i * 10 + 1; $j < ($i + 1) * 10; $j++) { ?>
                                    <button type="button" class="btn btn-outline-secondary" title=<?="oa". (string)($j)?> id=<?=(string)($j)?>></button>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="content col-6">
                    <h1><?=$user["username"]?></h1>
                    <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups"  style="background-image: url('styles/grid.png')">
                        <?php for ($i = 10; $i < 20; $i++) { ?>
                            <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                                <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title=<?="au". (string)($i*10)?>  id=<?=(string)($i*10)?>></button>
                                <?php for ($j = $i * 10 + 1; $j < ($i + 1) * 10; $j++) { ?>
                                    <button type="button" class="btn btn-outline-secondary" title=<?="au". (string)($j)?> id=<?=(string)($j)?>></button>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </section>

        <form action="?command=recordScore" method="post" hidden>
            <input type="text" class="form-control" id="record_score" name="record_score" value="">
        </form>
        <script src="templates/main.js"></script>
    </body>
</html>