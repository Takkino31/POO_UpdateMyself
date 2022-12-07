<?php

namespace Class;

class PremiumCoffeeMachine extends CoffeeMachine
{
    public function __construct ()
    {
        var_dump('Mon café premium ersonnalisé <3');
        parent::__construct(2);
    }

    public function select(string $selection){

        $result = match ($selection){
            'espresso' => $this->makeEspresso(),
            'vanilla' => $this->makeVanilla(),
            default => 'erreur'
        };
        return $result;
    }

    protected function makeVanilla()
    {
        for ($i=0; $i < $this->cups; $i++) { 
            echo ' Café Vanille n° '.$i.' servi !';
        }
    }
}