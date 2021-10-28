<?php

abstract class Pessoa{
    public string $nome;
    public string $telefone;
    public string $email;

    public function __construct(string $nome, string $telefone, string $email)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function inserirDados(){
        $data = file_get_contents('pessoas.json');
        $json = json_decode($data);

        $array = array(
            'nome' => $this->nome,
            'telefone' => $this->telefone,
            'email' => $this->email
        );

        $json[] = $array;

        $json = json_encode($json, JSON_PRETTY_PRINT);
        file_put_contents('pessoas.json', $json);
    }
}