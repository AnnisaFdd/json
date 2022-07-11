<?php

//manual JSON
// $a = [
//     [
//         "nama" => "sandika galih",
//         "nim" => "24060117120067",
//         "email" => "sandikagalih@gmail.com"
//     ],
//     [
//         "nama" => "sandika galih",
//         "nim" => "24060117120067",
//         "email" => "sandikagalih@gmail.com"
//     ]
// ];

//Ambil dari database
$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$json = json_encode($mahasiswa);
echo $json;
// var_dump($a);
// var_dump($a);
?>