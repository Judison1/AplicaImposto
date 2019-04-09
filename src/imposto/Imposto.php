<?php
namespace Imposto;

	use Produto\Produto;

    abstract class Imposto implements ImpostoInterface
	{
		protected $aliquota;

		public abstract function setAliquota():void;

		public function calculoImposto(Produto $produto): float
		{
			return $produto->getValor() * $this->aliquota;
		}
	
		public function getAliquota(): float
		{
			return $this->aliquota;
		}

	}