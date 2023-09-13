<?php 
$mahasiswa = [
    ["ARYA DWI ANGGARA", "9987", "XII RPL 1", "aryaanggara12@gmail.com"],
    ["MONKEY D LUFFY", "9980", "XII RPL 1", "gomugomu5@gmail.com"],
    ["VINSMOKE SANJI", "9990", "XII RPL 1", "namisanji66@gmail.com"],
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
    <h1>
        <!-- <ul>
        <li>arya</li>
        <li>73482</li>
        <li>RPL 1</li>
        <li>aryaanggara18@gmail.com</li>
    </ul>-->

        <!-- <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <li><?= $mhs; ?></li>
        <?php endforeach; ?>
        </ul>-->
        <?php foreach ($mahasiswa as $mhs) : ?>
            <ul>
                <li>nama : <?= $mhs[0] ?></li>
                <li>nrp : <?= $mhs[1] ?></li>
                <li>jurusan : <?= $mhs[2] ?></li>
                <li>email : <?= $mhs[3] ?></li>
            </ul>
        <?php endforeach; ?>

                
    </h1>
</body>
</html>