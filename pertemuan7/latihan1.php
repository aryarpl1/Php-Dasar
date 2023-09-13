<?php
// $_GET
$mahasiswa = [
    [
    "nama" => "Freya Jayawardana",
    "nrp" => "1093029083",
    "email" => "freyachan67@gmail.com",
    "jurusan" => "Sastra Jepang",
    "gambar" => "fre.jpg"
    ],
    [
    "nama" => "Azizi Asadel",
    "nrp" => "1039478482",
    "email" => "zeeee9087@gmail.com",
    "jurusan" => "Teknik Kimia",
    "gambar" => "ze.jpg"
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
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
           <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
<?php endforeach; ?>
</ul>
</body>
</html>