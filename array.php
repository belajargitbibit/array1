<?php
$mahasiswa = ["Bibit Kukuh Wicaksono", "22520013", "TI-B", "bibitkukuh00@gmail.com"];
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
    <ul>
        <?php foreach($mahasiswa as $mhs): ?>
            <li>
                <?php echo $mhs;
                ?>
            </li>
            <?php endforeach ?>
    </ul>
</body>
</html>