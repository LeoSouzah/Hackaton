<?php
	require "config/conexao.php";
	if ( !isset ( $pagina ) ) exit;

	if ( $_POST ) {

		//recuperar o e-mail e a senha
		$login = $_POST['login'];
        $senha = md5($_POST['senha']);

		$sql = "select id, nome, login, senha 
			from usuario 
			where login = '{$login}' limit 1";
		$resultado = mysqli_query( $con, $sql );
		$dados = mysqli_fetch_array( $resultado );

		//verificar se trouxe um id
		if ( empty ( $dados["id"] ) ) {
			//mensagem de erro em js
			echo "<script>alert('login ou senha inválidos');history.back();</script>";
			exit;
		} else if ( !password_verify($senha, $dados["senha"]) ) {
			//mensagem de erro em js
			echo "<script>alert('login ou senha inválidos');history.back();</script>";
			exit;
		}

		//efetuar o login
		$_SESSION["usuario"] = array("id"=>$dados["id"],
			"nome"=>$dados["nome"],
			"login"=>$dados["login"]);
		//redirecionar
		echo "<script>location.href='index.php?pagina=carrinho';</script>";
		exit;

	}