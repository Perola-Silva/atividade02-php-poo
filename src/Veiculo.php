<?php
abstract class Veiculo
{
    private string $marca;
    private string $modelo;
    private int $ano;

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
        $this->ano = $ano;
    }
}