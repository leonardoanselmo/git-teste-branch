<?php


class Exemplo
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function salvar(){
        $array = array('nome'=>'Teste');
        $this->db->exec('comando para gravar na base'.$array);
    }
}

$db = new \PDO("mysql:host=localhost;dbname=banco",'usuario', 'senha');
$exemplo = new Exemplo($db);