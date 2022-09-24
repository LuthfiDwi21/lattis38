<html>

<head>
    <title>Biodata</title>
</head>

<body background=”1575887.jpg”>
    <center>
        <h1>
            <font style=”background-color:black; color:white”>Masukkan Data Biodata Anda
        </h1>
    </center>
    </font>
</body>
<form action=”Tugas_.php” method=”POST” NAME=”input” enctype=”multipart/form-data”>
    <table>
        <tr>
            <td></td>
            <td>
                <font style=”background-color:black; color:white” face=”Century Gothic” size=”3″>Nim</font>
            </td>
            <td><input type=”text” name=”nim” size=”20″></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <font style=”background-color:black; color:white” face=”Century Gothic” size=”3″>Nama</font>
            </td>
            <td><input type=”text” name=”nama” size=”20″></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <font style=”background-color:black; color:white” face=”Century Gothic” size=”3″>
                    Alamat</font>
            </td>
            <td><textarea cols=”20″ rows=”5″ name=”alamat”></textarea></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <font style=”background-color:black; color:white” face=”Century Gothic” size=”3″>
                    Jenis Kelamin</font>
            </td>
            <td><input type=”radio” name=”jenis_kelamin” value=”Pria”>
                <font style=”background-color:black; color:white” face=”Century Gothic” size=”3″>Pria &nbsp;&nbsp;
                </font>
                <input type=”radio” name=”jenis_kelamin” value=”Wanita”>
                <font style=”background-color:black; color:white” face=”Century Gothic” size=”3″>Wanita
            </td>
            </font>
        </tr>

        <td></td>
        <td>
            <font style=”background-color:black; color:white” face=”Century Gothic” size=”3″>
                Status</font>
        </td>
        <td><input type=radio name=status value=”Menikah” checked>
            <font style=”background-color:black; color:white” face=”Century Gothic” size=”3″>Menikah </font>
            <input type=radio name=status value=”Belum Menikah”>
            <font style=”background-color:black; color:white” face=”Century Gothic” size=”3″>Belum Menikah
        </td>
        </font>
        </tr>

        <tr>
            <td></td>
            <td>
                <font style=”background-color:black; color:white” face=”Century Gothic” size=”3″>
                    Hobby</font>
            </td>
            <td><input type=”text” name=”hobby” size=”20″></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <font style=”background-color:black; color:white” face=”Century Gothic” size=”3″>
                    Tanggal Lahir
            </td>
            <td><input type=date name=tanggal><br><br>
        </tr>

        <tr>
            <td></td>
            <td>
                <font style=”background-color:black; color:white” face=”Century Gothic” size=”3″>Masukan Foto Anda
                </font>
            </td>

            <td><input type=file name=file></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td><input type=”submit” name=”Kirim” value=”Proses”></td>

    </table>
</form>
</body>

</html>