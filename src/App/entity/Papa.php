<?php

class Papa{
	public $nomFamille = 'koffi';
	public $nationalite = 'senegalais';
	public $origine = "village gourou";


	public function __construct($nomFamille, $nationalite, $origine){
		echo "Ici c'est la famille" . $nomFamille . "de nationalite " . $nationalite . " et originaire de " . $origine;


		// echo <<<  >>>;
	}


	public function gene(){
		return "AABBAA";
	}
}