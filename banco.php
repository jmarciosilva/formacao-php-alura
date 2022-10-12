<?php
require_once 'src/Conta.php';
require_once 'src/Titular.php';

$primeiraConta = new Conta(new Titular('123.456.789-10', 'José Márcio'));
//var_dump($primeiraConta);
$segundaConta = new Conta(new Titular('987.654.321-10', 'Livia Ferreira'));

$primeiraConta->deposita(500);
echo "Nome do Titular: ". $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo "CPF do Titular : " . $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo "Saldo Titular  : " . $primeiraConta->recuperaSaldo() . PHP_EOL;
echo "**********************************************". PHP_EOL; 
echo "Número de Contas Cadastradas no Sistema: " . Conta::recuperaNumeroContas();


