<?php
/**
 * Created by PhpStorm.
 * User: judis
 * Date: 09/04/2019
 * Time: 19:23
 */

namespace Produto;


interface ProdutoInterface
{
    public function valorTotal(): float;
    public function setId(int $id);
    public function getId(): int;
    public function getItem(): string;
    public function setValor(float $valor);
    public function getValor(): float;
    public function setQuantidade(int $quantidade);
    public function getQuantidade(): int;
}