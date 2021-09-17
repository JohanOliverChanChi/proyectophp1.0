<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilosIndex.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>Blog Johan Oliver Chan Chi</title>
  </head>

  <body>

<?php include 'views/header.php' ?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="imagenes/carousel1.jpg " class="d-block w-100" alt="..." >
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <img src="imagenes/carousel2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <img src="imagenes/carousel3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    <h1>tengo 21 años</h1>
    <h1>estudio ingenieria en sistemas en la universidad autonoma de campeche</h1>
    <h1>vivo en el municipio de seybaplaya</h1>
    <h1>convivo con mi familia y de mascotas tengo dos peces</h1>
    <h1>
      Metas y motivaciones:mi meta es modernizar los servicios de los
      negocion(sobre todo el mio) y dar a conocer las nuevas tecnologias
      distribullendolas y ganando dinero
    </h1>
    <h1>
      mi meta es modernizar los servicios de los negocion(sobre todo el mio) y
      dar a conocer las nuevas tecnologias distribullendolas y ganando dinero
    </h1>
    <p>
      Chanel
      <input type="range" min="1" max="10" />
      H&amp;M
    </p>
    <p>
      SAP
      <input type="range" min="1" max="10" />
      Google
    </p>
    <p>
      Honda
      <input type="range" min="1" max="10" />
      Tesla
    </p>
    <p>
      Disney
      <input type="range" min="1" max="10" />
      NYT
    </p>
    <p>
      Hilton
      <input type="range" min="1" max="10" />
      AirBnB
    </p>
    <a href="https://github.com/JohanOliverChanChi">Github</a>

    <div class="container">
<?php include 'controller/routing.php' ?>
<!--
<?php //include 'views/login.php' ?>
<?php //include 'views/bienvenida.php' ?>
-->
</div>
<?php include 'views/footer.php' ?>

<?php include 'views/footer.php' ?>




    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</html>
