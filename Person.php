<?php

class Person {
    public $nume;
    public $varsta;
    public function __construct($nume,$varsta){
    $this->nume=$nume;
    $this->varsta=$varsta;
}
    public function afiseazaDetalii() {
        return "Nume : ".$this->nume." in varsta de ".$this->varsta." ani";
    }
}

class Student extends Person {
    public $facultate;
    public function __construct($nume, $varsta,$facultate)
    {
        parent::__construct($nume, $varsta);
        $this->facultate=$facultate;
    }
    public function afiseazaDetalii() {
        return parent::afiseazaDetalii().", student(a) la facultatea de ".$this->facultate;
    }
}

$persoana1 = new Person('John',30);

echo "Ma numesc ".$persoana1->nume." si am ".$persoana1->varsta." ani!";
echo "<br/>";
echo $persoana1->afiseazaDetalii();
echo "<br/>";
$student1 = new Student('Alice',25,'Informatica');
echo "Nume : ".$student1->nume." cu varsta de ".$student1->varsta." la facultatea de ".$student1->facultate;
echo "<br/>";
echo $student1->afiseazaDetalii();

