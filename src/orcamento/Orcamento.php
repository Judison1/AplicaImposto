<?php
namespace Orcamento;
use Imposto\Imposto;
use Produto\ListaProdutos;


class Orcamento
	{
		public function aplicarImposto(ListaProdutos $produtos, Imposto $imposto):ListaProdutos
		{
            $produtos_taxados = new ListaProdutos();
			foreach ($produtos->getProdutos() as $produto) {
                $produto->setTaxa($imposto->calculoImposto($produto));
                $produtos_taxados->inserirProduto($produto);
			}
			return $produtos_taxados;
		}
	}