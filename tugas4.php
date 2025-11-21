<?php

$namaBuah = array ( "Apel","Mangga","Nanas","Rambutan");

    echo "<h2>1.Daftar Nama Buah</h2>";
    echo "<ul>";
 foreach ($namaBuah as $namaBuah){
    echo "<li>".$namaBuah."</li>";
    echo "<br>";

}
echo "</ul>";
    echo "<h2>2.Tugas Dua informasi variabel</h2>";
    echo "<ul>";
//1. variabel string ( Nama)
$Nama =" Nama: Levina Zela Inka Nava";
         echo $Nama;
         echo"<br>";
 //2.variabel integer (Umur)
    $umur =" Umur: 18";
         echo $umur. "Tahun";
         echo"<br>";    
//3.variabel float (Tinggi Badan)
    $Tinggi_Badan = "Tinggi: 149";
         echo $Tinggi_Badan. "cm";
         echo"<br>";
 //4.variabel boolean (Sarapan)
    $Sudah_Sarapan ="Sarapan: True";
         echo $Sudah_Sarapan;
         echo "</ul>";
//5.variabel Array (Hobi)
    $Hobi = array("Membaca","Make a Fake Skenario","Maratoon Drachin");
    echo "<ul>";
 echo "<h4> Hobi</h4>";
    foreach($Hobi as $Hobi){
         echo "<li>".$Hobi."</li>";
         echo "<br>";
    }

    echo "< ul>";
    


?>