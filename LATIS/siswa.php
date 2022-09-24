<?php
include 'config.php';
?>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="mt-5 rounded" style="width: 300px">
            <div class="mb-3 h4">DATA SISWA SKADIK 501</div>

            <style>
            table,
            th,
            td {
                border: 2px solid black;
            }
            </style>
            <table style="width:250%">
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Pangkat</th>
                    <th>NRP</th>
                    <th>Sekolah</th>
                    <th>Jabatan</th>
                    <th>Korp</th>
                    <th>Lanjut</th>

                </tr>
                <?php
                    include 'config.php';
                    $data = mysqli_query($koneksi,"select * from siswa");
                    while($d = mysqli_fetch_array($data)){
?>
                <tr>
                    <td><?php echo $d['id'];?></td>
                    <td><?php echo $d['foto'];?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['pangkat']; ?></td>
                    <td><?php echo $d['nrp']; ?></td>
                    <td><?php echo $d['sekolah']; ?></td>
                    <td><?php echo $d['jabatan']; ?></td>
                    <td><?php echo $d['korp']; ?></td>
                    <td><a href="ketsiswa1.php">Lebih Lengkap</a></td>
                </tr>

                <?php
                    }
?>


            </table>
            <a href="datasiswa.php" class="btn btn-success mt-2 w-100">Tambah Data</a>

</body>