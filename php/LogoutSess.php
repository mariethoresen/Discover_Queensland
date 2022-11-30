<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="1; url=index.html" />
<meta name="viewport" content="initial-scale=1">
<title>Untitled Document</title>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Bootstrap and JQuery-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--Stylesheet-->
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Archivo+Narrow" rel="stylesheet">

<?php
	session_start();
	
	if (isset($_SESSION['user'])) {
		$name = $_SESSION['user'];
		session_destroy();
		header("Location:../index.php");
	}
	else {
		//redirect to not-welcome	
		header("Location:../pages/SessNotWelcome.html");
	}
?>
</head>

<body>
  
  	<h1>Goodbye <?php echo $name ?>!</h1>
		<h3>Hope to see you again soon!</h3> 
		

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  
</body>
</html>

