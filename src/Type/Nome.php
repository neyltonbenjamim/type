<?php

/**
 * CNPJ [TIPO]
 * Description
 * @copyright (c) 2022-02-21, Neylton Benjamim
 * @author neylton
 */

namespace Type;

use LengthException;

class Nome extends BaseString implements InterfaceType
{

    private string $nome;
    private string $formatted;

    const MAX_LENGTH = 60;
    const MIN_LENGHT = 2;

    public function __construct(string $nome, $transform = null)
    {
        parent::__construct($nome, $transform);
        $this->isValidLength();
        $this->nome = $this->getString();
        $this->formatted = $this->ucwords();
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
    
    private function isValidLength()
    {
        if($this->length() > self::MAX_LENGTH || $this->length() < self::MIN_LENGHT){
            throw new LengthException();
        }
    }
}
