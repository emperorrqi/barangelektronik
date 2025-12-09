<?php
$host = getenv('AIVEN_HOST');
$user = getenv('AIVEN_USER');
$pass = getenv('AIVEN_PASSWORD');
$db   = getenv('AIVEN_DATABASE');
$port = getenv('AIVEN_PORT');

$koneksi = new mysqli($host, $user, $pass, $db, $port);

if ($koneksi->connect_error) {
    die("Gagal koneksi ke database: " . $koneksi->connect_error);
}
?>
