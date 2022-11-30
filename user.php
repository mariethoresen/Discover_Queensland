<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Discover Queensland - User page</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/effects.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
    .img-thumbnail{
    background-repeat: no-repeat;
    background-size: 150% 150%;
    width: 300px;
    height: 300px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    margin: 0px 0px 20px 0px;
    }
    .navbar-default {
    border-top: 10px solid #e7b333;
    }
    </style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <nav class="navbar navbar-default navbar-fixed-top cl-effect-12" role="navigation">
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
          <a class="page-scroll" href="index.php">Home</a>
        </li>
        <li>
          <a class="page-scroll" href="map.php">The challenge</a>
        </li>
        <li>
          <a class="page-scroll" href="gallery.php">The Gallery</a>
        </li>
        <li>
          <a class="page-scroll" href="game.html">The game</a>
        </li>
      </ul>
    </div>
    <div class="navbar-border"></div>
  </nav>
  <div class="section user">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 userinfo text-center">
        <div class="top-left-2"></div>
        <div class="bottom-left-2"></div>
        <div class="top-right-2"></div>
        <div class="bottom-right-2"></div>
          <h1>User information</h1>
          <img src="../images/marie.jpg" class="profile-img">
          <table class="table" style="width:200px; margin: 0 auto;">
            <tr>
              <th scope="col">Name:</th>
              <th scope="col">Marie Thoresen</th>
            </tr>
            <tr>
              <th scope="col">Age:</th>
              <th scope="col">25 Years old</th>
            </tr>
            <tr>
              <th scope="col">User since:</th>
              <th scope="col">14/09/2018</th>
            </tr>
          </table>
          <a href="../images/diploma.pdf" target="_blank" class="btn" id="button" >Diploma</a>
        </div>
        <div class="col-sm-8 achievements">
        <div class="top-left-2"></div>
        <div class="bottom-left-2"></div>
        <div class="top-right-2"></div>
        <div class="bottom-right-2"></div>
          <h1>Achievements <button type="button" class="btn btn-lg achbutt" data-toggle="modal" data-target="#achmodal">Achievement List</button></h1>
          <div id="achmodal" class="modal fade" role="dialog" style="margin-top:150px;">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h1 class="modal-title">Achievements to earn</h1>
                </div>
                <div class="modal-body">
                <h2>The challenge</h2>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nr</th>
                        <th>Name</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td scope="row">1</td>
                      <td>Traveler</td>
                       <td>Reach 1 location</td>
                      </tr>
                      <tr>
                      <td scope="row">2</td>
                      <td>Travel Apprentice</td>
                       <td>Reach 5 different locations</td>
                      </tr>
                      <tr>
                      <td scope="row">3</td>
                      <td>Explorer</td>
                      <td>Reach 10 different locations</td>
                      </tr>
                      <tr>
                      <td scope="row">4</td>
                      <td>Wandering Traveller</td>
                      <td>Reach 25 different locations</td>
                      </tr>
                      <tr>
                      <td scope="row">5</td>
                      <td>Adventurer</td>
                      <td>Reach 50 different locations</td>
                      </tr>
                      <tr>
                      <td scope="row">6</td>
                      <td>A long and strange trip</td>
                      <td>Reach 75 different locations</td>
                      </tr>
                      <tr>
                      <td scope="row">7</td>
                      <td>Walkabout like the natives</td>
                      <td>Reach 100 different locations</td>
                      </tr>
                    </tbody>
                  </table>
                  <h2>The Gallery</h2>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nr</th>
                        <th>Name</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td scope="row">1</td>
                      <td>Good start</td>
                       <td>Check out one image</td>
                      </tr>
                      <tr>
                      <td scope="row">2</td>
                      <td>Junior Apprentice</td>
                       <td>Check out 5 images</td>
                      </tr>
                      <tr>
                      <td scope="row">3</td>
                      <td>I Love Reading</td>
                      <td>Check out 10 images</td>
                      </tr>
                      <tr>
                      <td scope="row">4</td>
                      <td>Knowledge is Power</td>
                      <td>Check out 25 images</td>
                      </tr>
                      <tr>
                      <td scope="row">5</td>
                      <td>Professor</td>
                      <td>Check out 50 images</td>
                      </tr>
                      <tr>
                      <td scope="row">6</td>
                      <td>Grandmastser</td>
                      <td>Check out 75 images</td>
                      </tr>
                      <tr>
                      <td scope="row">7</td>
                      <td>I am the gallery</td>
                      <td>Check out 100 images</td>
                      </tr>
                    </tbody>
                  </table>
                  <h2>The Game</h2>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nr</th>
                        <th>Name</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td scope="row">1</td>
                      <td>Junior Player!</td>
                       <td>Complete the game once</td>
                      </tr>
                      <tr>
                      <td scope="row">2</td>
                      <td>One More Time!</td>
                       <td>Complete the game twice</td>
                      </tr>
                      <tr>
                      <td scope="row">3</td>
                      <td>Practise Makes Perfect!</td>
                      <td>Complete the game 5 times</td>
                      </tr>
                      <tr>
                      <td scope="row">4</td>
                      <td>You Said I Guess</td>
                      <td>Complete the game 10 times</td>
                      </tr>
                      <tr>
                      <td scope="row">5</td>
                      <td>Intermediate Player</td>
                      <td>Complete the game 10 times</td>
                      </tr>
                      <tr>
                      <td scope="row">6</td>
                      <td>Advanced Player</td>
                      <td>Complete the game 50 times</td>
                      </tr>
                      <tr>
                      <td scope="row">7</td>
                      <td>Master Player</td>
                      <td>Complete the game 75 times</td>
                      </tr>
                      <tr>
                      <td scope="row">7</td>
                      <td>I can play with my eyes closed</td>
                      <td>Complete the game 100 times</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
          <h2>Game achievements</h2>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">nr</th>
                <th scope="col">Date earned</th>
                <th scope="col">Achievement</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row">1</td>
                <td>14/09/2018</td>
                <td>Junior Player!</td>
              </tr>
              <tr>
                <td scope="row">2</td>
                <td>15/09/2018</td>
                <td>One More Time!</td>
              </tr>
              <tr>
                <td scope="row">3</td>
                <td>16/09/2018</td>
                <td>Practise Makes Perfect</td>
              </tr>
            </tbody>
          </table>
          <h2>Map achievements</h2>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">nr</th>
                <th scope="col">Date earned</th>
                <th scope="col">Achievement</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row">1</td>
                <td>14/09/2018</td>
                <td>Travel Alone</td>
              </tr>
              <tr>
                <td scope="row">2</td>
                <td>15/09/2018</td>
                <td>Travel Apprentice</td>
              </tr>
              <tr>
                <td scope="row">3</td>
                <td>16/09/2018</td>
                <td>Explorer</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container personalgallery">
      <h1>Personal gallery</h1>

      <?php

    // PHP errors are hidden by default, but we can turn them on
    ini_set("display_errors", 1);
    error_reporting(E_ALL ^ E_NOTICE);

    // Concatenate an API URL including all parameters inline
    $api_url = "http://data.gov.au/api/action/datastore_search?resource_id=9913b881-d76d-43f5-acd6-3541a130853d&limit=16";

    $cache_filename = "cache/slq-cache.json";

    if(file_exists($cache_filename)) { // Cache file exists
      // echo "<p>Cached: Yes</p>";
      $data = file_get_contents($cache_filename);
    }
    else { // Cache file doesn"t exist, let"s create one
      // echo "<p>Cached: No</p>";
      $data = file_get_contents($api_url);
      file_put_contents($cache_filename, $data);
    }
    
    // Decode the JSON provided by the API
    $data = json_decode($data, true);

    echo '<div class="row">';

    if(is_array($data)) {

      // Iterate over the records in the array

      foreach($data["result"]["records"] as $recordKey => $recordValue) {

        $recordImage = $recordValue["1000_pixel_jpg"];


        if($recordImage) {

          // Output HTML for a record with variables included

          echo "
           <div class=\"col-md-3\">
           <div class=\"gallerybox\">
           <a><img src=\"" . $recordImage .  "\" class=\"img-thumbnail\"></a>
           </div>
           </div>
          ";
        }
      }
    }
    echo '</div>';

    ?>
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
</body>

</html>