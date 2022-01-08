<?php
require_once("Lingkaran.php");

class Tabung extends Lingkaran{
	private $t;
	
	public function __construct($inJari2, $inTinggi){
		parent::setJari2($inJari2);
		$this->t = $inTinggi;
	}
	public function getLuasTabung(){
		$luasLingkaran = parent::getLuasLingkaran();
		$kelilingLingkaran = parent::getKelilingLingkaran();
		$luas = (2 * $luasLingkaran) + ($kelilingLingkaran * $this->t);
		return $luas;		
	}
	public function getVolumeTabung(){
		$luasLingkaran = parent::getLuasLingkaran();
		$keliling = $luasLingkaran * $this->t;
		return $keliling;
	}
}

