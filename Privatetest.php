<?php
class Manusia
{
    //menentukan property dengan private
    protected $nama = "malas ngoding";    
    
    //method public
    public function tampilkan_nama(){
        return "Nama saya " .$this->nama;
    }
}
$manusiaTIF = new manusia();
echo $manusiaTIF->tampilkan_nama()."<br/>";
echo $manusiaTIF->nama;
?>