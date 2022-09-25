<!DOCTYPE HTML>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="mt-5 rounded" style="width: 300px">
            <h1>Tambah Data</h1>
            <form method="post" action="proses_hanjar.php">
                <label>Nomor Kep</label>
                <input class="mb-2 w-100" type="text" name="nokep" />
                <label>Nama Sekolah</label>
                <input class="mb-2 w-100" type="text" name="namasekolah" />
                <label>Materi</label>
                <input class="mb-2 w-100" type="text" name="materi" />
                <label>File</label>
                <input class="mb-2 w-100" type="file" name="file" />
                <input class="btn btn-primary mt-2 w-100" type="submit" value="Tambah">
            </form>
        </div>
    </div>
</body>

</html>