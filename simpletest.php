<?php
//Path to run./vendor/bin/PHPUNIT --bootstrap vendor/autoload.php FileName.php
//Butuh framework PHPUNIT
use PHPUnit\Framework\TestCase;
//class yang mau di test.
require_once "wordcount.php";
//class untuk run testing.
class simpletest extends TestCase{
    public function testCountWord(){
        //kita pakai class yang mau kita test.
        $Wc= new WordCount();
        //kita masukkan parameter 4 kata,yang harusnya dapat output4.
        $TestSentence="My name is Wulan";
        $WordCount=$Wc->countWord ($TestSentence);
        //kita assert equal,ekspektasinya harus 4,jika benar berarti wordcount berfungsi dengan baik
        $this->assertEquals(4, $WordCount);
    }
}
?>