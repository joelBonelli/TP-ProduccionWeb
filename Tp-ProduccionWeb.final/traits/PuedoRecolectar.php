<?php

trait PuedoRecolectar
{

    public function recolectar(Recolectable $a)
    {
        if ($this->getBonus() > 1) {
            $velocidad = $this->velocidadRecoleccion * ($this->getBonus()); 
            $tiempo = ceil($a->getAlimento() / $velocidad);
            echo 'Recolecté todo el alimento en ' . $tiempo;
            
        } else {
            $velocidad = $this->velocidadRecoleccion;
            $tiempo = ceil($a->getAlimento() / $velocidad);
            echo 'Recolecté todo el alimento en ' . $tiempo;
        }
    }

    public function getBonus()
    {
          return $this->bonus;
    }



}
