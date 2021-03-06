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
    <body>
        <header class="col-12">
            <nav>
                <ul>
                    <li><a href="?command=game">Play Game</a></li>
                    <li><a href="?command=scoreboard">Scoreboard</a></li>
                    <li><a href="?command=instructions">Instructions</a></li>
                    <li class="active"><a href="#">Log In</a></li>
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
        <section>
            <div class="content col-6">
                <div class="login">
                    <h1>Returning User</h1>
                    <form action="?command=login" method="post">
                        <p>Username: <input type="text" class="form-control" id="username" name="username" required></p>
                        <p>Password: <input type="password" class="form-control" id="password" name="password" required></p>
                        <div class="text-center">                
                            <button type="submit" class="btn btn-info mb-3" id="submit-login">Login</button>
                        </div>
                    </form>
                    <?=$login_error_message?>
                </div>
            </div>
            <div class="content col-6">
                <div class="login">
                    <h1>New User</h1>
                    <form action="?command=login" method="post">
                        <p>Username: <input type="text" class="form-control" id="new_username" name="new_username" onkeyup="validateForm();" required></p>
                        <p>Password: 
                            <button type="button" class="btn btn-danger h6" style="font-size: 8px" data-bs-toggle="modal" data-bs-target="#myModal" title="Change Username button">
                                REQUIREMENTS
                            </button>
                            <input type="password" class="form-control" id="new_password" name="new_password" onkeyup="validateForm();" required>
                        </p>
                        <p>Confirm: <input type="password" class="form-control" id="new_password_confirm" name="new_password_confirm" onkeyup="validateConfirm();" required></p>
                        <div class="text-center">                
                            <button type="submit" class="btn btn-info mb-3" id="submit-create" disabled>Create Account</button>
                        </div>
                    </form>
                    <?=$confirm_error_message?>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="change-username modal-header">
                        <h3 class="modal-title" id="myModalLabel">Password Requirements</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="change-username modal-body" style="text-align: left">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">BETWEEN 8 AND 100 CHARACTER</li>
                            <li class="list-group-item">AT LEAST 1 LOWERCASE LETTER</li>
                            <li class="list-group-item">AT LEAST 1 UPPERCASE LETTER</li>
                            <li class="list-group-item">AT LEAST 1 NUMBER</li>
                            <li class="list-group-item">AT LEAST 1 SPECIAL CHARACTER</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>