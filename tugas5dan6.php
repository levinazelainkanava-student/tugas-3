<?php
echo "<h4>tugass pertama input nama dan  jenis kelamin</h4>";
echo "<br>";
$nama = "Aily"; // ubah nama di sini

if ($nama == "bagas") {
    echo "laki-laki";
} else if ($nama == "Aily") {
    echo "perempuan";
} else {
    echo "nama tidak dikenali";
}
echo "<br>";
echo "<h4>tugas kedua pengkondisian</h4>";
echo "<br>";
$nama = "andi";
$buah1 = "pisang";
$buah2 = "jeruk";

if ($nama == "andi" && $buah1 == "pisang" && $buah2 == "jeruk") {
    echo "Warna langit biru";
}
else if ($nama == "andi" && ($buah1 == "semangka" || $buah1 == "rambutan" || 
                             $buah2 == "semangka" || $buah2 == "rambutan")) {
    echo "Warna langit hitam";
}
else {
    echo "Warna langit orange ";
}

echo "<br>";
echo "<h4>tugas pengulangan maju</h4>";

echo "<br>";
for ($i =1; $i<=10; $i++){
    echo "Saya sedang belajar php";
    echo "<br>";
}
echo "<h4>pengulangan ganjil dan genap </h4>";
echo "<br>";
$input = "ganjil";
if ($input == "genap"|| $input == "ganjil");
    echo "input= " .$input;
    echo "<br>";
if ($input == "genap"){
    echo "bilangan genap 1-20 =";
    echo "<br>";
    for ($i =1; $i<=20; $i++){
        if($i % 2 == 0){
            echo $i ." ";
        }
}
}else{
    echo" Bilangan ganjil dari 1 sampai 20:";
    echo "<br>";
    for ($i =1; $i<=20; $i++){
        if ($i % 2 !=0){
            echo $i ." ";
            
            
        }
    }

}
echo "<br>";
echo "<h4>Pengulangan angka mundur";
echo "<br>";
for ($i=100; $i>=0; $i--){
    echo $i;
    echo "<br>";
}

?>
