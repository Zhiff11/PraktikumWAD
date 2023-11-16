<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 

// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
$conn = mysqli_connect("localhost", "root", "", "modul3_jurnal");

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET["id"];
$sql = "DELETE FROM showroom_mobil WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php';</script>";
}

    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php';</script>";

    // (4) Buatkan perkondisi jika eksekusi query berhasil
} else {
        echo "<script>alert('Data gagal dihapus: " . mysqli_error($conn) . "'); window.location.href='index.php';</script>";
    }

// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($conn);
?>