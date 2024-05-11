<?php 
    $nama = $_GET["name"];
    $jenisKelamin = $_GET["jenisKelamin"];
    $agama = $_GET["agama"];
    $alamat = $_GET["alamat"];
    $hobi = $_GET["hobi"];
    $citaCita = $_GET["citaCita"];
    $asalSekolah = $_GET["asalSekolah"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body>
    <div>
        <h1>Nama : <?php echo $nama; ?></h1>
        <h1>Jenis Kelamin : <?php echo $jenisKelamin; ?></h1>
        <h1>Agama : <?php echo $agama; ?></h1>
        <h1>Alamat : <?php echo $alamat; ?></h1>
        <h1>Hobi : <?php echo $hobi; ?></h1>
        <h1>Cita Cita : <?php echo $citaCita; ?></h1>
        <h1>Alamat Sekolah : <?php echo $asalSekolah; ?></h1>
    </div>
</body>
</html>