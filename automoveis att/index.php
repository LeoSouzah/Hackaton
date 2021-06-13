<?php
  session_start(); //iniciando uma sessão

	//incluir o arquivo de conexao com o banco
	require "config/conexao.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cianci Automóveis</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">

  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/lightbox.js"></script>
  <script type="text/javascript" src="js/parsley.min.js"></script>
</head>
<body style='max-width: 100%; padding: 0; '>
  <div>
    <nav  class="navbar navbar-dark fixed-top navbar-expand-lg">
  <a class="navbar-brand" href="index.php">
  	<img src="images/logo1.png" alt="SubMarino">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

  <div class="collapse navbar-collapse" id="menu" style="font-family: Comic Sans, Comic Sans MS;">
    <ul class="nav nav-pills nav-fill" >
      <div class="navegador" style="padding-left: 20px;">
      <li class="nav-item" style= "transition: width 2s;">
        <a class="nav-link active font-weight-bold text-white bg-dark" href="index.php">
        	Página de Destaque
    	</a>
      </li>
      </div>
      <div class="navegador" style="padding-left: 20px;">
      <li class="nav-item" >
        <a class="nav-link active  font-weight-bold text-white bg-dark" href="index.php?pagina=novo">
        	Carros Novos
    	</a>
      </li>
    </div>
    <div class="navegador" style="padding-left: 20px;">
      <li class="nav-item" >
        <a class="nav-link active  font-weight-bold text-white bg-dark " href="index.php?pagina=seminovo">
          Carros Seminovos
      </a>
      </li>
    </div>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="index.php?pagina=login" class="nav-link">
          <i class="fas fa-user fa-2x"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?pagina=carrinho">
          <i class="fas fa-shopping-cart fa-2x"></i>
        </a>
      </li>
    </ul>
</div>
</nav>
<main>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/carrosel3.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/carrosel6.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


	<?php
		//recebe o valor da pagina (GET)
		$pagina = $_GET["pagina"] ?? "home";

		//$paginas = home -> paginas/home.php
		$pagina = "paginas/{$pagina}.php";

		//verificar se a página
		if ( file_exists($pagina) ) {
			//incluir a minha página
			include $pagina;
		} else {
			include "paginas/erro.php";
		}


	?>
</main>

<footer style="text-align: center;" class="bg-dark" >
    <p class="text-center">Cianci Automóveis - Venda de carros</p>
    <img src="images/logo1.png">
</footer>
</body>
</div>
</html>