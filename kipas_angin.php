<?php

class kipas_angin{

	public $bentuk;
	public $ukuran;
	public $warna;
	
	public function on(){
		return 'sedang dinyalakan';
	}	
	public function off(){
		return 'sedang dimatikan';
	}
}
$kipas_angin = new kipas_angin();
echo "<h1>-KIPAS ANGIN-";
echo "<br/>";

$kipas_angin->Bentuk="Bentuk : Bulat";
echo $kipas_angin->Bentuk;
echo "<br/>";

$kipas_angin->Ukuran="Ukuran : 30 Cm";
echo $kipas_angin->Ukuran;
echo "<br/>";

$kipas_angin->Warna="Warna : Biru";
echo $kipas_angin->Warna;
echo "<br/>";

?>