<?php 
namespace App\entity;

class Evaluation{

	/**
	 * undocumented class variable
	 *
	 * @var int      $id              identifiant
	 * @var string   $note            note de l'etudaint
	 * @var string   $coefficient     coefficient
	 * @var string   $date            date de l'evaluation
	 * 
	 **/
	private $id, $note, $coefficient, $date;


	//setter ou accesseurs
	public function set_id(){
		return $this->id
	}
	public function set_note(){
		return $this->note
	}
	public function set_coefficient(){
		return $this->coefficient
	}
	public function set_date(){
		return $this->date
	}

	//mutateur ou setters
	public function set_note($note){
		$this->note = $note
	}
	public function set_coefficient($coefficient){
		$this->coefficient = $coefficient
	}
	public function set_note($date){
		$this->date = $date
	}







}









 ?>