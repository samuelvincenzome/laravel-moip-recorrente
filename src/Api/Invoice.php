<?php

namespace Moip\Recorrente\Api;

use Moip\Recorrente\Http\Request;

class Invoice extends Request
{
    public $env;
    public function __construct($url)
    {
        $this->env = $url;
    }

    /**
     * LISTAR TODAS AS FATURAS DE UMA ASSINATURA
     * @param $signature_code
     * @return array
     */
    public function find($signature_code)
    {
        return $this->get($this->env.'/assinaturas/v1/subscriptions/' . $signature_code . '/invoices');
    }

    /**
     * LISTAR DETALHES DA FATURA
     * @param $invoice_id
     * @return array
     */
    public function findDetail($invoice_id)
    {
        return $this->get($this->env.'/assinaturas/v1/invoices/' . $invoice_id);
    }

}