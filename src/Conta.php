<?php
class Conta
{
   public string $cpfTitular;
   public string $nomeTitular;
   public float $saldo;
   
   public function saca(float $valorASacar):void
   {
        if($valorASacar > $this->saldo){
            echo "Operação não Realizada, SALDO INDISPONÍVEL";
            return;
        }
        $this->saldo -= $valorASacar;
   }

   public function deposita(float $valorADepositar):void
   {
        if($valorADepositar < 0){
            echo "Operação não Realizada, SOMENTE VALORES POSITIVOS";
            return;
        }
        $this->saldo += $valorADepositar;
   }



}