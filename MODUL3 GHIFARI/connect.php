<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->
<?php
$host = 'localhost';
$database = 'modul3_jurnal';
$username = 'root';
$password = '';

$connect = mysqli_connect($host, $username, $password, $database);
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if (!$connect) {
    die('Koneksi ke database gagal: ' . mysqli_connect_error());
}
?>


?>