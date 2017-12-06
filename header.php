
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>KBS</title>


    <link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800|Old+Standard+TT' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,500,800' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="icon" href="" type="image/x-icon">

    <link rel="stylesheet" href="assets/style.css">
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body id="home">

<nav class="navbar  navbar-default" role="navigation">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt=""></a>
    </div>


    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav">
          <?php
            if($_SESSION['user']['rol'] == "Administrator"){
                ?>
                <li><a href="#">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Educatieruimtes<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="template.php">Educatieruimte raadplegen</a></li>
                        <li><a href="#">Educatieruimte reserveren</a></li>
                    </ul>
                </li>
                <li><a href="">Activiteiten</a></li>
                <li><a href="">Smoelenboek</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Beheer<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="template.php">Activiteitenbeheer</a></li>
                        <li><a href="gebruikersbeheer.php">Gebruikersbeheer</a></li>
                        <li><a href="#">Ruimtesbeheer</a></li>

                    </ul>
                </li>
                <li><a href="conf/logout.php">Uitloggen</a></li>
                <?php
            }

            if($_SESSION['user']['rol'] == "Supervisor"){
                ?>
                <li><a href="">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Educatieruimtes<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="template.php">Educatieruimte raadplegen</a></li>
                        <li><a href="#">Educatieruimte reserveren</a></li>
                    </ul>
                </li>
                <li><a href="">Activiteiten</a></li>
                <li><a href="">Smoelenboek</a></li>
                <li><a href="conf/logout.php">Uitloggen</a></li>
                <?php
            }

          if($_SESSION['user']['rol'] == "Klant"){
              ?>
              <li><a href="">Home</a></li>
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Educatieruimtes<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li><a href="template.php">Educatieruimte raadplegen</a></li>
                      <li><a href="#">Educatieruimte reserveren</a></li>
                  </ul>
              </li>
              <li><a href="conf/logout.php">Uitloggen</a></li>
              <?php
          }

          if($_SESSION['user']['rol'] == "Vrijwilliger"){
              ?>
              <li><a href="">Home</a></li>
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Educatieruimtes<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li><a href="template.php">Educatieruimte raadplegen</a></li>
                      <li><a href="#">Educatieruimte reserveren</a></li>
                  </ul>
              </li>
              <li><a href="">Activiteiten</a></li>
              <li><a href="">Smoelenboek</a></li>
              <li><a href="conf/logout.php">Uitloggen</a></li>
              <?php
          }

          ?>
      </ul>
    </div>
  </div>

  <div>	   
    <img src="img/banner.png" class="img-responsive" alt="slide">
  </div>
    


</nav>
<!-- header -->
