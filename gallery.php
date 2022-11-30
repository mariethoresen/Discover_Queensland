<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Discover Queensland</title>
  <meta name="description" content="">
  <meta name="author" content="Marie Thoresen, Shraddha Pokharel, Minhaj Hossain and Sawyer Ge">
  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <style>
    .img-thumbnail{
    width: 300px;
    height: 300px;
    border: 10px solid transparent;
    border-bottom: 60px solid transparent;
    margin: 0px 0px 0px 0px;
    -webkit-border-image: url('../images/design/vintagepolaroid13.png') 30 round; /* Safari 3.1-5 */
    -o-border-image: url('../images/design/vintagepolaroid13.png') 30 round; /* Opera 11-12.1 */
    border-image: url('../images/design/vintagepolaroid13.png') 30 round;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .img-thumbail:hover{
      opacity: 0.3;
    }
    .modal-dialog{
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    }
    .modal-content {
    height: auto;
    width: auto;
    min-height: 100%;
    min-width: 100%;
    background-image: url("../images/design/light-paper-fibers.png");
    background-color: #b99556;
    border: 10px solid #232323;
    box-shadow: 0 0 0 2px #e7b333 inset;
    }
    .modal-content img{
      border:10px solid #fff;
      margin: 10px 0px 10px 0px;
    }
    .modal-footer{
      height:10px;
    }
    .modal p{
    color: #fff;
    }
    .modal h1{
      color:#e7b333;
    }
    .modal h2{
    color: #fff;
    }
    .navbar-default {
    border-top: 10px solid #e7b333;
}
    .info{
      background-color: #232323;
      border: 10px solid #232323;
      box-shadow: 0 0 0 2px #dab677 inset;
      padding:10px;
      margin: 10px 0px 10px 0px;
      height:75%;
    }
    </style>
</head>

<body class="maingallery">
  <nav class="navbar navbar-default" role="navigation">
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
          <a class="page-scroll" href="game.html">The game</a>
        </li>
      </ul>
    </div>
    <div class="navbar-border"></div>
  </nav>
  <div class="section">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <h1>The Queensland Picture Gallery</h1>
          <p>Click the image to see more information</p>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-12">
          <h1>Search</h1>
          <img src="images/label.png" class="label">
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
          <form id="filter">
            <div class="form-group">
              <input id="filter-text" type="text" class="form-control" placeholder="Filter by Text" value="">
              <p id="filter-count"><strong>48</strong> records displayed.</p>
            </div>
          </form>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>
  <div class="section wall">
    <div class="container">
      
  <?php
      // PHP errors are hidden by default, but we can turn them on
      ini_set("display_errors", 1);
      error_reporting(E_ALL ^ E_NOTICE);

      // Concatenate an API URL including all parameters inline
      $api_url = "https://data.gov.au/api/action/datastore_search?resource_id=9913b881-d76d-43f5-acd6-3541a130853d&limit=100";

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
          $recordTitle = $recordValue["dc:title"];
          $recordSpatial = $recordValue["dcterms:spatial"];
          $recordDescription = $recordValue["dc:description"];
          $recordDate = $recordValue["dcterms:temporal"];
          $recordSubject = $recordValue["dc:subject"];
          
          $recordLower = strtoupper($recordSpatial);

          if(strpos($recordSubject, 'portfolio') || strpos($recordSubject, 'Portfolio') ||
            strpos($recordSubject, 'portfolios') || strpos($recordSubject, 'Portfolios') ||
            strpos($recordSubject, 'portrait') || strpos($recordSubject, 'Portrait') || 
            strpos($recordSubject, 'portraits') || strpos($recordSubject, 'Portraits') || 
            strpos($recordSubject, 'clothes')) {
            //do nothing
          }
          else if($recordImage && $recordDescription && $recordTitle && $recordDate) {
                if(1 === preg_match('/\\d/', $recordSpatial) && (1 === preg_match('/\\d/', $recordDate))) {       
                  // Output HTML for a record with variables included
                    echo "
                    <div class=\"col-md-3 text-center image\">
                    <a data-title=\"" . $recordTitle . "\" data-date=\"" . $recordDate . "\" data-description=\"" . $recordDescription . "\" data-spatial=\"". $recordSpatial . "\" href=\"" . $recordImage . "\" class=\"strip\" data-toggle=\"modal\" data-target=\"#myModal\"><img src=\"" . $recordImage .  "\" class=\"img-thumbnail record\ image-modal-open\"> </a>
                    <br><p class=\"galleryinfo text-center\">" . substr($recordLower,0,strpos($recordLower,'; ')) . "</p>
                    </div>";
                }
              }
          }
      }

      echo '</div>';
      ?>

      <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

      <div class="modal-content">
      <div class="modal-body">

      <ul class="nav nav-pills nav-justified">
          <li class="active"><a href="#info" data-toggle="pill">Info</a></li>
          <li><a href="#beforenow" data-toggle="pill">Current Location</a></li>
      </ul>

      <div class="tab-content">
          <div id="info" class="tab-pane fade in active">
              <div class="row">
                  <div class="col-md-8">
                      <?php echo" <img src=\"" . $recordImage . "\"  class=\" galimage\"> "?>
                  </div>
                  
                  <div class="col-md-4">
                      <div class="info">
                          <?php echo "<h1 class=\"modaltitle\"> </h1>
                          <p class=\"modaldescription\"> </p>
                          <h2 class=\"\"> $recordDate </h2>"; ?>
                          <button type="button" class="btn">Add to gallery</button>
                      </div>
                  </div>
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>

          <div id="beforenow" class="tab-pane fade">
              <div class="getGoogleView text-center">
                <img src="" alt="" id="googleimg">
              </div>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
  <script src="js/script.gallery.js"></script>
  </body>
</html>