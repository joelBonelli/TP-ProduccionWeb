<?php


class Arbusto implements Recolectable
{
    use TengoComida;

    protected int $cantidadAlimento;

    public function __construct()
    {
        $this->cantidadAlimento = 125;
    }

}