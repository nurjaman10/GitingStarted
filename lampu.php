<?php

class lampu{

	public $daya;
	public $jenis;
	public $warna;
	
	public function on(){
		return 'sedang dinyalakan';
	}	
	public function off(){
		return 'sedang dimatikan';
	}
}
$lampu = new lampu;
echo "<h1>-Lampu-";
echo "<br/>";

$lampu->daya="Daya : 25 Watt";
echo $lampu->daya;
echo "<br/>";

$lampu->jenis="Jenis : LED";
echo $lampu->jenis;
echo "<br/>";

$lampu->warna="Warna : Putih";
echo $lampu->warna;
echo "<br/>";


?>