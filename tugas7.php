<?php 
$nama = array ("Andri","Joko","Sukma","Rina","Sari");
foreach ($nama as $val){
    echo "$val";
    echo "<br>";
}
echo "<br>";
$nilai = array (80,65,90,45,70,100,40,35,20,44,78);
 
foreach ($nilai as $val){
    if ($val > 67 ) {
        echo $val . "<br>";
    }
}   
?> 