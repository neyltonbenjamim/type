<?php
/**
 * CNPJ [TIPO]
 * Description
 * @copyright (c) 2022-02-21, Neylton Benjamim
 * @author neylton
 */

namespace Type;

class Nome extends BaseString implements InterfaceType
{

    private string $nome;
    private string $formatted;

    const MAX_LENGTH = 60;
    const MIN_LENGHT = 2;

    public function __construct(string $nome)
    {
        parent::__construct($nome);
        $this->nome = $this->getString();
    }

    public function __toString()
    {
        return $this->nome();
    }

    public function nome(): string
    {
        return $this->nome;
    }

    public function formatted(): string
    {
        return $this->formatted;
    }
}
