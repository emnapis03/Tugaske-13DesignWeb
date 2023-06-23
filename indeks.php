<?php
include "koneksi.php";

if (isset($_POST["submit"])) {

    if (submit($_POST) > 0) {
        echo "
        <script>
        alert('Submit Berhasil');
        document.location.href='indeks.php';
        </script>
        ";
    } else {
        "Gagal";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Hadir Tamu</title>
</head>

<body>
    <div class="isian">
        <h1>Buku Tamu</h1>
        <form action="" method="POST">
            <label for="nama">Nama</label><br>
            <input type="text" name="nama" id="nama"><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email"><br>
            <label for="pesan">Isi</label><br>
            <input type="text" name="isi" id="isi"><br><br>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>