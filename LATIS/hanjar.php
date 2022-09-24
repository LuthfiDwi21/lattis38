<DOCTYPE html>
    <html>

    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
            <div class="mt-5 rounded" style="width: 300px">
                <div class="mb-3 h4">DATA BAHAN AJAR</div>

                <style>
                table,
                th,
                td {
                    border: 2px solid black;
                }
                </style>
                <table style="width:350%; height:50%">
                    <tr>
                        <th>No</th>
                        <th>Nomor Kep</th>
                        <th>Nama Sekolah</th>
                        <th>Materi</th>
                        <th>file</th>
                    </tr>
                    <?php
                    include 'config.php';
                    $data = mysqli_query($koneksi,"select * from hanjar");
                    while($d = mysqli_fetch_array($data)){
?>
                    <tr>
                        <td><?php echo $d['id'];?></td>
                        <td><?php echo $d['nokep']; ?></td>
                        <td><?php echo $d['namasekolah']; ?></td>
                        <td><?php echo $d['materi']; ?></td>
                        <td><?php echo $d['file']; ?></td>
                    </tr>
                    <?php
                    }
?>

                </table>

                <a href="datahanjar.php" class="btn btn-success mt-2 w-100">Tambah Data</a>
    </body>