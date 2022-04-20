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

function newGame() {

    oppo_game = {ships:[], miss:[], hits:[]};
    user_game = {ships:[], miss:[], hits:[], score:0};

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
    oppo_game.ships = makeShip(1, oppo_game.ships, 0);

    // USER SHIPS
    user_game.ships = makeShip(5, user_game.ships, 100);
    user_game.ships = makeShip(4, user_game.ships, 100);
    user_game.ships = makeShip(3, user_game.ships, 100);
    user_game.ships = makeShip(2, user_game.ships, 100);
    user_game.ships = makeShip(1, user_game.ships, 100);

    for (let i = 0; i < user_game.ships.length; i++) {
        document.getElementById(user_game.ships[i].toString()).classList.add("btn-light");
    }
    
    console.log(oppo_game.ships);
}

var box_click = function() {
    attack(this.id);
}
for (let i = 0; i < 100; i++) {
    var num = i.toString();
    document.getElementById(num).onclick = box_click;
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
        if (user_game.hits.length == 15) {
            endGame();
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
        console.log(true);
        $("#"+oppo_box).removeClass("btn-light");
        $("#"+oppo_box).addClass("btn-danger");
        oppo_game.hits.push(oppo_box);
        user_game.score -= 500;
        if (oppo_game.hits.length == 15) {
            endGame();
            return;
        }
    } else {
        console.log(false);
        $("#"+oppo_box).addClass("btn-warning");
        $("#"+oppo_box).css("opacity", "0.6");
        oppo_game.miss.push(oppo_box);
        user_game.score += 20;
    }

    document.getElementById("score").innerHTML = "Score: " + user_game.score;
}

function endGame() {
    document.getElementById("record_score").value = user_game.score;
    document.getElementById("record_score").form.submit();
}

// function populateValues() {
//
// }