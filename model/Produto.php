<?php

require_once 'DB.php';

abstract class Produto extends DB{

	protected $tabela;

	public $nome;
    public $descricao;
	public $quantidade;
    public $preco;
	public $data;

	//metodos setters e getters
	public  function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setDescricao($descricao){
		$this->descricao =$descricao;
	}

	public function getDescricao(){
		return $this->descricao;
	}
	public function setQuantidade($quantidade){
		$this->quantidade = $quantidade;
	}
    public function getQuantidade(){
		return $this->quantidade;
	}
	public function setPreco($preco){
		$this->preco = $preco;
	}
	public function getPreco(){
		return $this->preco;
	}
	public function setData($data){
		$this->data = $data;
	}
	public function getData(){
		return $this->data;
	}
	
}
	
