<?php
/**
 * CNPJ [TIPO]
 * Description
 * @copyright (c) 2021-08-30, Neylton Benjamim
 * @author neylton
 */

namespace Type;

interface InterfaceType
{
    public function __toString();

    public function formatted(): string;

}
