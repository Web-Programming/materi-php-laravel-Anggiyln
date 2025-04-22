<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Sederhana PHP</title>
</head>
<body>
    <h1>Aplikasi Sederhana PHP</h1>

    <!-- 1. Menghitung Umur -->
    <h2>1. Menghitung Umur</h2>
    <form method="post">
        Tanggal Lahir: <input type="date" name="tgl_lahir">
        <input type="submit" name="hitung_umur" value="Hitung Umur">
    </form>
    <?php
    if (isset($_POST['hitung_umur'])) {
        $tgl_lahir = new DateTime($_POST['tgl_lahir']);
        $sekarang = new DateTime();
        $umur = $sekarang->diff($tgl_lahir)->y;
        echo "Umur Anda: $umur tahun";
    }
    ?>

    <hr>

    <!-- 2. Konversi USD ke IDR -->
    <h2>2. Konversi USD ke IDR</h2>
    <form method="post">
        Jumlah USD: <input type="number" name="usd" step="0.01">
        <input type="submit" name="konversi_usd" value="Konversi">
    </form>
    <?php
    if (isset($_POST['konversi_usd'])) {
        $usd = $_POST['usd'];
        $kurs = 16000; // Nilai tukar bisa diubah sesuai kondisi
        $idr = $usd * $kurs;
        echo "$usd USD = " . number_format($idr, 2) . " IDR";
    }
    ?>

    <hr>

    <!-- 3. Konversi Celcius ke Fahrenheit -->
    <h2>3. Konversi Celcius ke Fahrenheit</h2>
    <form method="post">
        Suhu Celcius: <input type="number" name="celcius">
        <input type="submit" name="konversi_suhu" value="Konversi">
    </form>
    <?php
    if (isset($_POST['konversi_suhu'])) {
        $celcius = $_POST['celcius'];
        $fahrenheit = ($celcius * 9/5) + 32;
        echo "$celcius &deg;C = " . number_format($fahrenheit, 2) . " &deg;F";
    }
    ?>

    <hr>

    <!-- 4. Menghitung Luas Lingkaran -->
    <h2>4. Menghitung Luas Lingkaran</h2>
    <form method="post">
        Jari-jari (r): <input type="number" name="jari" step="0.01">
        <input type="submit" name="hitung_luas" value="Hitung">
    </form>
    <?php
    if (isset($_POST['hitung_luas'])) {
        $r = $_POST['jari'];
        $luas = pi() * pow($r, 2);
        echo "Luas lingkaran dengan jari-jari $r adalah " . number_format($luas, 2);
    }
    ?>
</body>
</html>
