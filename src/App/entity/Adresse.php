<?php
namespace App\entity;

class Adresse{
    /** @var string $ville       Ville du client */
    /** @var string $rue       rue du client */
    /** @var string $code_postal       Code postal du client */
    private $ville, $rue, $code_postal;

     //accesseurs ou getter
    public function get_ville(){
        return $this->ville;
    }
    public function get_rue(){
        return $this->rue;
    }
    public function get_codePostal(){
        return $this->code_postal;
    }

    //mutateurs ou setter
    public function set_ville($ville){
        $this->ville = $ville;
    }
    public function set_rue($rue){
        $this->rue = $rue;
    }
    public function set_codePostal($code_postal){
        $this->code_postal = $code_postal;
    }


}