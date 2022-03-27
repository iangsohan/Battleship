<?php
class BattleshipController {

    private $command;

    public function __construct($command) {
        $this->command = $command;
    }

    public function run() {
        switch($this->command) {
            case "playagain":
                $this->playAgain();
            case "game":
                $this->game();
                break;
            case "logout":
                $this->destroySession();
            default:
                $this->login();
                break;
        }
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
        if (isset($_POST["username"]) && !empty($_POST["password"])) {
            if ($this->validatePassword($_POST["password"])) {
                $_SESSION["username"] = $_POST["username"];
                $_SESSION["password"] = $_POST["password"];
                header("Location: ?command=game");
                return;
            }
            $error_message = "INVALID USERNAME AND PASSWORD";
        }

        include "templates/login.php";
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