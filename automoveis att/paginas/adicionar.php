<?php
	//verificar se a variável $pagina não existe
	if ( !isset ( $pagina ) ) exit;

	if ( $_POST ) {

		//recuperar as variáveis
		$id = trim ( $_POST['id'] ?? NULL );
		$quantidade = trim ( $_POST['quantidade'] ?? 1 );

		//verificar se o id está vazio
		if ( empty ( $id ) ) {
			echo "<script>alert('Produto inválido');history.back();</script>";
			exit;
		}

		//selecionar os dados do banco
		$sql = "select id, modelo, valor 
			from veiculo
			where id = ".(int)$id." limit 1";

		$result = mysqli_query($con, $sql);
		$dados = mysqli_fetch_array($result);

		//separar os dados
			$id = $dados["id"];
	        $modelo = $dados["modelo"];
	        $valor = $dados["valor"];

		//o valorProduto sempre será o valor do produto
		    $valorProduto = $valor;

		//valor total
		$total = $valorProduto * $quantidade;

		//guardar esses valores na sessao
		$_SESSION["carrinho"][$id] = array("id"=>$id, 
										"modelo"=>$modelo,
										"valor"=>$valor,
										"quantidade"=>$quantidade,
										"total"=>$total);
		//print_r ( $_SESSION['carrinho'] );

		//redirecionar para o carrinho
		echo "<script>location.href='index.php?pagina=carrinho';</script>";

		exit;

	}

	//mensagem de erro - não esta inserindo nada
?>
<script type="text/javascript">
	//mostrar pop up com mensagem - voltar para a página anterior
	alert('Requisição inválida, tente novamente');history.back();
</script>