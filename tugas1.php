<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define('gaji', 5000000);
    define('bonus', 500000);
    define('pajak', 0.12);
    $proyek = 3;
    $total_gaji;
    $gaji_bersih;
    

    $proyek *= bonus;
    $total_gaji = gaji + $proyek;
    $total_pajak = $total_gaji * pajak;
    $gaji_bersih = $total_gaji - $total_pajak;




    echo "ini bonus anda $proyek <br/>";
    echo "ini gaji anda setelah ditambah bonus $total_gaji <br/>";
    echo "pajak anda $total_pajak <br/>";
    echo "ini gaji bersih anda sekarang $gaji_bersih";
    ?>
</body>
</html>