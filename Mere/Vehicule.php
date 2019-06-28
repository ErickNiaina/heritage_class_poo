<?php
namespace Mere;

class Vehicule {
	protected $couleur;
	protected $marque;

	public function setCouleur($couleur) {
		$this->couleur = $couleur;
	}

	public function getCouleur() {
		return $this->couleur;
	}

	public function __construct() {
		echo "Vehicule appelé\n";
	}
}