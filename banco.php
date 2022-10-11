<?php
require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->deposita(500);

echo $primeiraConta->recuperaSaldo();
