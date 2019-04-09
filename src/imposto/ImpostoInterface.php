<?php
/**
 * Created by PhpStorm.
 * User: judis
 * Date: 09/04/2019
 * Time: 18:55
 */

namespace Imposto;


use Produto\Produto;

interface ImpostoInterface
{
    public function setAliquota():void;
    public function getAliquota():float;
    public function calculoImposto(Produto $produto):float;
}