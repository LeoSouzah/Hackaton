<?php
	//verificar se a variável $pagina não existe
	if ( !isset ( $pagina ) ) exit;

?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<br>
<h1 style="font-family: Comic Sans, Comic Sans MS; text-align: center;">Carros em Destaque:</h1>
<br>
<div class="row">
	<?php
		//selecionar 6 produtos - rand -> sorteio - limit limitar o nr de resultado
		$sql = "select * from veiculo order by rand() limit 6";
		//executar o sql
		$result = mysqli_query($con, $sql);

		//separar os dados por linha
		while ( $dados = mysqli_fetch_array( $result ) ) {
			//separar
			$id = $dados["id"];
			$modelo = $dados["modelo"];
			$anomodelo = $dados["anomodelo"];
			$tipo= $dados["tipo"];
			$fotoDestaque = $dados["fotoDestaque"];
			$valor = $dados["valor"];

			//se tiver promo - valor = valor da promo
			//senao valor = valor do produto

			//se a promo esta vazio - valor = valor do produto
			

			echo /*"<div class='col-12 col-md-4 text-center'>
				<img src='produtos/{$fotoDestaque}.png' alt='{$modelo}' class='w-50'>
				<h2>{$modelo}</h2>
				<p class='valor'>{$valor}m</p>
					<a href='index.php?pagina=modelo&id={$id}' class='btn btn-info btn-md w-80'>
					Comprar
					</a>
				</p>
			</div>*/
			"
			<div class='col-12 col-md-2 text-center' style='padding-left: 25px; '>
			<div class='card text-white bg-info mb-3' style='width: 13rem; justify-content: center;  align-items: center;'>
               <img class='card-img-top' src='produtos/{$fotoDestaque}.png' alt='Card image cap' style=' justify-content: center;  align-items: center;'>
                <div class='card-body' style=' justify-content: center;  align-items: center;'>
                  <h5 class='card-title'>{$modelo}</h5>
                  <p class='card-text'>Valor: {$valor}m</p>
            <a href='index.php?pagina=produto&id={$id}'' class='btn btn-dark'>Ver mais</a>
           </div>
          </div>
          </div>
         " 
			;

		}
	?>
</div>