<?php

/**
 * CNPJ [TIPO]
 * Description
 * @copyright (c) 2021-08-30, Neylton Benjamim
 * @author neylton
 * 
 * https://imasters.com.br/codigo/versionamento-semantico-o-que-e-e-como-usar
 * https://www.correios.com.br/enviar/precisa-de-ajuda/tudo-sobre-cep
 * Exemplo: 47640-000
 * 4         7             6        4           0                      000
 * Região -> Sub-região -> Setor -> Subsetor -> Divisor de Subsetor -> identificadores de Distribuição (sufixo) 
 * 
 * Localidades codificadas por logradouros:
 * * 1 - Logradouros: Faixa de Sufixos utilizada: 000 a 899
 * * 2 - Código Especiais: Faixa de Sufixos utlizada: 900 a 959
 * * 3 - CEPs Promocionais: Faixa de Sufixos utilizada: 960 a 969
 * * 4 - Unidades dos Correios: Faixa de Sufixos utlizada: 970 a 989 e 999
 * * 5 - Caixas Postais Comunitárias: Faixa de Sufixos utilizada: 990 a 998
 * 
 */

namespace Type;

class Cep implements InterfaceType
{

    private string $cep;
    private string $formatted;

    public function __construct(string $cep)
    {
        $this->cep = preg_replace('/[^0-9]/', '', $cep);
        $this->base =  substr($this->cep, 0, 5);
        $this->branch = substr($this->cep, 4,3);
        $this->formatted = str_pad(number_format($this->base, '0', '', '.') . "-{$this->branch}",9,'0',STR_PAD_LEFT);
    }

    public function __toString()
    {
        return $this->cep();
    }

    public function cep(): string
    {
        return $this->cep;
    }

    public function formatted(): string
    {
        return $this->formatted;
    }
}
