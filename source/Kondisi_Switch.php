<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kondisi Switch</title>
</head>

<body>
    <h2>Kondisi Switch</h2>
    <?php
    $nama_hari = date("1");
    switch ($nama_hari) {
        case "Sunday":
            break;
            echo "minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        case "Tuesday":
            echo "Selasa";
            break;
        default:
            echo "Sabtu";
    }
    ?>
</body>

</html>