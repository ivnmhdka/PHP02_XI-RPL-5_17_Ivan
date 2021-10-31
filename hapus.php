<?php
include 'koneksi.php';
$koneksi->query("DELETE FROM tabel_buku WHERE id_buku='$_GET[id]'");
echo "<script>Perhatian('Buku Telah Dihapus');</script>";
echo "<script>location='index.php';</script>";
