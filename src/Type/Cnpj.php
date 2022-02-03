<?php
/**
 * CNPJ [TIPO]
 * Description
 * @copyright (c) 2021-08-30, Neylton Benjamim
 * @author neylton
 */

namespace Type;

class Cnpj implements InterfaceType
{

    private string $cnpj;
    private string $formatted;
    private string $base;
    private string $branch;
    private string $digit;

    public function __construct(string $cnpj)
    {
        $this->cnpj = preg_replace('/[^0-9]/', '', $cnpj);
        $this->base = substr($this->cnpj, 0, 8);
        $this->branch = substr($this->cnpj, 8, 4);
        $this->digit = substr($this->cnpj, 12, 2);
        $this->formatted = str_pad(number_format($this->base, '0', '', '.') . "/{$this->branch}-{$this->digit}",18,'0',STR_PAD_LEFT);
        $this->check();
    }

    private function check()
    {
        if (mb_strlen($this->cnpj) == 14) {
            return $this->validate();
        }
        
        throw new \Exception('Comprimento do CNPJ incorreto');
        
    }

    private function validate(): bool
    {
        $baseCalc = [5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
        $cnpj = str_split(substr((string) $this->cnpj, 0, 12));

        $digit = $this->digitVerification($cnpj, $baseCalc, 0);
        array_unshift($baseCalc, 6);
        array_push($cnpj, $digit);
        $this->digitVerification($cnpj, $baseCalc, 1);
        return true;
    }

    private function digitVerification($cnpj, $base, $index): int
    {
        $digit = 0;
        for ($i = 0; $i < count($base); $i++) {
            $digit += $cnpj[$i] * $base[$i];
        }
        $digit = ($digit % 11) < 2 ? 0 : 11 - ($digit % 11);
        return $digit == $this->digit[$index] ? $digit : throw new \Exception(($index+1) . '° digito incorreto');
    }

    public function __toString()
    {
        return $this->cnpj();
    }

    public function cnpj(): string
    {
        return $this->cnpj;
    }

    public function formatted(): string
    {
        return $this->formatted;
    }
}
