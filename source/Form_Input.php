<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Competible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>

<body>
    <!--Table Form-->
    <form class="form" method="post">
        <table align="center">
            <td>
                <h2><b>Form Biodata</b></h2>
            </td>
            <table width="450" border="0" cellpadding="1" cellspacing="10" align="center">
                <!--Table Nama-->
                <tr>
                    <td>Nama </td>
                    <td> : </td>
                    <td><input name="nama" type="text" size="40" /></td>
                </tr>
                <!--End Table Nama-->

                <!--Table Tanggal Lahir-->
                <tr>
                    <td>Tanggal Lahir</td>
                    <td> : </td>
                    <td><input name="tgl_lahir" type="text" size="40" /></td>
                </tr>
                <!--End Table Tanggal lahir-->

                <!--Table Pekerjaan-->
                <tr>
                    <td>Pekerjaan</td>
                    <td> : </td>
                    <td>
                        <select name="pekerjaan">
                            <option value="-">Pilih Pekerjaan</option>
                            <option value='Cloud computing engineer'>Cloud computing engineer</option>
                            <option value='Database administrator'>Database administrator</option>
                            <option value='Computer network specialists'>Computer network specialists</option>
                            <option value='Computer support specialists'>Computer support specialists</option>
                            <option value="Software/Application developer">Software/Application developer</option>
                        </select>
                    </td>
                </tr>
                <!--End Table Pekerjaan-->

                <!--BTN Submit-->
                <tr>
                    <td colspan="4" align="center"> <input type="submit" value="Simpan"></td>
                </tr>
                <!--END BTN Submit-->
            </table>
        </table>
    </form>
    <!--END Table Form-->

    <!--Memposting nama yang sudah di inputkan-->
    <?php
    echo "Nama : " . $_POST["nama"];
    ?>
    <!--Memposting nama yang sudah di inputkan-->
    <br>
    <!--Memanggil output dari tgl lahir dan menghitung umur-->
    <?php
    $tgl_lahir = @$_POST["tgl_lahir"];

    $lahir = new DateTime($tgl_lahir);
    $hari_ini = new DateTime();
    $diff = $hari_ini->diff($lahir);
    echo "Umur : " . $diff->y . "Tahun";
    ?>
    <!--Memanggil output dari tgl lahir dan menghitung umur-->
    <br>
    <!--Memanggil form pekerjaan yang sudah di inputkan-->
    <?php
    echo "pekerjaan : " . $_POST["pekerjaan"];
    $pekerjaan = @$_POST["pekerjaan"];
    ?>
    <!--Memanggil form pekerjaan yang sudah di inputkan-->

    <!--Menampilkan gaji berdasarkan pekerjaan yang dipilih-->
    <?php
    if ($pekerjaan == "Cloud computing engineer") {
        echo '<br> Gaji : Rp. 9.000.000,-';
    } elseif ($pekerjaan == "Database administrator") {
        echo '<br> Gaji : Rp. 5.300.000,-';
    } elseif ($pekerjaan == "Computer network specialists") {
        echo '<br> Gaji : Rp. 4.000.000,-';
    } elseif ($pekerjaan == "Computer support specialists") {
        echo '<br> Gaji : Rp. 4.000.000,-';
    } elseif ($pekerjaan == "Software/Application developer") {
        echo '<br> Gaji : Rp. 5.300.000,-';
    }
    ?>
    <!--Menampilkan gaji berdasarkan pekerjaan yang dipilih-->
</body>

</html>