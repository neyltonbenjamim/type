<?php
/**
 * CNPJ [TIPO]
 * Description
 * @copyright (c) 2021-08-30, Neylton Benjamim
 * @author neylton
 */

namespace Type;

class Cpf
{

    private string $cpf;
    private string $formatted;
    private string $base;
    private string $digit;

    public function __construct(string $cpf)
    {
        $this->cpf = preg_replace('/[^0-9]/', '', $cpf);
        $this->base = substr($this->cpf, 0, 9);
        $this->digit = substr($this->cpf, 9,2);
        $this->formatted = str_pad(number_format($this->base, '0', '', '.') . "-{$this->digit}",14,'0',STR_PAD_LEFT);
        var_dump($this);
        $this->check();
    }

    private function check()
    {
        if (mb_strlen($this->cpf) == 11) {
            return $this->validate();
        }
        throw new \Exception('Comprimento do CPF incorreto');
    }

    private function validate(): bool
    {
        $baseCalc = [10, 9, 8, 7, 6, 5, 4, 3, 2];
        $cpf = str_split(substr((string) $this->cpf, 0, 12));

        $digit = $this->digitVerification($cpf, $baseCalc, 0);
        array_unshift($baseCalc, 11);
        array_push($cpf, $digit);
        $this->digitVerification($cpf, $baseCalc, 1);
        return true;
    }

    private function digitVerification($cpf, $base, $index): int
    {
        $digit = 0;
        for ($i = 0; $i < count($base); $i++) {
            $digit += $cpf[$i] * $base[$i];
        }
        $digit = ($digit % 11) < 2 ? 0 : 11 - ($digit % 11);
        echo $digit;
        return $digit == $this->digit[$index] ? $digit : throw new \Exception(($index+1) . '° digito incorreto');
    }

    public function __toString()
    {
        return $this->cpf();
    }

    public function cpf(): string
    {
        return $this->cpf;
    }

    public function formatted(): string
    {
        return $this->formatted;
    }
}
