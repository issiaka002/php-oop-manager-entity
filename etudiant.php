<?php
namespace App\entity;

class Etudiant{
	/**
	 * undocumented class variable
	 *
	 * @var int       $id                 l'identifiant de l'etudiant
	 * @var string    $matricule          matricule de l'etudiant
	 * @var string    $nom                le nom de l'etudiant
	 * @var string    $prenom             prenom de l'etudiant
	 * @var string    $classe             la classe de l'etudiant
	 * @var string    $telephone          la classe de l'etudiant
	 * @var string    $sexe               la classe de l'etudiant
	 * @var string    $note               la note de l'etudiant
	 *  
	 *  
	 **/
	private $id, $matricule, $nom, $prenom, $classe, $telephone, $sexe, $note;


	 //accesseurs ou getter
	public function get_id(){
		return $this->id;
	}


	public function get_matricule(){
		return $this->matricule;
	}


	public function get_nom(){
		return $this->nom;
	}


	public function get_prenom(){
		return $this->prenom;
	}


	public function get_classe(){
		return $this->classe;
	}


	public function get_telephone(){
		return $this->telephone;
	}


	public function get_sexe(){
		return $this->sexe;
	}


	//mutateur ou setter

	public function set_matricule($matricule){
		$this->matricule = $matricule;
		
	}public function set_nom($nom){
		$this->nom = $nom;
		
	}public function set_prenom($prenom){
		$this->prenom = $prenom;
		
	}public function set_classe($classe){
		$this->classe = $classe;
		
	}public function set_telephone($telephone){
		$this->telephone = $telephone;
		
	}}public function set_sexe($sexe){
		$this->sexe = $sexe;
		
	}




}
?>