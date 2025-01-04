<!DOCTYPE html>
<html>
<head>
    <title>Diskon Berdasarkan Usia</title>
    <link rel="stylesheet" href="style.css"> 
<body>
    <div class="container">
        <form method="post" action="">
            <label for="usia">Masukkan usia Anda:</label>
            <input type="number" name="usia" id="usia" required>
            <br>
            <label for="harga">Masukkan harga barang:</label>
            <input type="number" name="harga" id="harga" required>
            <br>
            <input type="submit" value="Hitung Diskon">
        </form>

        <?php
        // Fungsi untuk menentukan diskon berdasarkan usia
        function hitungDiskon($usia) {
            if ($usia > 60) {
                return 20; // Diskon 20% untuk usia di atas 60
            } elseif ($usia >= 30 && $usia <= 60) {
                return 10; // Diskon 10% untuk usia antara 30-60
            } else {
                return 5; // Diskon 5% untuk usia di bawah 30
            }
        }

        // Fungsi untuk menghitung harga setelah diskon
        function hitungHargaSetelahDiskon($harga, $diskon) {
            return $harga - ($harga * ($diskon / 100));
        }

        // Cek apakah form sudah disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil data usia dan harga barang dari form
            $usia = $_POST['usia'];
            $harga = $_POST['harga'];

            // Validasi input
            if ($usia < 0 || $harga < 0) {
                echo "Usia dan harga tidak boleh negatif.";
            } else {
                // Hitung diskon berdasarkan usia
                $diskon = hitungDiskon($usia);

                // Hitung harga setelah diskon
                $hargaSetelahDiskon = hitungHargaSetelahDiskon($harga, $diskon);

                // Tampilkan hasil
                echo "Usia Anda: $usia tahun<br>";
                echo "Diskon yang Anda dapatkan: $diskon%<br>";
                echo "Harga setelah diskon: $hargaSetelahDiskon<br>";
            }
        }
        ?>
    </div>
</body>
</html>
