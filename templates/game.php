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
                    <p>Score: 0</p>
                    <button type="button" class="btn btn-danger" title="New Game button">New Game</button>
                </div>
            </section>
            <section>
                <div class="content col-6">
                    <h1>Opponent</h1>
                    <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups"  style="background-image: url('styles/grid.png')">
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="a0o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a1o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a2o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a3o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a4o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a5o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a6o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a7o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a8o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a9o"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="b0o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b1o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b2o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b3o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b4o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b5o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b6o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b7o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b8o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b9o"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="c0o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c1o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c2o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c3o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c4o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c5o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c6o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c7o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c8o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c9o"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="d0o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d1o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d2o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d3o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d4o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d5o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d6o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d7o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d8o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d9o"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="e0o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e1o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e2o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e3o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e4o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e5o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e6o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e7o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e8o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e9o"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="f0o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f1o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f2o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f3o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f4o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f5o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f6o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f7o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f8o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f9o"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="g0o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g1o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g2o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g3o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g4o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g5o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g6o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g7o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g8o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g9o"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="h0o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h1o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h2o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h3o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h4o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h5o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h6o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h7o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h8o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h9o"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="i0o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i1o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i2o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i3o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i4o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i5o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i6o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i7o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i8o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i9o"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="j0o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j1o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j2o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j3o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j4o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j5o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j6o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j7o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j8o"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j9o"></button>
                        </div>
                    </div>
                </div>
                <div class="content col-6">
                    <h1><?=$user["username"]?></h1>
                    <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups"  style="background-image: url('styles/grid.png')">
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="a0u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a1u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a2u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a3u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a4u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a5u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a6u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a7u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a8u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a9u"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="b0u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b1u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b2u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b3u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b4u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b5u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b6u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b7u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b8u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b9u"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="c0u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c1u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c2u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c3u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c4u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c5u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c6u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c7u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c8u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c9u"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="d0u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d1u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d2u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d3u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d4u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d5u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d6u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d7u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d8u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d9u"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="e0u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e1u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e2u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e3u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e4u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e5u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e6u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e7u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e8u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e9u"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="f0u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f1u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f2u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f3u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f4u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f5u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f6u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f7u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f8u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f9u"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="g0u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g1u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g2u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g3u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g4u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g5u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g6u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g7u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g8u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g9u"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="h0u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h1u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h2u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h3u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h4u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h5u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h6u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h7u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h8u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h9u"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="i0u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i1u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i2u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i3u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i4u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i5u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i6u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i7u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i8u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i9u"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="j0u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j1u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j2u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j3u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j4u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j5u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j6u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j7u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j8u"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j9u"></button>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </body>
</html>