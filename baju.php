<?php

class baju{

	public $ukuran;
	public $warna;
	public $harga;
	
	public function pakaian(){
		return 'dipakai untuk badan manusia';
	}	
}
$baju = new baju;
echo "<h1>-BAJU-";
echo "<br/>";

$baju->ukuran="ukuran : M";
echo $baju->ukuran;
echo "<br/>";

$baju->warna="Warna : Biru";
echo $baju->warna;
echo "<br/>";

$baju->harga="Harga : 50.000";
echo $baju->harga;
echo "<br/>";

?>