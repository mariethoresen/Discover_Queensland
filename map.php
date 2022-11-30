<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Discover Queensland - The challenge</title>
  <meta name="description" content="">
  <meta name="author" content="Marie Thoresen, Shraddha Pokharel, Minhaj Hossain and Sawyer Ge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
    crossorigin=""></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
    crossorigin="" />
  <link rel="stylesheet" href="css/strip.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
    .popUpCustom .leaflet-popup-tip,
    .popUpCustom .leaflet-popup-content-wrapper {
      background-color: #232323;
      text-align: center;
      font-weight: bold;
      font-size: 16px;
      color: white;
      width: 300px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    </style>
</head>
<body class="mainmap">
  <nav class="navbar navbar-default cl-effect-4" role="navigation">
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
          <a class="page-scroll" href="gallery.php">The gallery</a>
        </li>
        <li>
          <a class="page-scroll" href="game.html">The game</a>
        </li>
      </ul>
    </div>
    <div class="navbar-border"></div>
  </nav>
  <div id="mapid"></div>
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
  <script src="js/script.map.js"></script>
</body>
</html>