<?php
/**
 * Created by PhpStorm.
 * User: judis
 * Date: 09/04/2019
 * Time: 19:45
 */

namespace Orcamento;


use Produto\ListaProdutos;

class ExibeOrcamento
{
    public static function imprime(ListaProdutos $listaProdutos) {

        foreach ($listaProdutos->getProdutos() as $produto) {

            echo 'id = ' . $produto->getId() . '<br>'
                .'item = ' . $produto->getItem() . '<br>'
                .'valor = ' . $produto->getValor() . '<br>'
                .'quantidade = '. $produto->getQuantidade() . '<br>'
                .'taxa por unidade = ' . $produto->getTaxa() . '<br>'
                .'total + imposto = ' . $produto->valorTotal() . '<hr>';
        }
    }
}