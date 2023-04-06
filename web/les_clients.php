<?php
require_once '..\src\App\entity\Client.php';
require_once '..\src\App\entity\Adresse.php';
use App\entity\Client;
use App\entity\Adresse;

$client1 = new Client('sidibe', 'issiaka');



$adressClient1 =  new Adresse();
$adressClient1->set_ville('adzope');
$adressClient1->set_rue('colombie dernier');
$adressClient1->set_codePostal('65822');


$client1->set_adres($adressClient1);

var_dump($client1);
echo ($client1->get_adres()->get_ville());

