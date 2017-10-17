<?php  
class Manusia{
	protected $nama_saya;
	function berinama($saya){
		$this->nama_saya=$saya;
	}
}

class Teman extends Manusia{
	public $nama_teman;
	function berinamateman($teman){
		$this->nama_teman=$teman;
	}
	function namasaya($saya1){
		$this->nama_saya=$saya1;
	}
	function getnamasaya(){
		return $this->nama_saya;
	}

}

$malasngoding = new teman;
$malasngoding->berinama("MALAS NGODING");
$malasngoding->berinamateman("Diki");
//echo "Nama saya: " .$malasngoding->nama_saya ."<br />";
echo "Nama teman saya: " .$malasngoding->nama_teman;
$malasngoding->namasaya("SREGREP NGODING");
echo "Nama saya sekarang : " .$malasngoding->getnamasaya();
?>