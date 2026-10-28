<?php
class Carro extends Veiculo
{
    private int $quantidadePortas;

    public function __construct(string $marca, string $modelo, int $ano, int $quantidadePortas)
    {
        parent::__construct($marca, $modelo, $ano);
        $this->quantidadePortas = $quantidadePortas;
    }
}