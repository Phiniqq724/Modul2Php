<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $siswa = array(
            [
                "nama" => "Ahmad Habibi",
                "kelas" => "X RPL 1",
                "jurusan" => "RPL"
            ],
            [
                "nama" => "Budi",
                "kelas" => "X TKJ 2",
                "jurusan" => "TKJ"
            ],
            [
                "nama" => "Caca",
                "kelas" => "X RPL 1",
                "jurusan" => "RPL"
            ],
            [
                "nama" => "Dedi",
                "kelas" => "X TKJ 2",
                "jurusan" => "TKJ"
            ],
            [
                "nama" => "Caca",
                "kelas" => "X RPL 1",
                "jurusan" => "RPL"
            ]
            );

        foreach ($siswa as $student) {
            echo "<div class='bg-gray'>Nama: {$student['nama']},<br> Kelas: {$student['kelas']},<br> Jurusan: {$student['jurusan']}<br></div><br>";
        }

    ?>
</body>
</html>
