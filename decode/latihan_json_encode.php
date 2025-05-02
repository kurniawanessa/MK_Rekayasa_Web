<?php
//Json Object
$jsonobj = '{"Nama":"Essa","Umur":"26","NIM":"G.241.24.0002"}';


$obj = json_decode($jsonobj);

$arr = json_decode($jsonobj,true);

//mengakses nilai object
echo "Objek";
echo "<br>";
echo "Nama : " . $obj->Nama . "<br>";
echo "Usia : " . $obj->Umur . "<br>";
echo "Kota : " . $obj->NIM . "<br><br>";

//mengakses nilai array
echo "Array";
echo "<br>";
echo "Nama : " . $arr["Nama"] . "<br>";
echo "Umur : " . $arr["Umur"] . "<br>";
echo "NIM : " . $arr["NIM"] . "<br>";
?>
