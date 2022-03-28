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
            case "playagain":
                $this->playAgain();
            case "game":
                $this->game();
                break;
            case "scoreboard":
                $this->scoreboard();
                break;
            case "instructions":
                $this->instructions();
                break;
            case "logout":
                $this->destroySession();
            default:
                $this->login();
                break;
        }
    }

    public function scoreboard() {
        include("templates/scoreboard.php");
    }

    public function instructions() {
        include("templates/instructions.php");
    }

    // DESTROYS SESSION
    private function destroySession() {          
        session_destroy();
    }

    // RESETS SESSION WORD AND GUESS LIST
    private function playAgain() {
        unset($_SESSION["word"]);
        unset($_SESSION["guess_list"]);
    }

    private function validatePassword($password) {
        // https://stackoverflow.com/questions/8141125/regex-for-password-php
        $pattern = "/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/i";
        if (preg_match($pattern, $password)) {
            return true;
        }
        return false;
    }

    // HANDLES LOGIN LOGIC AND LOADS LOGIN PAGE
    public function login() {
        $error_message = "";
        $error_message_confirm = "";
        if (isset($_POST["username"]) && !empty($_POST["password"])) {
            $data = $this->db->query("select * from user where username = ?;", "s", $_POST["username"]);
            if (empty($data)) {
                $error_message = "Error checking for user";
            } else if (!empty($data)) {
                if (password_verify($_POST["password"], $data[0]["password"])) {
                    $_SESSION["username"] = $_POST["username"];
                    $_SESSION["password"] = $_POST["password"];
                    $_SESSION["score"] = 0;
                    header("Location: ?command=game");
                    return;
                } else {
                    $error_message = "Wrong password";
                }
            }
        } else if (isset($_POST["new_username"]) && !empty($_POST["new_password"])) {
            $data = $this->db->query("select * from user where username = ?;", "s", $_POST["new_username"]);
            if (!empty($data)) {
                $error_message_confirm = "ACCOUNT WITH THIS USERNAME ALREADY EXISTS";
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

    //create account
    public function createAccount() {
        $error_messag = "hey";
        if (isset($_POST["new_username"]) && !empty($_POST["new_password"])) {
            $data = $this->db->query("select * from user where username = ?;", "s", $_POST["username"]);
            if (!empty($data)) {
                $error_messag = "ACCOUNT WITH THIS USERNAME ALREADY EXISTS";
            } else if (!$this->validatePassword($_POST["new_password"])) {
                $error_messag = "PASSWORD DOES NOT MEET REQUIREMENTS";
            } else { // empty, no user found
                // TODO: input validation
                // Note: never store clear-text passwords in the database
                //       PHP provides password_hash() and password_verify()
                //       to provide password verification
                $insert = $this->db->query("insert into user (username, password) values (?, ?);", 
                        "ss", $_POST["new_username"], $_POST["new_password"], 
                        password_hash($_POST["new_password"], PASSWORD_DEFAULT));
                if ($insert === false) {
                    $error_messag = "Error inserting user";
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
            // "email" => $_SESSION["email"],
            // "guess_count" => $_SESSION["guess_count"]
        ];
        // $message = "<div><b>Guess results will appear here.</b></div>";

        // // LOADS WORD IF NO WORD IS SET
        // if (!isset($_SESSION["word"])) {
        //     $word = $this->loadWord();
        //     $_SESSION["word"] = $word;
        //     $_SESSION["guess_count"] = 1;
        //     $_SESSION["result"] = "FAILURE";
        // } else {
        //     $word = $_SESSION["word"];
        // }

        // // RUNS GUESS LOGIC
        // if (isset($_POST["guess"])) {
        //     $guess = strtolower($_POST["guess"]);
            
        //     if (!strcmp($_SESSION["word"], $guess)) { // CORRECT GUESS
        //         $_SESSION["result"] = "SUCCESS";
        //         $this->gameOver();
        //         return;
        //     } else { // INCORRECT GUESS
        //         // UPDATES GUESS COUNT
        //         $_SESSION["guess_count"]++;
        //         $user["guess_count"] = $_SESSION["guess_count"];

        //         // CHECKS WORD SIMILARITIES
        //         $letter_list = array();
        //         $correct_let = 0;
        //         $correct_loc = 0;
        //         for ($i = 0; $i < strlen($_SESSION["word"]); $i++) {
        //             if (strlen($guess) > $i) {
        //                 if ($_SESSION["word"][$i] == $guess[$i]) {
        //                     $correct_loc++;
        //                 }
        //             }
        //             for ($j = 0; $j < strlen($guess); $j++) {
        //                 if ($guess[$j] == $_SESSION["word"][$i] && !in_array($guess[$j], $letter_list)) {
        //                     array_push($letter_list, $guess[$j]);
        //                     $correct_let++;
        //                 }
        //             }
        //         }

        //         // CHECKS WORD LENGTH COMPARISON
        //         if (strlen($_SESSION["word"]) < strlen($guess)) {
        //             $length_string = "the word is too long.";
        //         } else if (strlen($_SESSION["word"]) > strlen($guess)) {
        //             $length_string = "the word is too short.";
        //         } else {
        //             $length_string = "the word is the correct length.";
        //         }
        //         $guess_result = $guess . ": " . (string)$correct_let . " characters in the word, " . (string)$correct_loc . " in the correct place, " . $length_string;

        //         // UPDATES GUESS LIST
        //         if (!isset($_SESSION["guess_list"])) {
        //             $guess_list = array();
        //         } else {
        //             $guess_list = json_decode($_SESSION["guess_list"]);
        //         }
        //         array_push($guess_list, $guess_result);
        //         $_SESSION["guess_list"] = json_encode($guess_list);
        //         $guess_list = implode("<br>", $guess_list);
        //         $message = "<div><b>$guess_list</b></div>";
        //     }
        // }

        include("templates/game.php");
    }
}