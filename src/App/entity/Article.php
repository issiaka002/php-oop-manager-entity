<?php

namespace App\entity;
class Article{
    /** @var string $libelle       le libelle de l'article */
    /** @var string $nom_produit     le nom du rpoduit  */
    /** @var string $reference        reference du produit */
    private  $nom_produit,$reference, $libelle;

    /** @var int $prix     le prix du produit */
    private $prix = null;

   //accesseurs ou getter
   public function get_libelle(){
        return $this->libelle;
   }
   public function get_nomProduit(){
        return $this->nom_produit;
   }
   public function get_reference(){
        return $this->reference;
   }
   public function get_prix(){
    return $this->prix;
    }

   //mutateurs ou setter
   public function set_libelle($libelle){
        $this->libelle = $libelle;
   }
    public function set_reference($reference){
        $this->reference = $reference;
    }
    public function set_nomProduit($nom_produit){
        $this->nom_produit = $nom_produit;
    }
    public function set_prix($prix){
        $this->prix = $prix;
    }


    //les methodes d'objet......
    public function augmenter_prix($pourcentage){
        return $this->prix = $this->prix * (1 + $pourcentage/100 );
    }

    public function diminuer_prix($pourcentage){
        return $this->prix = $this->prix * (1 - $pourcentage/100 );
    }



    private function genererReference(){
        //la fonction "explode"prend une chaine de caractere et le renvoir soud forme de tableau
        $tab = explode(" ",$this->libelle);
        $refer = '';
        foreach($tab as $elmt){
            $debut = strtoupper(substr($elmt,0,1));
            $refer = $refer.$debut;
        }
        $hazar = (string)random_int(1000, 5000);
        return $refer.$hazar;
    }

    public function attribuerReference(){
        $this->reference = $this->genererReference();
    }

    //VARIABLE DE CLASS: la valeur est la meme pour tous les objets
     private static $remise = 100; 

     public static function set_remise($remise){
        self::$remise = (int) $remise;
        
     }
     public static function get_remise(){
        return self::$remise;
     }




    
}