<?php

class gelas{

	public $ukuran;
	public $type;
	public $warna;
	
	public function minum(){
		return 'digunakan untuk minum';
	}	
}
$gelas = new gelas;
echo "<h1>-GELAS-";
echo "<br/>";

$gelas->ukuran="Ukuran : 6 inc";
echo $gelas->ukuran;
echo "<br/>";

$gelas->type="Type : Kaca";
echo $gelas->type;
echo "<br/>";

$gelas->warna="Warna : Putih";
echo $gelas->warna;
echo "<br/>";


?>