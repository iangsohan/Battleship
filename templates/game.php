<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="author" content="Ian Sohan">
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
                    <li class="active">
                        <a href="#">Play Game</a>
                    </li>
                    <li><a href="?command=scoreboard">Scoreboard</a></li>
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
                    <p id="score">Score: 0</p>
                    <button type="button" class="btn btn-danger" title="New Game button" onclick="newGame();">New Game</button>
                </div>
            </section>
            <section>
                <div class="content col-6">
                    <h1>Opponent</h1>
                    <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups"  style="background-image: url('styles/grid.png')">
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="a0o" id="0"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a1o" id="1"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a2o" id="2"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a3o" id="3"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a4o" id="4"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a5o" id="5"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a6o" id="6"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a7o" id="7"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a8o" id="8"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a9o" id="9"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="b0o" id="10"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b1o" id="11"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b2o" id="12"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b3o" id="13"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b4o" id="14"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b5o" id="15"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b6o" id="16"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b7o" id="17"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b8o" id="18"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b9o" id="19"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="c0o" id="20"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c1o" id="21"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c2o" id="22"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c3o" id="23"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c4o" id="24"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c5o" id="25"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c6o" id="26"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c7o" id="27"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c8o" id="28"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c9o" id="29"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="d0o" id="30"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d1o" id="31"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d2o" id="32"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d3o" id="33"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d4o" id="34"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d5o" id="35"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d6o" id="36"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d7o" id="37"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d8o" id="38"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d9o" id="39"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="e0o" id="40"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e1o" id="41"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e2o" id="42"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e3o" id="43"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e4o" id="44"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e5o" id="45"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e6o" id="46"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e7o" id="47"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e8o" id="48"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e9o" id="49"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="f0o" id="50"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f1o" id="51"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f2o" id="52"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f3o" id="53"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f4o" id="54"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f5o" id="55"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f6o" id="56"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f7o" id="57"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f8o" id="58"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f9o" id="59"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="g0o" id="60"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g1o" id="61"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g2o" id="62"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g3o" id="63"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g4o" id="64"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g5o" id="65"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g6o" id="66"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g7o" id="67"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g8o" id="68"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g9o" id="69"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="h0o" id="70"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h1o" id="71"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h2o" id="72"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h3o" id="73"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h4o" id="74"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h5o" id="75"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h6o" id="76"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h7o" id="77"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h8o" id="78"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h9o" id="79"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="i0o" id="80"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i1o" id="81"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i2o" id="82"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i3o" id="83"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i4o" id="84"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i5o" id="85"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i6o" id="86"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i7o" id="87"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i8o" id="88"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i9o" id="89"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="j0o" id="90"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j1o" id="91"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j2o" id="92"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j3o" id="93"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j4o" id="94"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j5o" id="95"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j6o" id="96"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j7o" id="97"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j8o" id="98"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j9o" id="99"></button>
                        </div>
                    </div>
                </div>
                <div class="content col-6">
                    <h1><?=$user["username"]?></h1>
                    <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups"  style="background-image: url('styles/grid.png')">
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="a0u" id="100"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a1u" id="101"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a2u" id="102"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a3u" id="103"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a4u" id="104"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a5u" id="105"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a6u" id="106"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a7u" id="107"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a8u" id="108"></button>
                            <button type="button" class="btn btn-outline-secondary" title="a9u" id="109"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="b0u" id="110"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b1u" id="111"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b2u" id="112"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b3u" id="113"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b4u" id="114"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b5u" id="115"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b6u" id="116"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b7u" id="117"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b8u" id="118"></button>
                            <button type="button" class="btn btn-outline-secondary" title="b9u" id="119"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="c0u" id="120"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c1u" id="121"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c2u" id="122"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c3u" id="123"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c4u" id="124"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c5u" id="125"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c6u" id="126"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c7u" id="127"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c8u" id="128"></button>
                            <button type="button" class="btn btn-outline-secondary" title="c9u" id="129"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="d0u" id="130"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d1u" id="131"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d2u" id="132"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d3u" id="133"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d4u" id="134"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d5u" id="135"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d6u" id="136"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d7u" id="137"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d8u" id="138"></button>
                            <button type="button" class="btn btn-outline-secondary" title="d9u" id="139"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="e0u" id="140"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e1u" id="141"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e2u" id="142"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e3u" id="143"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e4u" id="144"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e5u" id="145"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e6u" id="146"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e7u" id="147"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e8u" id="148"></button>
                            <button type="button" class="btn btn-outline-secondary" title="e9u" id="149"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="f0u" id="150"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f1u" id="151"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f2u" id="152"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f3u" id="153"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f4u" id="154"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f5u" id="155"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f6u" id="156"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f7u" id="157"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f8u" id="158"></button>
                            <button type="button" class="btn btn-outline-secondary" title="f9u" id="159"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="g0u" id="160"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g1u" id="161"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g2u" id="162"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g3u" id="163"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g4u" id="164"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g5u" id="165"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g6u" id="166"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g7u" id="167"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g8u" id="168"></button>
                            <button type="button" class="btn btn-outline-secondary" title="g9u" id="169"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="h0u" id="170"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h1u" id="171"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h2u" id="172"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h3u" id="173"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h4u" id="174"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h5u" id="175"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h6u" id="176"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h7u" id="177"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h8u" id="178"></button>
                            <button type="button" class="btn btn-outline-secondary" title="h9u" id="179"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="i0u" id="180"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i1u" id="181"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i2u" id="182"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i3u" id="183"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i4u" id="184"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i5u" id="185"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i6u" id="186"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i7u" id="187"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i8u" id="188"></button>
                            <button type="button" class="btn btn-outline-secondary" title="i9u" id="189"></button>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group" style="width: 100%;">
                            <button type="button" class="btn btn-outline-secondary" style="aspect-ratio: 1 / 1;" title="j0u" id="190"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j1u" id="191"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j2u" id="192"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j3u" id="193"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j4u" id="194"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j5u" id="195"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j6u" id="196"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j7u" id="197"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j8u" id="198"></button>
                            <button type="button" class="btn btn-outline-secondary" title="j9u" id="199"></button>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <script type="text/javascript">
        
            var oppo_game = {ships:"", miss:"", hits:""};
            var user_game = {ships:"", miss:"", hits:"", score:0};

            function makeShip(size, ships, offset) {
                var ship = [];
                var invalid = true;
                while (invalid) {
                    ship = [];
                    invalid = true;
                    var num = Math.floor(Math.random(100) * 100) + offset;
                    var side = Math.floor(Math.random() * (3 - 0 + 1)) + 0;
                    var value = function (a, b) {return a - b*10}; // UP
                    var check = function (a) {return a < (0 + offset) || ships.includes(a) == true};
                    if (side == 1) {
                        value = function (a, b) {return a + b*10}; // DOWN
                        check = function (a) {return a > (99 + offset) || ships.includes(a) == true};
                    } else if (side == 2) {
                        value = function (a, b) {return a - b}; // LEFT
                        check = function (a) {return Math.floor(a / 10) != Math.floor(num / 10) || ships.includes(a) == true};
                    } else if (side == 3) {
                        value = function (a, b) {return a + b}; // RIGHT
                        check = function (a) {return Math.floor(a / 10) != Math.floor(num / 10) || ships.includes(a) == true};
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
                var oppo_ships = [];
                var user_ships = [];

                // OPPONENT SHIPS
                oppo_ships = makeShip(5, oppo_ships, 0);
                oppo_ships = makeShip(4, oppo_ships, 0);
                oppo_ships = makeShip(3, oppo_ships, 0);
                oppo_ships = makeShip(2, oppo_ships, 0);
                oppo_ships = makeShip(1, oppo_ships, 0);

                // USER SHIPS
                user_ships = makeShip(5, user_ships, 100);
                user_ships = makeShip(4, user_ships, 100);
                user_ships = makeShip(3, user_ships, 100);
                user_ships = makeShip(2, user_ships, 100);
                user_ships = makeShip(1, user_ships, 100);

                for (let i = 0; i < user_ships.length; i++) {
                    document.getElementById(user_ships[i].toString()).classList.add("btn-light");
                }
                
                console.log(oppo_ships);
                oppo_game.ships = oppo_ships.toString();
                oppo_game.miss = [].toString();
                oppo_game.hits = [].toString();

                user_game.ships = user_ships.toString();
                user_game.miss = [].toString();
                user_game.hits = [].toString();
                user_game.score = 0;
            }

            var box_click = function() {
                attack(this.id);
            }
            for (let i = 0; i < 100; i++) {
                var num = i.toString();
                document.getElementById(num).onclick = box_click;
            }

            function attack(id) {
                var box = id;
                var oppo_ships = oppo_game.ships.split(",");
                var oppo_miss = oppo_game.miss.split(",");
                var oppo_hits = oppo_game.hits.split(",");

                var user_ships = user_game.ships.split(",");
                var user_miss = user_game.miss.split(",");
                var user_hits = user_game.hits.split(",");

                if (user_hits.includes(box) || user_miss.includes(box)) {
                    alert("Already clicked this box!");
                    return;
                } else if (oppo_ships.includes(box)) {
                    document.getElementById(box).classList.add("btn-danger");
                    user_hits.push(box);
                    user_game.score += 1000;
                } else {
                    document.getElementById(box).classList.add("btn-warning");
                    document.getElementById(box).style.opacity = 0.6;
                    user_miss.push(box);
                    user_game.score -= 10;
                }

                var oppo_box = (Math.floor(Math.random(100) * 100) + 100).toString();
                while (oppo_hits.includes(oppo_box) || oppo_miss.includes(oppo_box)) {
                    oppo_box = (Math.floor(Math.random(100) * 100) + 100).toString();
                }
                if (user_ships.includes(oppo_box)) {
                    document.getElementById(oppo_box).classList.remove("btn-light");
                    document.getElementById(oppo_box).classList.add("btn-danger");
                    oppo_hits.push(oppo_box);
                    user_game.score -= 500;
                } else {
                    document.getElementById(oppo_box).classList.add("btn-warning");
                    document.getElementById(oppo_box).style.opacity = 0.6;
                    oppo_miss.push(oppo_box);
                    user_game.score += 20;
                }

                document.getElementById("score").innerHTML = "Score: " + user_game.score;

                oppo_game.miss = oppo_miss.toString();
                oppo_game.hits = oppo_hits.toString();
                user_game.miss = user_miss.toString();
                user_game.hits = user_hits.toString();
            }
            
            // function populateValues() {
            //     if localStorage not empty
            //         update oppo and user games
            // }

        </script>
    </body>
</html>