<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katan Leaderboards</title>
    <link rel="icon" type="image/x-icon" href="img/resume.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img src="img/resume.png" alt="" width="40" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/">My Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/FilipBabic/MyPortfolio" target="_blank">Website source code</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/katan.php">Katan Leaderboards</a>
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="/sendmail">Email me</a>
            </li>
          </ul>
          <form class="d-flex" role="login" action="php/login.php" method="post">
            <input class="form-control me-2" type="text" placeholder="username" aria-label="username" name="user" required>
            <input class="form-control me-2" type="password" placeholder="password" aria-label="password" name="pass" required>
            <button class="btn btn-success" type="submit">Login</button>
          </form>
        </div>
      </div>
    </nav>
    <div class="container">
    <br>
        <h2>Leaderboards</h2>
        <?php
          require('php/leaderboards.php');
        ?>
        <br>
        <div class="container">
          <h5 class="text-center">How to enter the game?</h5>
        <div class="text-center mt-3">
          <a class="btn btn-success" onclick="openFullscreen()">Play</a>
        </div>
        <div class="embed-responsive embed-responsive-16by9 text-center">
          <video loop muted playsinline controls id="myVideo" width="300" height="200">
            <source src="videos/enter-game-instructions.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
          </video>
        </div>
      </div>
        <h2>Games</h2><br>
        <?php
          require('php/games.php');
        ?>
    </div>    
    <script>
        if(localStorage.getItem('bgcolor') === null){
          localStorage.setItem('bgcolor','#ebebeb');
          localStorage.setItem('textcolor','#212529');
        }
        if(localStorage.getItem('textcolor') === null){
          localStorage.setItem('bgcolor','#ebebeb');
          localStorage.setItem('textcolor','#212529');
        }
        document.body.style.background = localStorage.getItem('bgcolor');
        document.body.style.color = localStorage.getItem('textcolor');

        let vid = document.getElementById("myVideo");

        function openFullscreen() {
          if (vid.requestFullscreen) {
            vid.requestFullscreen();
            vid.play();
          } else if (vid.mozRequestFullScreen) { /* Firefox */
            vid.mozRequestFullScreen();
            vid.play();
          } else if (vid.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
            vid.webkitRequestFullscreen();
            vid.play();
          } else if (vid.msRequestFullscreen) { /* IE/Edge */
            vid.msRequestFullscreen();
            vid.play();
          }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>