<?php
class BattleshipController {

    private $command;

    private $db;

    public function __construct($command) {
        $this->command = $command;
        $this->db = new Database();
    }

    public function run() {
        switch($this->command) {
            case "game":
                $this->game();
                break;
            case "changeUsername":
                $this->changeUsername();
            case "scoreboard":
                $this->scoreboard();
                break;
            case "instructions":
                $this->instructions();
                break;
            case "logout":
                $this->logout();
            default:
                $this->login();
                break;
        }
    }

    // HANDLES CHANGE USERNAME LOGIC
    public function changeUsername() {
        $_SESSION["change_error_message"] = "";
        if (isset($_POST["change_username"]) && !empty($_POST["change_password"])) {
            $new_user = $this->db->query("select * from user where username = ?;", "s", $_POST["change_username"]);
            if (!empty($new_user)) {
                $_SESSION["change_error_message"] = "USERNAME TAKEN";
                return;
            } else if (!$this->validateUsername($_POST["change_username"])) {
                $_SESSION["change_error_message"] = "USERNAME DOES NOT MEET REQUIREMENTS";
                return;
            }

            $data = $this->db->query("select * from user where username = ?;", "s", $_SESSION["username"]);
            if (!empty($data)) {
                if (password_verify($_POST["change_password"], $data[0]["password"])) {
                    $this->db->query("update user set username = ? where username = ?;", "ss", $_POST["change_username"], $_SESSION["username"]);
                    $this->db->query("update scores set username = ? where username = ?;", "ss", $_POST["change_username"], $_SESSION["username"]);
                    $_SESSION["username"] = $_POST["change_username"];
                } else {
                    $_SESSION["change_error_message"] = "INCORRECT PASSWORD";
                }
            }
        }
    }

    // HANDLES SCOREBOARD LOGIC AND LOADS SCOREBOARD PAGE
    public function scoreboard() {
        $change_error_message = "";
        if (isset($_SESSION["change_error_message"])) {
            $change_error_message = $_SESSION["change_error_message"];
        }

        $personal_scores = $this->db->query("select * from scores where username=? order by score DESC, gameDate ASC limit 15;", "s", $_SESSION["username"]);
        $personal_scores_json = json_encode($personal_scores);
        while (sizeof($personal_scores) < 15) {
            $empty_slot = array('username'=>'', 'score'=>'', 'gameDate'=>'');
            array_push($personal_scores, $empty_slot);
        }

        $community_scores = $this->db->query("select * from scores order by score DESC, gameDate ASC;");
        while (sizeof($community_scores) < 15) {
            $empty_slot = array('username'=>'', 'score'=>'', 'gameDate'=>'');
            array_push($community_scores, $empty_slot);
        }

        include("templates/scoreboard.php");
    }

    // LOADS INSTRUCTIONS PAGE
    public function instructions() {
        include("templates/instructions.php");
    }

    // DESTROYS SESSION
    private function logout() {          
        session_destroy();
    }

    
    // Username:
    //     between 3 and 30 characters
    //     cannot start with a number
    //     no special characters

    // ENFORCES USERNAME REQUIREMENTS
    private function validateUsername($username) {
        $pattern = "/^[a-zA-Z][a-zA-Z0-9]{3,30}$/i";
        if (preg_match($pattern, $username)) {
            return true;
        }
        return false;
    }


    // Password:
    //     between 8 and 100 characters
    //     must have at least 1 number
    //     must have at least 1 symbol
    //     must have at least one lowercase
    //     must have at least one uppercase

    // ENFORCES PASSWORD REQUIREMENTS
    private function validatePassword($password) {
        // https://www.zorched.net/2009/05/08/password-strength-validation-with-regular-expressions/
        $pattern = "/^\S*(?=\S{8,100})(?=\S*[\d])(?=\S*[\W])(?=\S*[a-z])(?=\S*[A-Z])\S*$/i";
        if (preg_match($pattern, $password)) {
            return true;
        }
        return false;
    }

    // HANDLES LOGIN/CREATE ACCOUNT LOGIC AND LOADS LOGIN PAGE
    public function login() {
        $error_message = "";
        $error_message_confirm = "";
        if (isset($_POST["username"]) && !empty($_POST["password"])) {
            $data = $this->db->query("select * from user where username = ?;", "s", $_POST["username"]);
            if (empty($data)) {
                $error_message = "USERNAME DOES NOT EXIST";
            } else if (!empty($data)) {
                if (password_verify($_POST["password"], $data[0]["password"])) {
                    $_SESSION["username"] = $_POST["username"];
                    $_SESSION["password"] = $_POST["password"];
                    $_SESSION["score"] = 0;
                    header("Location: ?command=game");
                    return;
                } else {
                    $error_message = "INCORRECT PASSWORD";
                }
            }
        } else if (isset($_POST["new_username"]) && !empty($_POST["new_password"])) {
            $data = $this->db->query("select * from user where username = ?;", "s", $_POST["new_username"]);
            if (!empty($data)) {
                $error_message_confirm = "ACCOUNT WITH THIS USERNAME ALREADY EXISTS";
            } else if (!$this->validateUsername($_POST["new_username"])) {
                $error_message_confirm = "USERNAME DOES NOT MEET REQUIREMENTS";
            } else if (!$this->validatePassword($_POST["new_password"])) {
                $error_message_confirm = "PASSWORD DOES NOT MEET REQUIREMENTS";
            } else if ($_POST["new_password"] !== $_POST["new_password_confirm"]) {
                $error_message_confirm = "PASSWORDS DO NOT MATCH";
            } else {
                $insert = $this->db->query("insert into user(username, password) values (?, ?);", 
                        "ss", $_POST["new_username"], 
                        password_hash($_POST["new_password"], PASSWORD_DEFAULT));
                if ($insert === false) {
                    $error_message_confirm = "Error inserting user";
                } else {
                    $_SESSION["username"] = $_POST["new_username"];
                    $_SESSION["password"] = $_POST["new_password"];
                    $_SESSION["score"] = 0;
                    header("Location: ?command=game");
                    return;
                }
            }
        }
        include("templates/login.php");
    }

    // RUNS GAME LOGIC
    public function game() {
        $user = [
            "username" => $_SESSION["username"],
        ];

        include("templates/game.php");
    }
}