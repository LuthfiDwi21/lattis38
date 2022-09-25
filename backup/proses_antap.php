<?php
include 'config.php';
$nama  = $_POST["nama"];
$pangkat   = $_POST["pangkat"];
$nrp   = $_POST["nrp"];
$korp   = $_POST["korp"];
$jabatan   = $_POST["jabatan"];

$query_sql = "INSERT INTO antap (nama, pangkat, nrp, korp, jabatan) VALUES ('$nama', '$pangkat', '$nrp', '$korp', '$jabatan')";

if (mysqli_query($koneksi, $query_sql)) {
      echo "<script>alert('antap ",$nama," berhasil ditambahkan didaftarkan')</script>";
      echo "<script>location='antap.php';</script>";

} else {
      echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}
?>