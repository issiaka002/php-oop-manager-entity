<?php 


class Enfant extends Papa{


	public $fonction = "developpeur";
	
	public function __construct($nomFamille, $nationalite, $origine, $fonction){
		//"parent::" fait reference au superclass
		//le constructeur de la classe Enfant herite du constructeur de la classe Papa
		parent::__construct($nomFamille, $nationalite, $origine)
		$this->fonction = $fonction;

	}


}