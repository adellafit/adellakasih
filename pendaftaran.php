<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {

    $nama       = isset($_POST['author']) ? $_POST['author'] : "";
    $no_rm      = isset($_POST['no_rm']) ? $_POST['no_rm'] : "";
    $poliklinik = isset($_POST['poliklinik']) ? $_POST['poliklinik'] : "";
    $pembayaran = isset($_POST['pembayaran']) ? $_POST['pembayaran'] : "";

    if ($nama == "" || $no_rm == "" || $poliklinik == "" || $pembayaran == "") {
        echo "<h3 style='color:red;'>Semua field harus diisi.</h3>";
        echo "<a href='index.html'>Kembali</a>";
        exit();
    }

    echo "<h2>Pendaftaran Berhasil!</h2>";
    echo "<p><strong>Nama:</strong> " . htmlspecialchars($nama) . "</p>";
    echo "<p><strong>No. RM / KTP:</strong> " . htmlspecialchars($no_rm) . "</p>";
    echo "<p><strong>Poliklinik:</strong> " . htmlspecialchars($poliklinik) . "</p>";
    echo "<p><strong>Metode Pembayaran:</strong> " . htmlspecialchars($pembayaran) . "</p>";
    echo "<br><a href='index.html'>Kembali</a>";
    exit();

} else {
    echo "<h3>Akses tidak valid.</h3>";
    echo "<a href='index.html'>Kembali</a>";
}
?>
