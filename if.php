<?php 
    $usia = $_POST['usia'];

    if ($usia > 18) {
        echo "selamat datang, anda sudah dewasa!";
    } else {
        echo "Maaf, anda dibawah umur.";
    }
?>

<form method="post" action="">
    <label for="usia">Masukan usia anda :</label>
    <input type="number" name="usia" id="usia" require>
    <input type="submit" value="kirim">
</form>