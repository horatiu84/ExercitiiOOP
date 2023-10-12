<?php

class Calculator {
    public $resultat;

    public function adunare(int $a, int $b){
       return $this->resultat=$a+$b;
    }
    public  function scadere(int $a,int $b){
        return $this->resultat=$a-$b;
    }
    public function inmultire(int $a,int $b){
        return $this->resultat=$a*$b;
    }
    public function impartire(int $a,int $b){
        return $this->resultat=$a/$b;
    }
}

$calculator = new Calculator();
echo $calculator->adunare(5,10);
echo '<br>';
echo $calculator->scadere(50,25);
echo '<br>';
echo $calculator->impartire(50,15);
echo '<br>';
echo $calculator->inmultire(5,25);