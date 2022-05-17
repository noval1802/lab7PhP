<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tugas Lab7</title>
</head>

<body>
    <?php
    function hitung_umur($tanggal_lahir)
    {
        $birthDate = new DateTime($tanggal_lahir);
        $today = new DateTime("today");
        if ($birthDate > $today) {
            exit("0 tahun 0 bulan 0 hari");
        }
        $y = $today->diff($birthDate)->y;
        $m = $today->diff($birthDate)->m;
        $d = $today->diff($birthDate)->d;
        return $y . " tahun " . $m . " bulan " . $d . " hari";
    }

    echo hitung_umur("2002-02-18");
    ?>
</body>

</html>