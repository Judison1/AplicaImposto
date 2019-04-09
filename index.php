<?php
	require __DIR__ . '/vendor/autoload.php';
	use Produto\ListaProdutos;
	use Produto\ProdutoTaxado;
	use Orcamento\Orcamento;
	use Imposto\ImpostoICMS;

	$produtos = new ListaProdutos();
	$produtos->inserirProduto(new ProdutoTaxado('Arroz', 2.5, 300));
	$produtos->inserirProduto(new ProdutoTaxado('Feijão', 4.3, 600));
	$produtos->inserirProduto(new ProdutoTaxado('Açucar', 2.1, 400));

	$orcamento = new Orcamento();
	$result = $orcamento->aplicarImposto($produtos, new ImpostoICMS);
	\Orcamento\ExibeOrcamento::imprime($result);
?>