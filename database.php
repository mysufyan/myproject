<?php  
class database{
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "sregep ngoding";
	var $con;

	function __construct(){
		$this->con = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);

		//Check Connection
		if (mysqli_connect_errno()){
			echo "Failed to connection to MySQL: " .mysqli_connect_error();
		}else
			echo "Koneksi berhasil";
	}
	function tampil_data(){
		$data = mysql_query($this->con,"select*from user");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

}

//$database = new database;

?>