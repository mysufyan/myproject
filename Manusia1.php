<?php
class Manusia1
{
	var $nama;
	var $warna;
	function __construct(){
		echo "ini adalah isi method construct<br/>";
	}
	function __destruct(){
		echo "ini adalah isi method destruct<br/>";
	}
	function tampilkan_nama(){
		return " Nama saya malasangoding <br/>";
	}
}
$manusia = new Manusia1();
echo $manusia->tampilkan_nama();
?>