<?php

namespace App;

class Paiment
{
    /**
     * Create a new class instance.
     */
    private float $montant;
    private float $commission;
    public function __construct(float $montant,float $commission)
    {
        $this->$montant=$montant;
        $this->$commission=$commission;
        //return $th
     
    }
    public function montantNet(): float{
$result= $this->montant - $this->commission;
      if($result  ){
return $result;
};
    }

}
