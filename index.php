<?php
//Header
require_once 'includes/head.php';
require_once 'model/ProdutoDao.php';

?>
<div class="row">
	<div class="col s12 m6 push-m3">

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

		//Exclusao
		if(isset($_POST['excluir-ui'])){
			$id = $_POST['id_ui'];
			$produto->delete($id);
		}

		//Alterar
		if(isset($_POST['editar-ui'])){
			$id = $_POST['id_ui'];
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

			$produto->update($id);
		}

		?>

		<h3 class="light">Produtos</h3>
<div class="row">
	<div class="col s12 m6 push-m3">


			<form  method="POST">

		<table class="striped">
			<thead>
				<tr>					
					<th>Nome:</th>
					<th>Descrição:</th>
					<th>Quantidade:</th>
					<th>Preco:</th>
					<th>Vencimento:</th>
				</tr>
			</thead>
			<tbody>
           <?php  foreach ($produto->findAll() as $key=>$value) {?>

           	<input type="hidden" name="id_ui" value="<?php echo  $value->id;?>"/>
				<tr>							
				<td><input type="text"  name="nome" id="nome" value="<?php echo $value->nome;?>"></td>
				<td><input type="text" name="descricao" id="descricao" value="<?php echo $value->descricao;?>"> </td>
				<td><input type="text" name="quantidade" id="quantidade" value="<?php echo $value->quantidade;?>"> </td>
				<td><input type="text" name="preco" id="preco" value="<?php echo $value->preco;?>"></td>
				<td><input type="text" name="data" id="data" value="<?php echo $value->data;?>"></td>					
				<td>
					<button  name="editar-ui"  type="submit" value="Alterar" class="btn-floating orange" ><i class="material-icons">edit</i></button>
					<button name="excluir-ui" type="submit" class="btn-floating red modal-trigger" ><i class="material-icons">delete</i></button>
				</td> 			
			   </tr>

<?php } ?>
			</tbody>
			</tbody>
			</table>
			</form>
			<br>	
			<a href='cadastro.php' class="btn">Adicionar Produto</a>

</div>
</div>

<?php
//Footer
include_once 'includes/footer.php';
?>