<?php

abstract class Animal {
    abstract public function sunet();
}

class Caine extends Animal {
    public function sunet()
    {
        return 'Ham';
    }
}

class Pisica extends Animal {
    public function sunet()
    {
        return "Miau";
    }
}

$caine1 = new Caine();
echo $caine1->sunet();
echo '<br>';
$pisica1 = new Pisica();
echo $pisica1->sunet();