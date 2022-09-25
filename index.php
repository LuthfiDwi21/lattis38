    <html>

    <head>
        <title>WELCOME</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>

    <body>
        <div class="container" style="margin-top : 200px" align="center">
            <div class="mt-5 rounded" style="width: 700px">
                <div class="mb-3 h3">Selamat Datang di SKADIK 501</div>

                <?php 
                    include("config.php");
                                                                                                                                                                                                        session_start();
                if(isset($_SESSION['username'])) {
                    $username   = $_SESSION['username'];
                    $loop   = mysqli_query($koneksi, 'SELECT * FROM akun');
                    $data = mysqli_fetch_array($loop);
                    echo "Selamat Datang <b>",$data['name'],"</b><br/>";
                    echo "<hr/><label class='h3'>Data User Account</label>";
            ?>
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                    $no     = 1;
                    $loop   = mysqli_query($koneksi, 'SELECT * FROM akun');
                    while ($data = mysqli_fetch_array($loop)){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                        <td><?php echo $data['name'] ?></td>
                        <td><?php echo $data['username'] ?></td>
                        <td><?php echo $data['email'] ?></td>
                        <td><?php echo $data['role'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="editing.php?id=<?php echo $data['id']; ?>">Edit</a>
                            <a class="btn btn-sm btn-primary"
                                href="proses_delete.php?id=<?php echo $data['id']; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>

                </table>
                <?php
                echo "<a class='btn btn-warning mt-3 w-100' href='logout.php'>Logout</a>";
            } else {
                echo "<a class='btn btn-primary w-100' href='login.php'>Login</a>";
            }
            ?>

            </div>
        </div>
    </body>

    </html>