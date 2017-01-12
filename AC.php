<?php

class AC{

	public $merk;
	public $bentuk;
	public $warna;
	
	public function on(){
		return 'sedang dinyalakan';
	}	
	public function off(){
		return 'sedang dimatikan';
	}
}
$AC = new AC();
echo "<h1>-AC RUANGAN-";
echo "<br/>";

$AC->Merk="Merk : Toshiba";
echo $AC->Merk;
echo "<br/>";

$AC->Bentuk="Bentuk : Persegi Panjang";
echo $AC->Bentuk;
echo "<br/>";

$AC->Warna="Warna : Putih";
echo $AC->Warna;
echo "<br/>";

?>