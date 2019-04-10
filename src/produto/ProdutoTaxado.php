<?php
/**
 * Created by PhpStorm.
 * User: judis
 * Date: 09/04/2019
 * Time: 19:18
 */

namespace Produto;


class ProdutoTaxado extends Produto
{
    private $taxa;

    /**
     * @param mixed $taxa
     */
    public function setTaxa($taxa): void
    {
        $this->taxa = $taxa;
    }

    /**
     * @return mixed
     */
    public function getTaxa()
    {
        return $this->taxa;
    }

    public function valorTotal(): float
    {
        return ($this->getValor() + $this->taxa) * $this->getQuantidade();
    }

}