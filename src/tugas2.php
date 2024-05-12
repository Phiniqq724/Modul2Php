<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<body>
    <form method="get" action="tugas2output.php">
        <div class="h-24 w-48 outline-1 outline">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="h-24 w-48 outline-1 outline">
            <label for="name">Jenis Kelamin</label>
            <select name="jenisKelamin" id="">
                <option value="Laki Laki">L</option>
                <option value="Perempuan">P</option>
            </select>
        </div>
        <div class="h-24 w-48 outline-1 outline">
            <label for="name">Agama</label>
            <input type="text" name="agama" id="name">
        </div>
        <div class="h-24 w-48 outline-1 outline">
            <label for="name">Alamat</label>
            <input type="text" name="alamat" id="name">
        </div>
        <div class="h-24 w-48 outline-1 outline">
            <label for="name">Tanggal Lahir</label>
            <input type="date" name="tanggalLahir" id="name">
        </div>
        <div class="h-24 w-48 outline-1 outline">
            <label for="name">Hobi</label>
            <input type="text" name="hobi" id="name">
        </div>
        <div class="h-24 w-48 outline-1 outline">
            <label for="name">Cita Cita</label>
            <input type="text" name="citaCita" id="name">
        </div>
        <div class="h-24 w-48 outline-1 outline">
            <label for="name">Asal Sekolah</label>
            <input type="text" name="asalSekolah" id="name">
        </div>
        <button type="submit" href="./tugas2output.php">Submit</button>
    </form>
</body>
</html>