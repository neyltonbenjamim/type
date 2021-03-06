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

    const UPPER = 'upper';
    const LOWER = 'lower';
    const UC_WORDS = 'ucwords';
    const UC_FIRST = 'ucfirst';

    public function __construct(string $string, $transform = null)
    {
        $this->string = trim($string);
        $this->transform($transform);
    }

    private function transform($transform)
    {
        if(method_exists($this, $transform)){
            $this->string = $this->$transform();
        }
    }

    public function getString()
    {
        return $this->string;
    }

    public function upper()
    {
        return mb_convert_case($this->string, MB_CASE_UPPER, 'UTF-8');
    }

    public function lower()
    {
        return mb_convert_case($this->string, MB_CASE_LOWER, 'UTF-8');
    }

    public function length()
    {
        return mb_strlen($this->string);
    }

    public function ucwords()
    {
        return mb_convert_case($this->string, MB_CASE_TITLE, 'UTF-8');
    }

    public function ucfirst($string = null)
    {
        $string = $string ?? $this->string;
        $first = mb_strtoupper(mb_substr($string, 0, 1));
        $complete = mb_strtolower(mb_substr($string, 1, mb_strlen($string)));

        return $first . $complete;
    }
}
