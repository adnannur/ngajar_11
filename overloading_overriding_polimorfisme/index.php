<?php
	class Manusia{
		protected $nama;
		public function __construct($inNama){
			$this->nama = $inNama;
		}
		public function viewPekerjaan(){
			echo $this->nama." memiliki pekerjaan : pengangguran<br>";
		}
	}
	class Mahasiswa extends Manusia{
		public function __construct($inNama){
			parent::__construct($inNama);
		}
		public function viewPekerjaan(){
			echo $this->nama." memiliki pekerjaan : belajar<br>";
		}
	}
	class Dosen extends Manusia{
		public function __construct($inNama){
			parent::__construct($inNama);
		}
		public function viewPekerjaan(){
			echo $this->nama." memiliki pekerjaan : mengajar<br>";
		}
	}
	
	$obj1 = new Manusia("Abdullah");
	$obj1->viewPekerjaan();	
	echo "<br>";
	$obj2 = new Mahasiswa("Reski");
	$obj2->viewPekerjaan();	
	echo "<br>";
	$obj3 = new Dosen("Sri");
	$obj3->viewPekerjaan();	
?>

