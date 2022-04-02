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
            <section>
                <div class="col-3">
                    <p style="color: white;"> ©2022 UVA CS </p>
                </div>
                <div class="col-6">
                    <img class="logo" src="styles/logo.png" alt="Battleship logo" />
                </div>
                <div class="score col-3">
                    <p>Current Score: 0</p>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Change Username button">
                        Change Username
                    </button>
                    <br>
                    <p><?=$change_error_message?></p>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="change-username modal-header">
                                    <h3 class="modal-title" id="exampleModalLabel">Change Username</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="?command=changeUsername" method="post">
                                    <div class="change-username modal-body">
                                            <p>New Username: <input type="text" class="form-control" id="change_username" name="change_username" required></p>
                                            <p>Password: <input type="password" class="form-control" id="change_password" name="change_password" required></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
                                <td><?=$personal_scores[0]['username']?></td>
                                <td><?=$personal_scores[0]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><?=$personal_scores[1]['username']?></td>
                                <td><?=$personal_scores[1]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><?=$personal_scores[2]['username']?></td>
                                <td><?=$personal_scores[2]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><?=$personal_scores[3]['username']?></td>
                                <td><?=$personal_scores[3]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><?=$personal_scores[4]['username']?></td>
                                <td><?=$personal_scores[4]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td><?=$personal_scores[5]['username']?></td>
                                <td><?=$personal_scores[5]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td><?=$personal_scores[6]['username']?></td>
                                <td><?=$personal_scores[6]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td><?=$personal_scores[7]['username']?></td>
                                <td><?=$personal_scores[7]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td><?=$personal_scores[8]['username']?></td>
                                <td><?=$personal_scores[8]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td><?=$personal_scores[9]['username']?></td>
                                <td><?=$personal_scores[9]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td><?=$personal_scores[10]['username']?></td>
                                <td><?=$personal_scores[10]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td><?=$personal_scores[11]['username']?></td>
                                <td><?=$personal_scores[11]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td><?=$personal_scores[12]['username']?></td>
                                <td><?=$personal_scores[12]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td><?=$personal_scores[13]['username']?></td>
                                <td><?=$personal_scores[13]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td><?=$personal_scores[14]['username']?></td>
                                <td><?=$personal_scores[14]['score']?></td>
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
                                <td><?=$community_scores[0]['username']?></td>
                                <td><?=$community_scores[0]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><?=$community_scores[1]['username']?></td>
                                <td><?=$community_scores[1]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><?=$community_scores[2]['username']?></td>
                                <td><?=$community_scores[2]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><?=$community_scores[3]['username']?></td>
                                <td><?=$community_scores[3]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><?=$community_scores[4]['username']?></td>
                                <td><?=$community_scores[4]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td><?=$community_scores[5]['username']?></td>
                                <td><?=$community_scores[5]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td><?=$community_scores[6]['username']?></td>
                                <td><?=$community_scores[6]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td><?=$community_scores[7]['username']?></td>
                                <td><?=$community_scores[7]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td><?=$community_scores[8]['username']?></td>
                                <td><?=$community_scores[8]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td><?=$community_scores[9]['username']?></td>
                                <td><?=$community_scores[9]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td><?=$community_scores[10]['username']?></td>
                                <td><?=$community_scores[10]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td><?=$community_scores[11]['username']?></td>
                                <td><?=$community_scores[11]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td><?=$community_scores[12]['username']?></td>
                                <td><?=$community_scores[12]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">14</th>
                                <td><?=$community_scores[13]['username']?></td>
                                <td><?=$community_scores[13]['score']?></td>
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td><?=$community_scores[14]['username']?></td>
                                <td><?=$community_scores[14]['score']?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>
    </body>
</html>