<?php
include 'config.php';
$nama  = $_POST["nama"];
$pangkat   = $_POST["pangkat"];
$nrp   = $_POST["nrp"];
$sekolah   = $_POST["sekolah"];
$jabatan   = $_POST["jabatan"];
$korp   = $_POST["korp"];

$query_sql = "INSERT INTO siswa (nama, pangkat, nrp, sekolah, jabatan, korp) VALUES ('$nama', '$pangkat', '$nrp', '$sekolah', '$jabatan', '$korp')";

if (mysqli_query($koneksi, $query_sql)) {
      echo "<script>alert('siswa ",$nama," berhasil ditambahkan didaftarkan')</script>";
      echo "<script>location='siswa.php';</script>";

} else {
      echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
}
?>