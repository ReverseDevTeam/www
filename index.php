<!doctype html>
<html lang="en">

<head>
    <title>Reverse</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="http://reverse.treelar.com/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="http://reverse.treelar.com/favicon.ico" type="image/icon"> 
</head>

<body class="bg-light" data-spy="scroll" data-target=".navbar">
    <video loop id="video-background" style="display: none;" plays-inline>
        <source src="video/haitai.mp4" type="video/mp4">
    </video>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="http://files.treelar.com/reverse">
            <img src="static/logos/alejandro.png" width="30" height="30" class="d-inline-block align-top" alt=""> Reverse
        </a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#screenshots">Home
                        
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cards">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#storyBackground">Background
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#downloads">Downloads</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <div id="screenshots" class="carousel slide" data-ride="carousel">
        <div id="centerOfCar" style="z-index:5;">
            <div class="join-text text-primary">Reverse</div>
            <div class="buttonContainer">
                <a name="download" id="downloadBtn" class="btn btn-raise btn-lg btn-primary" href="#downloads" role="button">
                    <i class="fas fa-download"></i> Download</a>
                <a name="about" id="infoBtn" class="btn btn-raise btn-lg btn-success" href="#cards" role="button"><i class="fas fa-info-circle"></i> About</a>
                <a href="#" class="btn btn-raise btn-lg btn-danger" data-toggle="modal" data-target="#videoModal" data-theVideo=
                <?php 
                    if(date("d/m", time()) == "04/06" || date("d/m", time()) == "06/06")
                        echo("https://www.youtube.com/embed/GGAQfmSk3ms");
                    else
                        echo("https://www.youtube.com/embed/Ny_XXyMfWEY")
                ?>><i class="fas fa-video"></i> Trailer</a>
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#screenshots" data-slide-to="0" class="active"></li>
            <li data-target="#screenshots" data-slide-to="1"></li>
            <li data-target="#screenshots" data-slide-to="2"></li>
            <li data-target="#screenshots" data-slide-to="3"></li>
            <li data-target="#screenshots" data-slide-to="4"></li>
            <li data-target="#screenshots" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="" src="static/screenshots/2.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="" src="static/screenshots/5.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="" src="static/screenshots/1.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="" src="static/screenshots/3.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="" src="static/screenshots/4.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="" src="static/screenshots/6.png" alt="Third slide">
            </div>
        </div>
    </div>
    <div class="container-fluid" id="cards">
        <div class="card-deck" style="padding: 5vh 10vw;">
            <div class="card" style="max-width: 50vh;">
                <img class="card-img-top" src="static/cards/exceptional.PNG" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Fully Coded in C#</h4>
                    <p class="card-text">This project was created using the Unity engine and was coded by people who have had a combined 5 years
                        of experience with Object Oriented Programming Languages</p>
                </div>
            </div>
            <div class="card" style="max-width: 50vh;">
                <img class="card-img-top" src="static/cards/egg.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Easter Eggs</h4>
                    <p class="card-text">There are currently 5 easter eggs in the game (including one multiplayer mode) and 1 in this site. Try to find them all!</p>
                </div>
            </div>
            <div class="card" style="max-width: 50vh;">
                <img class="card-img-top card-osi" src="static/cards/osi_symbol.png" style="" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Completely Open Source</h4>
                    <p class="card-text">Everything from the code to the texutures are all on Github where you can download them.</p>
                    <a href="https://github.com/ReverseDevTeam/ReverseGame" target="_blank" class="btn btn-raise btn-success">Go to GitHub Project</a>
                </div>
            </div>
            <div class="card" style="max-width: 50vh;">
                <img class="card-img-top" src="static/cards/nitefort.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Objectively Better than Fortnite</h4>
                    <p class="card-text">We have crafted a game that is more addicting, more creative (its not like we copied another game), and
                        more fun.</p>
                </div>
            </div>
            <div class="card" style="max-width: 50vh;">
                <img class="card-img-top" src="static/cards/discord.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Discord Rich Presence</h4>
                    <p class="card-text">See how long your friends have been playing that one level or see if they have found the easter eggs
                        with native Discord Rich Presence support.</p>
                        <a href="https://discordapp.com/rich-presence" target="_blank" class="btn btn-raise btn-blurple">More about rich presence</a>
                </div>
            </div>
            <div class="card" style="max-width: 50vh;">
                <img class="card-img-top linusloss" src="static/cards/linusloss.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Doesn't Run On Mac</h4>
                    <p class="card-text">If you thought we would support a platform backed by a company that makes objectively the worst phones
                        on planet earth then you would be wrong. If you think a notch is hip, then you can have one on this
                        page. Just click this button for all of you apple sheep out there.</p>
                    <button onclick="spawnNotch();" style="position: relative;" class="btn btn-raise btn-primary">Activate Notch</button>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark" id="storyBackground">
        <div class="jumbotron bg-dark text-white">
            <div class="container">
                <h1 class="display-3">Reverse</h1>
                <p class="lead">A Short Explanation</p>
                <hr class="my-2">
                <p> Alejandro is the main "hero" of the story of who reverses his world out of a stupid and selfish mistake he has made. Princess Blueberry, the ruler of the Berry Kingdom is the usual damsel in distress who usually pays her heroes in cake...

The main antagonist in this crazy world is the evil wizard Kemka whos wand is responsible for causing the world in reverse.

There are 5 levels on normal mode and 6 levels on hard mode, where you start at the end of level 1 and go to level 5 in normal mode with normal keys or go from level 1 to level 6 traveling backward on hard mode. You have to put all the coins and blocks the Alejandro broke and return the power-ups to their original spot.

Enemies are your friends and friends are your enemies which is true for both normal and hard mode. </p>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="downloads">
        <p>Interested? Well, Download Now!</p>
        <a id="dl-linux" href="dl/Linux/v1.0.1r/v1.0.1r_L.zip" class="btn btn-lg btn-warning btn-ripple">
            <i class="fab fa-linux"></i> Linux</a>
        <a href="dl/Windows/v1.0.1r/v1.0.1r.zip" class="btn btn-lg btn-primary btn-ripple">
            <i class="fab fa-windows"></i> Windows</a>
        <a href="dl/MacOS/index.php" class="btn btn-lg btn-success btn-primary btn-ripple">
            <i class="fab fa-apple"></i> macOS</a>
    </div>

    <button onclick="topFunction()" id="topBtn" class="z-index-5 btn btn-info" title="Go to top"><i class="fas fa-arrow-up"></i></button>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <script src="konami.js"></script>
</body>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body bg-dark">
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div>
                    <iframe width="100%" height="500px" src="" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

</html>
