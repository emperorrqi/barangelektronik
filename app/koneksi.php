<?php
require_once "config.php";

// =============================
// KONEKSI MENGGUNAKAN SSL AIVEN
// =============================
$mysqli = mysqli_init();

// Aiven mewajibkan SSL, tetapi tanpa sertifikat lokal → NON-VERIFIED SSL
mysqli_options($mysqli, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, false);

// Set SSL (tanpa sertifikat, Aiven menerima)
$mysqli->ssl_set(NULL, NULL, NULL, NULL, NULL);

// Melakukan koneksi
if (!$mysqli->real_connect(
    $DB_HOST,
    $DB_USER,
    $DB_PASS,
    $DB_NAME,
    $DB_PORT,
    NULL,
    MYSQLI_CLIENT_SSL
)) {
    die("Gagal koneksi ke database Aiven: " . mysqli_connect_error());
}

?>
