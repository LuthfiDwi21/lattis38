<?php
include 'config.php';
$nokep  = $_POST["nokep"];
$namasekolah   = $_POST["namasekolah"];
$materi   = $_POST["materi"];
$file   = $_POST["file"];

$query_sql = "INSERT INTO hanjar (nokep, namasekolah, materi, file) VALUES ('$nokep', '$namasekolah', '$materi', '$file')";

if (mysqli_query($koneksi, $query_sql)) {
      echo "<script>alert('Hanjar ",$materi," berhasil ditambahkan didaftarkan')</script>";
      echo "<script>location='hanjar.php';</script>";

} else {
      echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}
?>