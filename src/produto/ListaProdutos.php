<?php
namespace Produto;
use Produto\Produto;
	
	class ListaProdutos
	{
		private $produtos;
		private $indice;

		function __construct()
		{
			$this->indice = 0;
			$this->produtos = array();
		}

		public function inserirProduto(Produto $produto)
		{
			$indice = $this->indice;
			$produto->setId($this->indice);
			$this->produtos[$indice] = $produto;
			$this->indice++;
			return $indice;
		}
		public function encontrarProduto($indice){
			return $this->produto[$indice];
		}
		public function getProdutos() {
			return $this->produtos;
		}

	}