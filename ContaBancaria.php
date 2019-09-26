<?php


class ContaBancaria
{
    use Mensagens;

    private $saldo;
    private $taxa = 10;

    public function depositar($valor){
        $this->saldo += $valor;
    }

    public function __construct($valorInicial)
    {
        $this->depositar($valorInicial);
        $this->saldo -= $this->taxa;
        $this->sortear();
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function getTaxa(){
        return $this->taxa;
    }

    private function sortear()
    {
        $this->saldo += 5;
    }
}

trait Mensagens
{
    public function digaOla()
    {
        echo "Ola!!!";
    }
}

$conta = new ContaBancaria(10);
echo $conta->getSaldo();
echo $conta->getTaxa();
$conta->digaOla();