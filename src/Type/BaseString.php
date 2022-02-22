<?php
/**
 * CNPJ [TIPO]
 * Description
 * @copyright (c) 2022-02-21, Neylton Benjamim
 * @author neylton
 */

namespace Type;

use function mb_strtolower;
use function mb_strtoupper;
use function mb_strlen;
use function mb_substr;

abstract class BaseString
{
    private string $string;

    public function __construct(string $string)
    {
        $this->string = trim($string);
        
    }

    public function getString()
    {
        return $this->string;
    }

    public function upper()
    {
        return mb_strtoupper($this->string);
    }

    public function lower()
    {
        return mb_strtolower($this->string);
    }

    public function length()
    {
        return mb_strlen($this->string);
    }
    
    public function ucwords()
    {
        $words = explode(" ", $this->string);
        $words = array_map(array($this,'ucfirst'),$words);
        return implode(' ',$words);
    }

    public function ucfirst($string = null)
    {
        $string = $string??$this->string;
        $first = mb_strtoupper(mb_substr($string, 0, 1));
        $complete = mb_strtolower(mb_substr($string, 1, mb_strlen($string)));
        
        return $first.$complete;
    }


}