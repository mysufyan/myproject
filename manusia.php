<?php
class Manusia
{
	var $nama;
	var $warna;

	function tampilkan_nama(){
		return "Nama saya... <br/>";
	}
	function warna_kulit(){
		return "Warna kulit saya hitam <br/>";
	}
}
// instansiasi class manusia
$manusia = new Manusia();
echo $manusia->tampilkan_nama();
echo $manusia->warna_kulit();
?>