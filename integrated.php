<!DOCTYPE html>
<html>
<head>
    <title>Pengecek Angka Genap</title>
</head>
<body>
    <form method="post" action="">
        <label for="number">Masukkan angka Anda:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Kirim">
    </form>

    <?php
    // Mengecek apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mendapatkan angka dari input form
        $number = $_POST['number'];

        // Fungsi untuk memeriksa apakah angka genap
        function cekGenap($angka) {
            return $angka % 2 == 0;
        }

        // Mengecek apakah angka genap atau ganjil
        if (cekGenap($number)) {
            echo "Angka $number adalah genap!<br>";
        } else {
            echo "Angka $number adalah ganjil!<br>";
        }
        
        // Menampilkan daftar angka genap hingga angka yang dimasukkan
        echo "Daftar angka genap hingga $number:<br>";
        for ($i = 1; $i <= $number; $i++) {
            if (cekGenap($i)) {
                echo "$i ";
            }
        }
    }
    ?>
</body>
</html>
