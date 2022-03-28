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
                    <li class="active">
                        <a href="#">Scoreboard</a>
                    </li>
                    <li><a href="?command=instructions">Instructions</a></li>
                    <li><a href="?command=logout">Log Out</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <!-- <section>
                <div class="col-12">
                    <img class="logo" style="width: 30%;" src="styles/logo.png"/>
                </div>
            </section> -->
            <section>
                <div class="col-3">
                    <p style="color: white;"> ©2022 UVA CS </p>
                </div>
                <div class="col-6">
                    <img class="logo" src="styles/logo.png" alt="Battleship logo"/>
                </div>
            </section>
            <section>
                <div class="content col-6">
                    <h1>Personal Scores</h1>
                    <table class="table table-striped table-light table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Score</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>IGS2MN</td>
                                <td>1000000</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>IGS2MN</td>
                                <td>999999</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>IGS2MN</td>
                                <td>999998</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>IGS2MN</td>
                                <td>999997</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>IGS2MN</td>
                                <td>999996</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>IGS2MN</td>
                                <td>999995</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>IGS2MN</td>
                                <td>999994</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>IGS2MN</td>
                                <td>999993</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>IGS2MN</td>
                                <td>999992</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>IGS2MN</td>
                                <td>999991</td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>IGS2MN</td>
                                <td>999990</td>
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td>IGS2MN</td>
                                <td>999989</td>
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td>IGS2MN</td>
                                <td>999988</td>
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td>IGS2MN</td>
                                <td>999987</td>
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td>IGS2MN</td>
                                <td>999986</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="content col-6">
                    <h1>Community Scores</h1>
                    <table class="table table-striped table-dark table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Score</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>IGS2MN</td>
                                <td>1000000</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>IGS2MN</td>
                                <td>999999</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>IGS2MN</td>
                                <td>999998</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>IGS2MN</td>
                                <td>999997</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>IGS2MN</td>
                                <td>999996</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>IGS2MN</td>
                                <td>999995</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>IGS2MN</td>
                                <td>999994</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>IGS2MN</td>
                                <td>999993</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>IGS2MN</td>
                                <td>999992</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>IGS2MN</td>
                                <td>999991</td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>IGS2MN</td>
                                <td>999990</td>
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td>IGS2MN</td>
                                <td>999989</td>
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td>IGS2MN</td>
                                <td>999988</td>
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td>IGS2MN</td>
                                <td>999987</td>
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td>IGS2MN</td>
                                <td>999986</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>
    </body>
</html>