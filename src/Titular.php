<?php
class Titular
{
    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCPF(): string
    {
        return $this->cpf;
    }

    private function validaNomeTitular(string $nomeTitular):void
    {
        if(strlen($nomeTitular) < 5){
            echo "O Nome Necessita ter pelo menos 5 Caracteres!";
            exit();
        }
    }
}