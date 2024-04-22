<?php

class AldeanoFranco extends Aldeano
{

    public function __construct()
    {
        parent::__construct();
        $this->bonus = 1.25;
    }

}