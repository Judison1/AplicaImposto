<?php


namespace Orcamento;


use Imposto\ImpostoICMS;
use Produto\ListaProdutos;
use Produto\ProdutoTaxado;

class TesteOrcamentoICMS
{
    static public function run()
    {
        $produtos = new ListaProdutos();
        $produtos->inserirProduto(new ProdutoTaxado('Arroz', 2.5, 300));
        $produtos->inserirProduto(new ProdutoTaxado('Feijão', 4.3, 600));
        $produtos->inserirProduto(new ProdutoTaxado('Açucar', 2.1, 400));

        $orcamento = new Orcamento();
        $result = $orcamento->aplicarImposto($produtos, new ImpostoICMS);
        ExibeOrcamento::imprime($result);
    }
}