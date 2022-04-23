<?php

// START SESSION
session_start();

// REGISTER THE AUTOLOADER
spl_autoload_register(function($classname) {
    include "classes/$classname.php";
});

// PARSE QUERY STRING FOR COMMAND
$command = "login";
if (isset($_GET["command"]))
    $command = $_GET["command"];

// ENSURE EMAIL IS SET
if (!isset($_SESSION["username"]) || !isset($_SESSION["password"])) {
    $command = "login";
}

// INSTANTIATE CONTROLLER AND RUN
$battleship = new BattleshipController($command);
$battleship->run();