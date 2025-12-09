<?php
// Ambil environment variables (aman & wajib untuk Aiven / Docker)
$DB_HOST = getenv("DB_HOST");
$DB_USER = getenv("DB_USER");
$DB_PASS = getenv("DB_PASS");
$DB_NAME = getenv("DB_NAME");
$DB_PORT = getenv("DB_PORT");

// Jika ada SSL CA (untuk Aiven pemakaian wajib)
$DB_SSL_CA = getenv("DB_SSL_CA") ?: "/etc/ssl/certs/ca-certificates.crt";

// Buat koneksi MySQL dengan SSL (Aiven membutuhkan SSL REQUIRED)
$mysqli = mysqli_init();

// Aktifkan SSL untuk Aiven
mysqli_ssl_set($mysqli, NULL, NULL, $DB_SSL_CA, NULL, NULL);

// Koneksi ke database
if (!mysqli_real_connect($mysqli, $DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, (int)$DB_PORT, NULL, MYSQLI_CLIENT_SSL)) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

?>
