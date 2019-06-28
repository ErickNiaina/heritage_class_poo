<?php
	namespace Fille;
	use Mere\Vehicule;

	class Quatre4 extends Vehicule {
		private $toutTerrain;

		public function setToutTerrain($tt) {
			$this->toutTerrain = $tt;
		}

		public function getToutTerrain() {
			return $this->toutTerrain;
		}
	}