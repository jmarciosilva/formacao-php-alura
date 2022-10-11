<?php
class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Operação não Realizada, SALDO INDISPONÍVEL";
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Operação não Realizada, SOMENTE VALORES POSITIVOS";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Operação não Realizada, SALDO INDISPONÍVEL";
            return;
        }
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function defineNomeTitular(string $nomeTitular):void
    {

        $this->nomeTitular = $nomeTitular;

    }

    public function defineCpfTitular(string $cpfTitular):void
    {

        $this->cpfTitular = $cpfTitular;

    }
}
