<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Input</title>
</head>

<body>
    <!--Table Form-->
    <form class="form" method="post">
        <table align="center">
            <td>
                <h2> <b>Form Biodata</h2>
            </td>
            <tr></tr>
            <table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
                <!--Table Nama-->
                <tr>
                    <td>Nama</td>
                    <td> : </td>
                    <td><input name="nama" type="text" size="40" /></td>
                </tr>
                <!--End Table Nama-->

                <!--Table Tanggal Lahir-->
                <tr>
                    <td>Tanggal Lahir</td>
                    <td> : </td>
                    <td><input name="tgl_lahir" type="text" size="40"/></td>
                </tr>
                <!--End Table Tanggal lahir-->

                <!--Table Pekerjaan-->
                <tr>
                    <td>Pekerjaan</td>
                    <td> : </td>
                    <td>
                        <select name="pekerjaan">
                            <option value="-">>---Pilih Pekerjaan---<</option>
                            <option value='Graphic Designer'>Graphic Designer</option>
                            <option value='Staff Admin'>Staff Admin</option>
                            <option value='HRD'>HRD</option>
                            <option value='Maintenance'>Maintenance</option>
                            <option value="QC">QC</option>
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
</body>

</html>
<tr>
    <td align="center" colspan="2"></td>
    <?php
echo "<b>Hasil Biodata yang di Inputkan</b>"
?>
</tr>
<?php
echo "Nama: " . $_POST["nama"];

$tgl_lahir = @$_POST["tgl_lahir"];

$lahir = new DateTime($tgl_lahir);
$hari_ini = new DateTime();

$diff = $hari_ini->diff($lahir);
echo "Umur: " . $diff->y . "Tahun";

echo "pekerjaan: " . $_POST["pekerjaan"];
$pekerjaan = @$_POST["pekerjaan"];

if ($pekerjaan == "Graphic Designer") {
    echo '<br> Gaji: Rp. 15.000.000,-';
} elseif ($pekerjaan == "Staff Admin") {
    echo '<br> Gaji: Rp. 7.500.000,-';
} elseif ($pekerjaan == "HRD") {
    echo '<br> Gaji: Rp. 10.000.000,-';
} elseif ($pekerjaan == "Maintenance") {
    echo '<br> Gaji: Rp. 9.000.000,-';
} elseif ($pekerjaan == "QC") {
    echo '<br> Gaji: Rp. 7.000.000,-';
}
?>