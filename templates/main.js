// game.php
var gameStarted = false;
var oppo_game = {ships:[], miss:[], hits:[]};
var user_game = {ships:[], miss:[], hits:[], score:0};

function makeShip(size, ships, offset) {
    var ship = [];
    var invalid = true;
    while (invalid) {
        ship = [];
        invalid = true;
        var num = Math.floor(Math.random(100) * 100) + offset;
        var side = Math.floor(Math.random() * (3 - 0 + 1)) + 0;
        var value = (a, b) => a - b*10; // UP
        var check = (a) => a < (0 + offset) || ships.includes(a) == true;
        if (side == 1) {
            value = (a, b) => a + b*10; // DOWN
            check = (a) => a > (99 + offset) || ships.includes(a) == true;
        } else if (side == 2) {
            value = (a, b) => a - b; // LEFT
            check = (a) => Math.floor(a / 10) != Math.floor(num / 10) || ships.includes(a) == true;
        } else if (side == 3) {
            value = (a, b) => a + b; // RIGHT
            check = (a) => Math.floor(a / 10) != Math.floor(num / 10) || ships.includes(a) == true;
        }
        for (let i = 0; i < size; i++) {
            var val = value(num, i);
            if (check(val)) {
                i = size;
                invalid = true;
            } else {
                ship.push(val);
                invalid = false;
            }
        }
    }
    for (let i = 0; i < ship.length; i++) {
        ships.push(ship[i]);
    }
    return ships;
}

function populateBoard() {
    if (localStorage.getItem("gameStarted") != "true") {
        return;
    }
    gameGrid();
    gameStarted = true;
    oppo_game = JSON.parse(localStorage.getItem("oppo_game"));
    user_game = JSON.parse(localStorage.getItem("user_game"));
    document.getElementById("score").innerHTML = "Score: " + user_game.score;
    for (let i = 0; i < user_game.ships.length; i++) {
        document.getElementById(user_game.ships[i].toString()).classList.add("btn-light");
    }
    for (let i = 0; i < user_game.hits.length; i++) {
        document.getElementById(user_game.hits[i].toString()).classList.add("btn-danger");
    }
    for (let i = 0; i < user_game.miss.length; i++) {
        document.getElementById(user_game.miss[i].toString()).classList.add("btn-warning");
        $("#"+user_game.miss[i].toString()).css("opacity", "0.6");
    }
    for (let i = 0; i < oppo_game.hits.length; i++) {
        document.getElementById(oppo_game.hits[i].toString()).classList.remove("btn-light");
        document.getElementById(oppo_game.hits[i].toString()).classList.add("btn-danger");
    }
    for (let i = 0; i < oppo_game.miss.length; i++) {
        document.getElementById(oppo_game.miss[i].toString()).classList.add("btn-warning");
        $("#"+oppo_game.miss[i].toString()).css("opacity", "0.6");
    }
}

function gameGrid() {
    var box_click = function() {
        if (gameStarted) {
            attack(this.id);
        }
    }
    for (let i = 0; i < 100; i++) {
        var num = i.toString();
        document.getElementById(num).onclick = box_click;
    }
}

function newGame() {
    oppo_game = {ships:[], miss:[], hits:[]};
    user_game = {ships:[], miss:[], hits:[], score:0};

    gameGrid();

    document.getElementById("score").innerHTML = "Score: 0";

    for (let i = 0; i < 200; i++) {
        document.getElementById(i.toString()).classList.remove("btn-light");
        document.getElementById(i.toString()).classList.remove("btn-warning");
        document.getElementById(i.toString()).classList.remove("btn-danger");
        $("#"+i.toString()).css("opacity", "1");
    }

    // OPPONENT SHIPS
    oppo_game.ships = makeShip(5, oppo_game.ships, 0);
    oppo_game.ships = makeShip(4, oppo_game.ships, 0);
    oppo_game.ships = makeShip(3, oppo_game.ships, 0);
    oppo_game.ships = makeShip(2, oppo_game.ships, 0);
    oppo_game.ships = makeShip(2, oppo_game.ships, 0);

    // USER SHIPS
    user_game.ships = makeShip(5, user_game.ships, 100);
    user_game.ships = makeShip(4, user_game.ships, 100);
    user_game.ships = makeShip(3, user_game.ships, 100);
    user_game.ships = makeShip(2, user_game.ships, 100);
    user_game.ships = makeShip(2, user_game.ships, 100);

    for (let i = 0; i < user_game.ships.length; i++) {
        document.getElementById(user_game.ships[i].toString()).classList.add("btn-light");
    }
    
    console.log(oppo_game.ships);

    gameStarted = true;
    localStorage.setItem("gameStarted", true);
    localStorage.setItem("oppo_game", JSON.stringify(oppo_game));
    localStorage.setItem("user_game", JSON.stringify(user_game));
}

function attack(id) {
    var box = parseInt(id);
    if (user_game.hits.includes(box) || user_game.miss.includes(box)) {
        alert("Already clicked this box!");
        return;
    } else if (oppo_game.ships.includes(box)) {
        $("#"+box).addClass("btn-danger");
        user_game.hits.push(box);
        user_game.score += 1000;
        if (user_game.hits.length == 16) {
            document.getElementById("score").innerHTML = "Score: " + user_game.score;
            endGame(true);
            return;
        }
    } else {
        $("#"+box).addClass("btn-warning");
        $("#"+box).css("opacity", "0.6");
        user_game.miss.push(box);
        user_game.score -= 10;
    }

    var oppo_box = Math.floor(Math.random(100) * 100) + 100;
    while (oppo_game.hits.includes(oppo_box) || oppo_game.miss.includes(oppo_box)) {
        oppo_box = Math.floor(Math.random(100) * 100) + 100;
    }
    if (user_game.ships.includes(oppo_box)) {
        $("#"+oppo_box).removeClass("btn-light");
        $("#"+oppo_box).addClass("btn-danger");
        oppo_game.hits.push(oppo_box);
        user_game.score -= 500;
        if (oppo_game.hits.length == 16) {
            document.getElementById("score").innerHTML = "Score: " + user_game.score;
            endGame(false);
            return;
        }
    } else {
        $("#"+oppo_box).addClass("btn-warning");
        $("#"+oppo_box).css("opacity", "0.6");
        oppo_game.miss.push(oppo_box);
        user_game.score += 20;
    }

    document.getElementById("score").innerHTML = "Score: " + user_game.score;
    localStorage.setItem("oppo_game", JSON.stringify(oppo_game));
    localStorage.setItem("user_game", JSON.stringify(user_game));
}

function endGame(winner) {
    gameStarted = false;
    localStorage.setItem("gameStarted", false);
    localStorage.setItem("oppo_game", JSON.stringify(oppo_game));
    localStorage.setItem("user_game", JSON.stringify(user_game));
    document.getElementById("show_score").value = user_game.score;
    if (winner) {
        document.getElementById("myModalLabel").innerHTML = "YOU WIN!";
    }
    $('#myModal').modal("show");
}

function submitScore() {
    document.getElementById("record_score").value = user_game.score;
    document.getElementById("score-form").submit();
}


// login.php and changeUsername()
function validateForm() {
    var pattern = "";
    const id = event.target.id;
    if (id.localeCompare("new_username") == 0 || id.localeCompare("change_username") == 0) {
        pattern = /^[a-zA-Z][a-zA-Z0-9]{3,30}$/;
    } else if (id.localeCompare("new_password") == 0) {
        pattern = /^\S*(?=\S{8,100})(?=\S*[\d])(?=\S*[\W])(?=\S*[a-z])(?=\S*[A-Z])\S*$/;
    }
    if (pattern.test(document.getElementById(id).value) == false) {
        $("#"+id).css("background-color", "#ff9999");
    } else {
        $("#"+id).css("background-color", "#b3ffb3");
    }
}

function validateConfirm() {
    const id = event.target.id;
    if (document.getElementById(event.target.id).value.localeCompare(document.getElementById("new_password").value) != 0) {
        $("#"+id).css("background-color", "#ff9999");
    } else {
        $("#"+id).css("background-color", "#b3ffb3");
        document.getElementById("submit-create").disabled = false;
    }
}

function currentScore() {
    if (localStorage.getItem("gameStarted") != "true") {
        return;
    }
    user_game = JSON.parse(localStorage.getItem("user_game"));
    document.getElementById("current-score").innerHTML = "Current Score: " + user_game.score;
}