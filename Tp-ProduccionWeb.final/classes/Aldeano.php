<?php

abstract class Aldeano implements Recolectar
{
    use PuedoRecolectar;
 
    protected int $velocidadRecoleccion;
    protected float $bonus;

    public function __construct()
    {
        $this->velocidadRecoleccion = 18;
        $this->bonus = 1;
    }


}