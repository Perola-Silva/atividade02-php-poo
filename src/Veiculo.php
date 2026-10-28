<?php
abstract class Veiculo
{
    private string $marca;
    private string $modelo;
    private int $ano;

    // construtor
    public function __construct(string $marca, string $modelo, int $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->setAno($ano);
    }


    // metodos
    abstract public function calcularDiaria(): float;


    // getters
    public function getMarca(): string
    {
        return $this->marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getAno(): int
    {
        return $this->ano;
    }


    // setters
    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function setAno(int $ano): void
    {
        if($ano > 0){
            $this->ano = $ano;
        }
    }
}