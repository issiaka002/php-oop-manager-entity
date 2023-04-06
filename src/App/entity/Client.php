<?php

namespace APP\entity;

class Client{
    /** @var string $nom          le nom du client */
    /** @var string $prenom       le prenom du client */
    /** @var string $code         le code du client */
    /** @var string $date         la date d'ajout du client */
    private $code, $nom, $prenom, $date;



    /** @var Adresse $adres     l'adresse du client */
    private $adres;


    public function get_adres(){
        return $this->adres;
    }
    
    public function set_adres(Adresse $adres){
        $this->adres = $adres;
    }


    

    public function __construct($nom, $prenom){
        $this->nom = $nom;
        $this->prenom =$prenom;
        $this->date = new \Datetime('now');
        $this->code = (string) random_int(1111, 5555);
    }
   



}
?>