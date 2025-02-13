<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .container {
        justify-content: center;
        align-items: center;
        margin-top: 50px;

    }

    td {
        padding: 1em;
    }

    table {
        position: relative;

    }

    form {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .tombol {
        position: absolute;
        right: 0;
        bottom: -5px;
    }
</style>

<body>
       
    <div class="container">
        <form action="Tugas3Halaman2.php" method="post">
            <table border="1" style="border-collapse : collapse; width : 50%;" >

 <?php if (isset($_POST['cek'])) {

            $gajiBulanan = floatval($_POST['gaji']);
            $npwp = $_POST['npwp'];

            $gaji_tahunan = $gajiBulanan * 12;
            $potongan_pajak = 0;

            if ($gaji_tahunan > 54000000) {
                if ($npwp == "Ya") {
                    $potongan_pajak = $gaji_tahunan * 0.15;
                }else {
                    $potongan_pajak = $gaji_tahunan * 0.20;

                }
            }

            $gajiBersihBulanan = ($gaji_tahunan - $potongan_pajak) /12;
            $potongan_pajak_bulanan = $potongan_pajak /12;
            $gaji_kotor_bulanan = $gaji_tahunan /12;
        }
       ?>
                <tr>
                    <td>NAMA</td>
                    <td>:</td>
                    <td><?= $_POST['nama']?></td>

                </tr>
                <tr>
                    <td>DIVISI</td>
                    <td>:</td>
                    <td><?= $_POST['divisi']?></td>
                </tr> 
                <tr>
                    <td>NPWP</td>
                    <td>:</td>
                    <td>
                    <?= $_POST['npwp']?>
                    </td>
                </tr>
                <tr>
                    <td>GAJI KOTOR PERTAHUN</td>
                    <td>:</td>
                    <td>Rp.
                    <?= number_format($gaji_tahunan,0,',','.')?>
                    </td>
                </tr>
                <!-- <tr>
                    <td>GAJI KOTOR PERBULAN</td>
                    <td>:</td>
                    <td>Rp.
                    <?= number_format($gaji_kotor_bulanan,0,',','.')?>
                    </td>
                </tr> -->
                <tr>
                    <td>POTONGAN PAJAK PERTAHUN</td>
                    <td>:</td>
                    <td>Rp.<?= number_format($potongan_pajak,0,',','.')?></td>
                </tr>
                <tr>
                    <td>POTONGAN PAJAK PERBULAN</td>
                    <td>:</td>
                    <td>Rp.<?= number_format($potongan_pajak_bulanan,0,',','.')?></td>
                </tr>
                <tr>
                    <td>GAJI BERSIH PERBULAN</td>
                    <td>:</td>
                    <td>Rp.<?= number_format($gajiBersihBulanan,0,',','.')?></td>
                </tr>
            </table>
        </form>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>