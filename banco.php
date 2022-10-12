<?php
require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'José Márcio');
//var_dump($primeiraConta);
$primeiraConta->deposita(500);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;


