<!DOCTYPE HTML>
<html>
	<head>
		<title>Contoh Inheritance</title>
	</head>
	<body>
		<h3>Luas Permukaan Dan Volume Tabung</h3>
		<form action="" method="POST">
			Masukkan Jari-jari Alas Tabung 
			<input type="text" name="r" size="5"> m | 
			Tinggi Tabung 
			<input type="text" name="t" size="5"> m | 
			<button type="submit" name="hitung">
				Hitung Luas Dan Volume
			</button>
		</form>
		<hr width="650" align="left">
		<?php
			if (isset($_POST['hitung'])){
				require_once "Tabung.php";
				$tabung = new Tabung($_POST['r'], $_POST['t']);
				$luasTabung = $tabung->getLuasTabung();
				$volumeTabung = $tabung->getVolumeTabung();
				echo "Luas Permukaan Tabung = ".(number_format($luasTabung,0,",","."))." m<sup>2</sup><br>";
				echo "Volume Tabung = ".(number_format($volumeTabung,0,",","."))." m<sup>3</sup><br>";
			}
		?>
	</body>
</html>
