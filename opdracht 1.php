<?php

class Klant
{

    public $naamKlant;
    public $adresKlant;
    public $mailKlant;
    public $laatsteAankoop;
}

class auto{
    public $autoEigenaar;
    public $autoMerk;
    public $autoModel;
    public $autokleur;
    public $kenteken;
    public $laatsteAPK;
}

$persoon1 = new klant();
$persoon1->naamKlant = 'Henk';
$persoon1->adresKlant = 'Binnenhof 37, Rhoon, 3162WE';
$persoon1->mailKlant = 'henkvanveggel@gmail.com';
$persoon1->laatsteAankoop = 'Fiat Multipla';

$auto1 = new auto();
$auto1->autoEigenaar = 'Henk van Veggel';
$auto1->autoMerk ='fiat';
$auto1->autoModel = 'Multipla';
$auto1->autokleur = 'bruin';
$auto1->kenteken = '71-ZXK-6';
$auto1->laatsteAPK = '09-11-2018';


var_dump($persoon1);
var_dump($auto1);


class Clant{
    public $naam;
    public $leeftijd;
    public $klantnummer;
}

