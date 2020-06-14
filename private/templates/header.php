<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Boyd Hoogkamer, Hugo van der Geest, Tim van Osch">
    <meta name="keywords" content="Game Games Gaming Communicatie">
    <meta name="description" content="Communicatie website om gamers (virtueel) bij elkaar te brengen">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" type="image/x-icon" href=""/>
    <title>Covid</title>
</head>
<body>

<div id='register' class="filter">
<div class='register-div'>
<img id='register-exit' src="images/cross.png" alt="Go back">
<img src="images/gamesquads_logo.png" alt="Logo">
<?php require __DIR__ . "/../views/registreer.php"; ?>
</div>
</div>

<div id='login' class="filter">
<div class='login-div'>
<img id='login-exit' src="images/cross.png" alt="Go back">
<img src="images/gamesquads_logo.png" alt="Logo">
<?php require __DIR__ . "/../views/login.php"; ?>
</div>
</div>



<nav id='nav'>
    <div>
    <input type="text" id="invoer" list="lijst" placeholder="Zoeken naar users...">
    <datalist id="lijst"></datalist>
    </div>
    <div>
    <img id='logo' src="images/gamesquads_logo.png" alt="">
    </div>
    <div class="nav-buttons">
        <button onclick="openRegister()">Aanmelden</button>
        <button onclick="openLogin()">Login</button>
    </div>
</nav>

<header id="dropdown">



<div id="games">
<div id="exit" class="exit"><p id="leagueoflegends">League of Legends</p></div>
<div class="exit"><p id="csgo">Counter strike: Global offensive</p></div>
<div class="exit"><p id="rainbow">Tom Clancy's Rainbow <br> Six Siege</p></div>
<div class="exit"><p id="apexlegends">Apex Legends</p></div>
<div class="exit"><p id="valorant">Valorant</p></div>
<div class="exit"><p id="fortnite">Fortnite</p></div>
<div class="exit"><p id="minecraft">Minecraft</p></div>
<div class="exit"><p id="gta">GTA V</p></div>
<div class="exit"><p id="animalcrossing">Animal crossing</p></div>
<div class="exit"><p id="supersmash">Super Smash Ultimate</p></div>
<div class="exit"><p id="gmod">Garry's Mod</p></div>
<div class="exit"><p id="seaofthieves">Sea of thieves</p></div>
</div>


<label>
<input type="checkbox" id="checkbox" onclick="dropdown()">
<img id="checkmark" src="images/arrowsdown.png" alt="arrows-down">
</label>
</header>
