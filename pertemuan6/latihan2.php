<?php
// $mahasiswa = [["Arya Anggara", "01074839", "aryaanggara18@gmail.com", "DKV"],
// ["Anggara Arya", "1893480", "anggaraarya67@gmail.com", "TI"]
// ];

// Array Assosiative
// key-nya adalah string yang kita buat sendiri, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "Freya Jayawardana",
    "nrp" => "1093029083",
    "email" => "freyachan67@gmail.com",
    "jurusan" => "Sastra Jepang",
    "gambar" => "frey.jpg"
    ],
    [
    "nama" => "Azizi Asadel",
    "nrp" => "1039478482",
    "email" => "zeeee9087@gmail.com",
    "jurusan" => "Teknik Kimia",
    "gambar" => "zee.jpg"
    ],
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>