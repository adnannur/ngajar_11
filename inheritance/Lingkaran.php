<?php
class Lingkaran{
	
	private $r;
	
	protected function setJari2($inJari2){
		$this->r = $inJari2;
	}
	public function getLuasLingkaran(){
		return pi() * pow($this->r, 2);
	}
	public function getKelilingLingkaran(){
		return 2 * pi() * $this->r;
	}
}

