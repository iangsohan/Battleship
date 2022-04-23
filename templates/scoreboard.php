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
                    <p id="current-score">Current Score: 0</p>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal" title="Change Username button">
                        Change Username
                    </button>
                    <br>
                    <p><?=$change_error_message?></p>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="change-username modal-header">
                                    <h3 class="modal-title" id="exampleModalLabel">Change Username</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="?command=changeUsername" method="post">
                                    <div class="change-username modal-body">
                                            <p>New Username: <input type="text" class="form-control" id="change_username" name="change_username" onkeyup="validateForm()" required></p>
                                            <p>Password: <input type="password" class="form-control" id="change_password" name="change_password" required></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger" id="submit-change">Save Changes</button>
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
                            <?php for ($i = 0; $i < 15; $i++) { ?>
                            <tr>
                                <th scope="row"><?=$i + 1?></th>
                                <td><?=$personal_scores[$i]['username']?></td>
                                <td><?=$personal_scores[$i]['score']?></td>
                            </tr>
                            <?php } ?>
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
                            <?php for ($i = 0; $i < 15; $i++) { ?>
                            <tr>
                                <th scope="row"><?=$i + 1?></th>
                                <td><?=$community_scores[$i]['username']?></td>
                                <td><?=$community_scores[$i]['score']?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </section>
        <script type="text/javascript">
            // var question = null;
            // var score = 0;

            // function getQuestion() {
            //     // instantiate the object
            //     var ajax = new XMLHttpRequest();
            //     // open the request
            //     ajax.open("GET", "?command=scoreboard", true);
            //     // ask for a specific response
            //     ajax.responseType = "json";
            //     // send the request
            //     ajax.send(null);
            
            //     // What happens if the load succeeds
            //     ajax.addEventListener("load", function() {
            //         // set question
            //         if (this.status == 200) { // worked 
            //             question = this.response;
            //             // displayQuestion();
            //             console.log(question);
            //         }
            //     });
            
            //     // What happens on error
            //     // ajax.addEventListener("error", function() {
            //     //     document.getElementById("message").innerHTML = 
            //     //         "<div class='alert alert-danger'>An Error Occurred</div>";
            //     // });
            // }
        </script>
    </body>
</html>