<!DOCTYPE HTML>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="container" align="center">
        <div class="mt-5 rounded" style="width: 300px">
            <h1>Tambah Data</h1>
            <form method="post" action="proses_siswa.php">
                <label>Nama</label>
                <input class="mb-2 w-100" type="text" name="nama" />
                <label>Pangkat</label>
                <input class="mb-2 w-100" type="text" name="pangkat" />
                <label>NRP</label>
                <input class="mb-2 w-100" type="text" name="nrp" />
                <label>Sekolah</label>
                <input class="mb-2 w-100" type="text" name="sekolah" />
                <label>Jabatan</label>
                <input class="mb-2 w-100" type="text" name="jabatan" />
                <label>KORP</label>
                <input class="mb-2 w-100" type="text" name="korp" />
                <label>FOTO</label>
                <input class="mb-2 w-100" type="file" name="foto" />

                <input class="btn btn-primary mt-2 w-100" type="submit" value="Tambah">

            </form>
        </div>
    </div>
</body>

</html>