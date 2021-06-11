<?php
	//verificar se a variável $pagina não existe
	if ( !isset ( $pagina ) ) exit;

	//print_r ( $_GET );

	//recuperacao do id
	//trim retira espaços em branco
	$id = trim( $_GET["id"] ?? "" );

	$id = (int)$id;

	//var_dump($id);
	//recuperar o produto com o id
	$sql    = "select * from veiculo where id = {$id} limit 1";
	$result = mysqli_query($con, $sql);
	$dados  = mysqli_fetch_array($result);

	//print_r ( $dados );

	//recuperar os dados do banco
	$id = $dados["id"];
	$modelo = $dados["modelo"];
	$anomodelo = $dados["anomodelo"];
	$anofabricacao = $dados["anofabricacao"];
	$tipo= $dados["tipo"];
	$fotoDestaque = $dados["fotoDestaque"];
	$valor = $dados["valor"];

?>
<h1 style="padding-left: 80px; font-family: Comic Sans, Comic Sans MS; padding-top: 20px;"><?=$modelo?></h1>
<div class="row" style="padding-right: 15px;">
	<div class="col-12 col-md-4">
		<a href="produtos/<?=$fotoDestaque?>.png" data-lightbox="produto" title="<?=$modelo?>">
			<img src="produtos/<?=$fotoDestaque?>.png" alt="<?=$modelo?>" class="w-100">
		</a>
	</div>
	<div class="col-12 col-md-8">

		<form name="formProduto" method="post" action="index.php?pagina=adicionar">
			<input type="hidden" name="id" value="<?=$id?>">
			<div class="input-group">
				<input type="number" name="quantidade" value="1" class="form-control form-control-lg" placeholder="Quantidade" required
				inputmode="numeric">
				<div class="input-group-append">
					<button type="submit" class="btn btn-primary btn-lg">
						<i class="fas fa-check"></i> Comprar
					</button>
				</div>
			</div>
		</form>

		<br><br>

		<?php 
		echo" 
				<div class='card bg-light mb-3' style='width: 18rem; margin-left:360px; font-family: Comic Sans, Comic Sans MS;'>
				 <div class='card-header' style='width: 14rem; font-size:20px; '><strong>Descrição do carro</strong></div>
                       <div class='card-body'>
                          <p class='card-text'>Valor: {$valor}m</p>
                          <p class='card-text'>Tipo: {$tipo}</p>
                          <p class='card-text'>Ano do modelo: {$anomodelo}</p>
                          <p class='card-text'>Ano de fabricação: {$anofabricacao}</p>
                      </div>
                </div> "
       ?>


	</div>
</div>
