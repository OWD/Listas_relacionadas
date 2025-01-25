<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>El blog de Angelo | Listas relacionadas dependientes</title>

  <?php include('includes/metas.php'); ?>
  <?php include('includes/favicon.php'); ?>

<!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  
</head>
<body>    
<main>
  <div class="container py-4">
    <header>
      <div class="bg-dark shadow-sm py-4">
          <code><h1 style="text-align:center;color: #fff;">El blog de Angelo</h1></code>
      </div>
    </header>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Listas relacionadas dependientes</h1>
        <p class="fs-4">A continuación vamos a tratar un tema bastante recurrente entre los desarrolladores web, a saber: <strong>las listas relacionadas dependientes</strong>. En este caso, aprovechamos la ocasión para trabajar con diversas tablas que albergan todas las Comunidades Autónomas, provincias y municipios de nuestra geografía. Sin más dilación, <strong>disfrutemos del momento!</strong></p>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h4>Nota</h4>
          <p style="text-align: justify;">En el siguiente recuadro podemos apreciar tres ventanas: Comunidades Autónomas, Provincias y Municipios. Mediante ajax y listas relacionadas, dependiendo de qué Comunidad Autónoma y provincia seleccionemos en la primera y segunda ventana, obtendremos sus correspondientes poblaciones en la tercera.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <?php include('includes/formulario.php'); ?>
        </div>
      </div>
    </div>

    <footer class="pt-3 mt-4 text-muted border-top">
      ANGELO &copy; 2025
    </footer>
  </div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</body>
</html>
