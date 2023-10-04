<?php 
    include_once ('php/count-visitors.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filip Babić</title>
    <link rel="icon" type="image/x-icon" href="img/resume.png">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="javaScript/live_time.js"></script>
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
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                My Portfolio
              </a>
            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#work">Working experience</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#programming">Programming skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#projects">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#personal">Personal skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#courses">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#languages">Languages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#other">Other</a>
              </li>
            </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/FilipBabic/Portfolio" target="_blank">Website source code</a>
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
    <div class="card mx-auto text-center text-white bg-success mb-3 mt-3" style="max-width: 10rem;">
        <div class="card-header">Number of unique visitors</div>
            <div class="card-body">
                <h1 class="card-title"><?php echo $total_visitors; ?></h5>
            </div>
    </div>
    <div class="container">
      <div class="row justify-content-center mb-2">
        <button style="background-color:#35363a;color:#ebebeb;height:80px;width:80px;margin-right:5px;" class="rounded-circle border border-dark" onClick="changeBgColor('#35363a','#ebebeb')">Dark Mode</button>
        <button style="background-color:#d9dadf;color:#6d757d;height:80px;width:80px;margin-right:5px;" class="rounded-circle border border-dark" onClick="changeBgColor('#d9dadf','#6d757d')">Light Mode</button>
        <button style="background-color:#035b63;color:#ebebeb;height:80px;width:80px;margin-right:5px;" class="rounded-circle border border-dark" onClick="changeBgColor('#035b63','#ebebeb')">Green Mode</button>
        <button style="background-color:#ebebeb;color:#212529;height:80px;width:80px;" class="rounded-circle border border-dark" onClick="changeBgColor('#ebebeb','#212529')">Default</button>
      </div>
    </div>
    <div class="container">
      <div class="row mt-3">
        <div class="col-sm-3">
            <img src="img/profile_img.jpg" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-sm-9">
          <h1>Filip Babić</h1>
            <h3 class="text-success mb-5">Software Developer</h3>
              <div class="row">
                <div class="col-sm-7">
                  <h5><u>Education</u></h5>
                  <p class="text-start mt-4"><b>Bachelor Degree</b>- University Singidunum</p>
                    <p class="text-start"><b>Faculty of informatics and computing</b>, Belgrade - programming and design.</p>
                    <p class="text-start">September 2007 - April 2012</p><br>
                    <img src="https://singidunum.ac.rs/assets/main/img/fakulteti/sr/us.png"/>
                    <p class="text-start mb-4"><a class="link-opacity-90" href="https://fir.singidunum.ac.rs" target="_blank" >Faculty of informatics and computing</a></p>
                </div>
                <div class="col-sm-5">
                  <h5><u>Personal information</u></h5>
                    <p class="text-start mt-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-buildings" viewBox="0 0 16 16">
                        <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022ZM6 8.694 1 10.36V15h5V8.694ZM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15Z"/>
                        <path d="M2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-2 2h1v1H2v-1Zm2 0h1v1H4v-1Zm4-4h1v1H8V9Zm2 0h1v1h-1V9Zm-2 2h1v1H8v-1Zm2 0h1v1h-1v-1Zm2-2h1v1h-1V9Zm0 2h1v1h-1v-1ZM8 7h1v1H8V7Zm2 0h1v1h-1V7Zm2 0h1v1h-1V7ZM8 5h1v1H8V5Zm2 0h1v1h-1V5Zm2 0h1v1h-1V5Zm0-2h1v1h-1V3Z"/>
                      </svg><b> Serbia, Belgrade</b></p>
                    <p class="text-start mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-mailbox2-flag" viewBox="0 0 16 16">
                        <path d="M10.5 8.5V3.707l.854-.853A.5.5 0 0 0 11.5 2.5v-2A.5.5 0 0 0 11 0H9.5a.5.5 0 0 0-.5.5v8h1.5Z"/>
                        <path d="M4 3h4v1H6.646A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3V3a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4Zm.585 4.157C4.836 7.264 5 7.334 5 7a1 1 0 0 0-2 0c0 .334.164.264.415.157C3.58 7.087 3.782 7 4 7c.218 0 .42.086.585.157Z"/>
                      </svg>
                      <b>filip1986babic@gmail.com</b></p>
                    <p class="text-start mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                      </svg>
                    <a class="link-opacity-90" href="http://www.linkedin.com/in/filipbabic" target="_blank" >linkedin.com/in/filipbabic</a></p>
                    <p class="text-start mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                      <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg>
                    <a class="link-opacity-90" href="https://github.com/FilipBabic?tab=repositories" target="_blank" >github.com/FilipBabic</a></p>
                    <p class="mb-1"><a class="btn btn-primary" href="img/Filip Babić cv Oct 2023.pdf" target="_blank">Download CV</a></p>
                    <p class="mb-1"><a class="btn btn-primary" href="https://github.com/FilipBabic/Portfolio" target="_blank">View Source</a></p>
                  </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div id="work" class="col-sm-8">
                <h4 class="text-success text-center mb-3"><u>WORKING EXPERIENCE</u></h4>
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <p>Weblab d.o.o, Software developing company — software developer.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        <cite title="Source Title">August 2021 - April 2023</cite>
                    </figcaption>
                </figure>
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <p>Digital Share, Kragujevac — iOS developer.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        <cite title="Source Title">November 2016 - December 2017</cite>
                    </figcaption>
                </figure>
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <p>Detective Agency, Belgrade — web developer.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        <cite title="Source Title">September 2015 - November 2016</cite>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-3">
                <div id="programming" class="container">
                <h4 class="text-success mb-3"><u>PROGRAMMING SKILS</u></h4>
                <p class="text-muted">HTML</p>
                <p class="text-muted">CSS</p>
                <p class="text-muted">Bootstrap</p>
                <p class="text-muted">JavaScript</p>
                <p class="text-muted">Php</p>
                <p class="text-muted">SQL</p>
                <p class="text-muted">React Native</p>
                <p class="text-muted">Git</p>
                </div>
            </div>
        </div>
        <div class="row mt-5" id="projects">
            <div class="col-sm-1"></div>
            <div class="col-sm-7">
                <h4 class="text-success text-center mb-3"><u>PROJECTS</u></h4>
                <div class="container">
                <p class="pl-3 pr-5"><h5><b>PicPoint</b></h5>React native application used to access the phone gallery and location 
                        of photos and presents detailed information about nearby objects with Google Places API.
                        Users can post text and voice messages to photos and share with friends.<br><br>
                <u>Technologies:</u> Mobile, React Native, Expo, Google Places API, Php, MySql<br><p class="text-muted">April 2022 - March 2023</p></p>
                <hr class="bg-danger border-1 border-top border-dark">
                </div>
                <div class="container">
                <p class="pl-3 pr-5"><h5><b>Package management</b></h5>Application for managing packages of different goods and interaction with couriers.<br>                
                <br>
                <u>Technologies:</u> HTML, Bootstrap, JavaScript, Php, MySQL<br><p class="text-muted">August 2021 - April 2022</p></p>
                <div class="row">
                  <div class="col-3"></div>
                  <div class="col-3 text-center">
                    <a class="btn btn-success" onclick="openFullscreen()">Play video</a>
                  </div>
                  <div class="col-3 text-center">
                    <a href="https://github.com/FilipBabic/PackageManagment" class="btn btn-success" target="_blank">View Source</a>
                  </div>                  
                </div>
                <br>
                <div class="container">
                <div class="embed-responsive embed-responsive-16by9">
                  <video loop muted playsinline controls id="myVideo" width="100%" height="100%">
                    <source src="videos/package-manager.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                  </video>
                </div>
                </div>
                <hr class="bg-danger border-1 border-top border-dark">
                </div>               
                <div class="container">
                  <p class="pl-3 pr-5"><h5><b>Private Detective</b></h5>Web presentation of detective agency services.<br><br>
                  <u>Technologies:</u> HTML, Bootstrap, JavaScript<br><br><p><a class="link-opacity-90" href="https://www.privatnidetektiv.rs" target="_blank" >https://www.privatnidetektiv.rs</a></p><p class="text-muted">October 2021</p></p>
                  <hr class="bg-danger border-1 border-top border-dark">
                </div>
                <div class="container">
                  <p class="pl-3 pr-5"><h5><b>Detective agency</b></h5>Web presentation of detective agency.<br><br>
                  <u>Technologies:</u> HTML, Bootstrap, JavaScript, Php, MySQL<br><br><p><a class="link-opacity-90" href="https://www.detektivskaagencija.rs" target="_blank" >www.detektivskaagencija.rs</a></p><p class="text-muted">September 2015 - November 2016</p></p>
                  <hr class="bg-danger border-1 border-top border-dark">
                </div>
                <h4 class="text-success text-center mb-3" id="courses"><u>COURSES</u></h4>
                <div class="container">
                  <p class="pl-3 pr-5"><b>Freecords</b>— remote— React native internship.<br><br>
                  <u>Technologies:</u> React Native, Expo<br></p>
                  <br><p><a class="link-opacity-90" href="https://www.freecords.com/" target="_blank" >www.freecords.com</a></p>
                  <p class="text-muted">August 2020 - December 2020</p>
                  <hr class="bg-danger border-1 border-top border-dark">                
                </div>
                <div class="container">
                  <p class="pl-3 pr-5"><b>Crossover, Belgrade</b>— Swift programming course.<br><br>
                  <u>Technologies:</u> Swift,XCode,Programming skills<br></p>
                  <br><p><a class="link-opacity-90" href="https://crossover.rs/apple-training-and-certification/app-development-training/razvoj-aplikacija-u-swift-programskom-jeziku-b2/" target="_blank" >www.crossover.rs</a></p>
                  <p class="text-muted">June 2016 - December 2016</p>
                  <hr class="bg-danger border-1 border-top border-dark">
                </div>
                <div class="container">
                  <p class="pl-3 pr-5"><b>Obuke i kursevi, Belgrade</b>— Searching Engine Optimisation course.<br><br>
                  <u>Technologies:</u> SEO<br></p>
                  <br><p><a class="link-opacity-90" href="https://obukeikursevi.com/nauci-da-optimizujes-web-sajt-seo-kurs/" target="_blank" >www.obukeikursevi.com</a></p>
                  <p class="text-muted">June 2015 - July 2015</p>
                  <hr class="bg-danger border-1 border-top border-dark">
                </div>
                <div class="container">
                  <p class="pl-3 pr-5"><b>Advanced Php programming course, Belgrade — php online course.</b><br><br>
                  <u>Technologies:</u> Php<br></p>
                  <br><p><a class="link-opacity-90" href="https://www.link-elearning.com/kurs-Advanced-PHP-programming---Building-Web-Applications_374_4" target="_blank" >www.link-elearning.com</a></p>
                  <p class="text-muted">November 2014</p>
                  <hr class="bg-danger border-1 border-top border-dark">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="container" id="personal">
                  <h5 class="text-success mb-3"><u>PERSONAL SKILS</u></h5>
                  <p class="text-muted">Analytical thinking</p>
                  <p class="text-muted">Attention to details</p>
                  <p class="text-muted">Adaptable</p>
                  <p class="text-muted">Dedicated</p>
                  <p class="text-muted">Teamwork skills</p>
                  <p class="text-muted">Time management</p>
                  <p class="text-muted">Problem solving</p><br><br>
                  <h5 class="text-success mb-3" id="languages"><u>LANGUAGES</u></h5>
                  <p class="text-muted">Serbian/Srpski</p>
                  <p class="text-muted">English/Engleski</p><br><br>
                  <h5 class="text-success mb-3" id="other"><u>OTHER</u></h5>
                  <p class="text-muted">Active engagement in basketball</p>
                  <p class="text-muted">Driving license B category</p>
                  <p class="text-muted">Mensa member</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h4 class="text-center mt-3"> Current time: <p id="time"> </p></h4>
    </div>
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
        function changeBgColor(background,text) {
          localStorage.setItem('bgcolor',background);
          localStorage.setItem('textcolor',text);
          document.body.style.background = background;
          document.body.style.color = text;
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>