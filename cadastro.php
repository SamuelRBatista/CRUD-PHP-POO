<?php
require_once 'includes/head.php';

function __autoload($class){
require_once 'model/' .$class. '.php';	
}
?>


<div class="row">

	<?php

			$produto = new ProdutoDao();

			if(isset($_POST['cadastrar'])):
			$nome = $_POST['nome'];
			$descricao = $_POST['descricao'];
			$quantidade = $_POST['quantidade'];
			$preco = $_POST['preco'];
			$data = $_POST['data'];
$produto->setNome($nome);
$produto->setDescricao($descricao);
$produto->setQuantidade($quantidade);
$produto->setPreco($preco);
$produto->setData($data);
$produto->insert();
		endif;
		?>

	<div class="col s12 m6 push-m3">

		<h3 class:"light">Novo Produto</h3>


		<form  method="POST">

			<div class="input-field col s12">

				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="descricao" id="descricao">
				<label for="nome">Descrição</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="quantidade" id="quantidade">
				<label for="nome">Quantidade</label>
			</div>


			<div class="input-field col s12">
				<input type="text" name="preco" id="preco">
				<label for="nome">Preço</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="data" id="data">
				<label for="nome">Data</label>
			</div>

		<button type="submit" name="cadastrar" class="btn" value="Cadastrar" >Cadastrar</button>
		<a href="index.php" class="btn" >Voltar</a> 
		
		</form>
</div>
</div>

<?php
//Footer
include_once 'includes/footer.php';
?>



