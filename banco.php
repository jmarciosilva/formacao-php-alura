<?php
require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->deposita(500);
$primeiraConta->defineCpfTitular('123.456.789-10');
$primeiraConta->defineNomeTitular("José Marcio");
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;

