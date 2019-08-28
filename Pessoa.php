<?php

class Pessoa
{
    public $nome;
    public $sexo;
    public $raca;
    public $idade;

    public function __construct($nome, $raca, $idade)
    {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->idade = $idade;
    }
    public function digaOla($tio){
        if($this->sexo == "masculino") {
            echo "Olá!!! tio {$tio}. aqui é o {$this->nome}"."<br/>";
        } else {
            echo "Olá!!! tio {$tio}. aqui é a {$this->nome}"."<br/>";
        }
    }
}

class Homem extends Pessoa
{
    public $sexo = "masculino";

    public function __construct($nome, $raca, $idade)
    {
        parent::__construct(strtoupper($nome), $raca, $idade);
    }

}

class Mulher extends Pessoa
{
    public $sexo = "feminino";

    public function __construct($nome, $raca, $idade)
    {
        parent::__construct(strtolower($nome), $raca, $idade);
    }
}

$joao = new Homem("Leonardo Anselmo", "branco", 18);

$maria = new Mulher("Maria", "negra", 21);

#echo $joao->sexo;
#echo $maria->sexo;

echo $joao->digaOla("Sérgio");
echo $maria->digaOla("Marta");
