<?php
	//verificar se a variável $pagina não existe
	if ( !isset ( $pagina ) ) exit;
?>
<h1 style="text-align: center;">Efetuar Login</h1>
<div style="width: 400px; margin-left: 550px; ">
<form name="formLogin" method="post" action="index.php?pagina=logar" data-parsley-validate="">
	<label >Login:</label>
	<input type="text" name="login" class="form-control" required
	data-parsley-required-message="Digite um login"
	data-parsley-type-message="Insira um login válido">
	<br>
	<label >Senha:</label>
	<input type="password" name="senha" class="form-control" required 
	data-parsley-required-message="Digite sua senha">
	<br>
	<button type="submit" value="entrar" id="entrar" name="entrar" class="btn btn-danger">
		<i class="fas fa-check"></i> Efetuar Login
	</button>
</form>
</div>