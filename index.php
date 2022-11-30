<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Discover Queensland</title>
  <meta name="description" content="">
  <meta name="author" content="Marie Thoresen, Shraddha Pokharel, Minhaj Hossain and Sawyer Ge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/effects.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<?php
    // PHP errors are hidden by default, but we can turn them on
    ini_set("display_errors", 1);
    error_reporting(E_ALL ^ E_NOTICE);

    // Concatenate an API URL including all parameters inline
    $api_url = "http://data.gov.au/api/action/datastore_search?resource_id=9913b881-d76d-43f5-acd6-3541a130853d&limit=8";

    $cache_filename = "cache/slq-cache.json";


    $data = file_get_contents($api_url);

    // Decode the JSON provided by the API
    $data = json_decode($data, true);
    $recordImage = array();

    if(is_array($data)) {
        // Iterate over the records in the array
        foreach($data["result"]["records"] as $recordKey => $recordValue) {
            array_push($recordImage,$recordValue["1000_pixel_jpg"]);
        }
    }

?>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <nav class="navbar navbar-default navbar-fixed-top cl-effect-4" role="navigation">
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li class="hidden"><a class="page-scroll" href="#page-top"></a></li>
        <li>
          <a class="page-scroll" href="#about">About</a>
        </li>
        <li>
          <a class="page-scroll" href="#team">The team</a>
        </li>
        <li id="hide">
          <a class="page-scroll" href=""><img src="../images/design/brand.png" id="brand"></a>
        </li>
        <li>
          <a class="page-scroll" href="#contact">Contact</a>
        </li>
        <li>
          <a class="page-scroll" href="#" data-toggle="modal" data-target="#loginmodal">Login</a>
        </li>
      </ul>
    </div>
    <div class="navbar-border"></div>
  </nav>
  <div id="loginmodal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <div class="top-left-2"></div>
          <div class="top-right-2"></div>
        </div>
        <div class="col-md-6">
          <h1 class="text-center">Log in</h1>
          <form action="php/LoginSess.php" method="get" data-ajax="false">
            <div class="form-group">
              <label for="user">Username</label>
              <input id="user" name="user" class="form-control" />
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input id="password" name="password" class="form-control" />
            </div>
          </form>
          <a href="user.php" class="btn" id="button" >Sign in</a>
        </div>
        <div class="col-md-6" style="border-left:2px solid #232323;">
          <h1 class="text-center">Register</h1>
          <form action="php/registerform.php" method="get">
            <div class="form-group">
              <label for="nybruker">Brukernavn</label>
              <input id="nybruker" name="bruker" class="form-control" />
            </div>
            <div class="form-group">
              <label for="nypassord">Passord</label>
              <input id="nypassord" name="passord" class="form-control" />
            </div>
            <div class="form-group">
              <label for="nynavn">Navn</label>
              <input id="nynavn" name="navn" class="form-control" />
            </div>
            <div class="form-group">
              <label for="nyepost">Email</label>
              <input id="nyepost" name="epost" class="form-control" />
            </div>
            <input type="submit" value="Register" class="btn" />
          </form>
        </div>
        <div class="modal-footer text-center">
          <div class="bottom-left-2"></div>
          <div class="bottom-right-2"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="section" id="move">
    <div id="logo"></div>
    <div class="text-center" id="gradientleft"></div>
    <div class="row welcome">
      <div class="col-md-12">
      </div>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <?php
              echo  "<div class=\"item active size\">
                        <img id=\"gradient\" src=\"" . $recordImage[1] . "\">
                    </div>
                ";
                foreach(array_slice($recordImage, 2) as $img){
                    echo    "<div class=\"item size\">
                                <img id=\"gradient\" src=\"" . $img . "\">
                            </div>
                    ";
                }
              ?>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="section options">
    <div class="row text-center" style="margin: 0px;">
      <div class="col-sm-6 challenge">
        <div class="top-left"></div>
        <div class="top-right"></div>
        <div class="top-left-bottom"></div>
        <div class="top-right-bottom"></div>
        <h1>The Challenge</h1>
        <p>Wish to take up our challenge? By choosing this option<br>
          you will be taken to a map with the location you need to visit.<br>
          If you manage to do so, you will unlock out achievement rewards.
        </p>
        <a href="map.php"><button class="buttonimg1">Go to the challenge</button></a>
      </div>
      <div class="col-sm-6 gallery">
        <div class="top-left" style="left: 0;"></div>
        <div class="top-right" style="right: 0px;"></div>
        <div class="top-left-bottom" style="left: 0px;"></div>
        <div class="top-right-bottom" style="right: 0px;"></div>
        <h1>The Gallery</h1>
        <p>Wish to learn more about Queensland and its history? <br>
          Look thorugh our gallery and click on the images to learn more.<br>
          Save those you like to you own gallery.
        </p>
        <a href="gallery.php"><button class="buttonimg2">Go to the gallery</button></a>
      </div>
    </div>
  </div>
  <div class="section gamebg">
    <div class="container" id="newpadding">
      <div class="row text-center">
        <div class="col-md-12 game">
          <div class="top-left" style="top:0px; left:0px;"></div>
          <div class="top-right" style="top:0px; right:0px;"></div>
          <div class="top-left-bottom" style="bottom:0px; left:0px;"></div>
          <div class="top-right-bottom" style="bottom:0px; right:0px;"></div>
          <h1>The Game</h1>
          <p>If the ordinary approches isn't for you then this is<br>
            the solution!<br>
            Make history extra fun with our games based on our gallery <br>
          </p>
          <a href="game.html"><button class="buttonimg3">Go to the game</button></a>
        </div>
      </div>
    </div>
  </div>
  <div class="section about" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>About Us</h1>
          <p id="introduction1">We are team "Abusement Park"<br>
            We are students who are studying in different major in the University of Queensland<br>
            Some of us has their own company, but they still wants to learn new things to improve their lives<br>
            We are coming from different countries and with different religions, but we all have the same purpose which
            make the best webpage for our audience<br>
            We like to think about how to make a website with a good user experience from the perspective of the user<br>
            This website is our first cooperation, we will also show our best part to our target audience<br>
            This is our team, we are "Abusement Park"!</p>
        </div>
      </div>
    </div>
  </div>
  <div class="section team" id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">The Team</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <img src="https://p1a.interaction.courses/images/marie.jpg" class="img-thumbnail">
        </div>
        <div class="col-md-4">
          <h3 class="text-left">Marie Thoresen</h3>
          <p class="text-left">Team Leader of "Abusement Park"!<br>
            can't live without Coca Cola! <br>
            The best Norwegian</p>
        </div>
        <div class="col-md-2">
          <img src="https://p1a.interaction.courses/images/sawyer.jpg" class="img-thumbnail">
        </div>
        <div class="col-md-4">
          <h3 class="text-left">Xuehai Ge</h3>
          <p class="text-left">An IT major student, but cannot programming! Can you believe that?<br>
            Love Boost juice so much! <br>
            Chinese guys who have lowered the IQ of Chinese people！</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <img src="https://p1a.interaction.courses/images/shraddha.jpg" class="img-thumbnail">
        </div>
        <div class="col-md-4">
          <h3 class="text-left">Shraddha Pokharel</h3>
          <p class="text-left">An IT major student, good student!<br>
            Water is good, thank you!<br>
            Born in Nepal, growing up in Australia！
          </p>
        </div>
        <div class="col-md-2">
          <img src="https://p1a.interaction.courses/images/minhaj.jpg" class="img-thumbnail">
        </div>
        <div class="col-md-4 text-center">
          <h3 class="text-left">Minhaj Hossain</h3>
          <p class="text-left">Not an IT background, but he can do anything<br>
            Although I can't hear your voice, but I can hear your heartfelt wishes!<br>
            Very friendly and very humorous！
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="section contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Contact us</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form role="form">
            <div class="form-group">
              <label class="control-label" for="exampleInputEmail1">Email address</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
            </div>
            <div class="form-group">
              <label class="control-label" for="exampleInputPassword1">Message</label>
              <input class="form-control" id="exampleInputPassword1" placeholder="Message" type="password">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer class="section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
          <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
          <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <script src="js/script.js"></script>
</body>

</html>