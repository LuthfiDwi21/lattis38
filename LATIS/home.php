<?php
include 'config.php';
?>
<?php 
	session_start();

	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}
 
	?>
<html>

<head>
    <title>SKADIK 501</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>

    <div class="container" align="center">
        <br><br><br><br>

        <div class="mt-5 rounded" style="width: 300px">
            <div class="mb-3 h4">Selamat Datang</div>




            <a href="antap.php" class="btn btn-info mt-2 w-100">Data Antap</a><br>
            <a href="siswa.php" class="btn btn-success mt-3 w-100">Data Siswa</a>
            <a href="hanjar.php" class="btn btn-primary mt-3 w-100">Data Bahan Ajar</a><br><br>
            <a href="logout.php">LOGOUT</a>

</body>

</html>