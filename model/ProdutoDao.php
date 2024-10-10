<?php

require_once 'Produto.php';


class ProdutoDao extends Produto{

	protected $tabela = 'tbl_produtos';



	public function insert(){
		$sql = "INSERT INTO $this->tabela (nome,descricao,quantidade,preco,data) VALUES(:nome,:descricao,:quantidade,:preco,:data)";
		$stm = DB::prepare($sql);
		$stm->bindParam(':nome', $this->nome);
		$stm->bindParam(':descricao', $this->descricao);
		$stm->bindParam(':quantidade', $this->quantidade);
		$stm->bindParam(':preco', $this->preco);
		$stm->bindParam(':data', $this->data);
		return $stm->execute();
	}

	public  function findUnit($id){
		$sql = "SELECT * FROM  $this->tabela WHERE id = :id";
		$stm = DB::prepare($sql);
		$stm->bindParam(':id',$id, PDO::PARAM_INT);
		$stm->execute();
		return $stm->fetch();

	}
	public function findAll(){
		$sql = "SELECT * FROM  $this->tabela";
		$stm = DB::prepare($sql);
		$stm->execute();
		return $stm->fetchAll();
	}







	public function update($id){
		$sql = "UPDATE $this->tabela SET nome = :nome, descricao =:descricao,quantidade = :quantidade, preco = :preco, data = :data WHERE id= :id";
		$stm = DB::prepare($sql);
		$stm->bindParam(':id', $id,PDO::PARAM_INT);
		$stm->bindParam(':nome', $this->nome);
		$stm->bindParam(':descricao', $this->descricao);
		$stm->bindParam(':quantidade', $this->quantidade);
		$stm->bindParam(':preco', $this->preco);
		$stm->bindParam(':data', $this->data);
		return $stm->execute();
	}
	public function delete($id){
		$sql = "DELETE FROM $this->tabela WHERE id = :id";
		$stm = DB::prepare($sql);
		$stm->bindParam(':id',$id,PDO::PARAM_INT);
		return $stm->execute();
	}

}