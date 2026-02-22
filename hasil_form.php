<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container col-md-4" style="margin-top: 100px; ">
    <div class="card shadow p-4" style="background-color: #45474B; color: white; border-radius: 40px">
        <h3 class="text-center">Reservation Form</h3>
<?php
    // echo "<h3>Reservation Form<h3><br>";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nama = ($_POST['nama']);
        $email = ($_POST['email']);
        $telepon = ($_POST['telepon']);
        $tglpesan = ($_POST['tglpesan']);
        $tgldatang = ($_POST['tgldatang']);
        $kota = ($_POST['kota']);
        $menu = ($_POST['menu']);
        $meja = ($_POST['meja']);
        $catatan = ($_POST['catatan']);

        echo "Nama            : " . $nama . "<br>";
        echo "E-mail          : " . $email . "<br>";
        echo "WA/No. Telepon  : " . $telepon . "<br>";
        echo "Tanggal Pesan   : " . $tglpesan . "<br>";
        echo "Tanggal Datang  : " . $tgldatang . "<br>";
        echo "Asal Kota       : " . $kota . "<br>";
        echo "Menu            : " . $menu . "<br>";
        echo "Meja            : " . $meja . "<br>";
        echo "Catatan         : " . $catatan . "<br>";
    } else {
        echo "Form bermasalah!";
    }
    ?>
    <br><br>
    <a href="halawal.php" class="btn btn-warning" style="width: 100px; border-radius: 20px">Kembali</a>
    </div>
    </div>
    
</body>
</html>

