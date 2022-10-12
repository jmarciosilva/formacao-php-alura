<?php
require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$joseMarcio = new Titular(new CPF("123.456.789-10"), "José Marcio Ferreira da Silva");
$primeiraConta = new Conta($joseMarcio);
//var_dump($primeiraConta);
$segundaConta = new Conta(new Titular(new CPF('987.654.321-10'), 'Livia Ferreira'));

$primeiraConta->deposita(500);
echo "Nome do Titular: ". $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo "CPF do Titular : " . $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo "Saldo Titular  : " . $primeiraConta->recuperaSaldo() . PHP_EOL;
echo "**********************************************". PHP_EOL; 
echo "Número de Contas Cadastradas no Sistema: " . Conta::recuperaNumeroContas();


