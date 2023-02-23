<?php
$mahasiswa =[ 
["Bibit Kukuh Wicaksono", "22520013", "TI-B", "bibitkukuh00@gmail.com"],
["Budi", "12345678", "TI-C", "budi12345678@stimata.ac.id"],
["Minji", "87654321", "SI-A", "minji87654321@stimata.ac.id"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1> Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs): ?>
    <ul>
        <?php foreach ($mhs as $m) : ?>
            <li><?php echo $m; ?></li>
        <?php endforeach;?>
    </ul>
    <?php endforeach ;?>
</body>
</html>