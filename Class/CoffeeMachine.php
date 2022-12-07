<?php

namespace Class;

class CoffeeMachine
{
    protected int $cups;

    public function __construct (int $cups)
    {
        $this->cups = $cups;
    }

    protected function select(string $selection){
        $result = match ($selection){
            'espresso' =>$this->makeEspresso(),
            default => 'erreur'
        };
    }

    protected function makeEspresso()
    {
        for ($i=0; $i < $this->cups; $i++) { 
            echo ' Café Espresso n° '.$i.'servi !';
        }
    }
} 