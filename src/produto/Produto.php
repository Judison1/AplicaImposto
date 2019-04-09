<?php
	
	/**
	 * 
	 */
	namespace Produto;

	class Produto
	{
		private $id;
		private $item;
		private $valor;
		private $quantidade;
		
        function __construct(){
        	$a = func_get_args();
	        $i = func_num_args();
	        if (method_exists($this,$f='__construct'.$i)) 
	            call_user_func_array(array($this,$f),$a);
        	
        }
		function __construct3(string $item, float $valor, int $quantidade)
		{
			$this->item = $item;
			$this->valor = $valor;
			$this->quantidade = $quantidade;
		}

		public function valorTotal(): float
		{
			return $this->valor * $this->quantidade;
		}

		public function setId(int $id){
			$this->id = $id;
		}
		public function getId(): int{
			return $this->id;
		}

		public function getItem(): string{
			return $this->item;
		}

		public function setValor(float $valor) {
			$this->valor = $valor;
		}

		public function getValor(): float{
			return $this->valor;
		}

		public function setQuantidade(int $quantidade) {
			$this->quantidade = $quantidade;
		}

		public function getQuantidade(): int{
			return $this->quantidade;
		}
	}