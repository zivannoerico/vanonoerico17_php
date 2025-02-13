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
        <form action="hal2.php" method="post">
            <table border="1" style="border-collapse : collapse; width : 50%;">

                <tr>
                    <td>NAMA </td>
                    <td>:</td>
                    <td><input type="text" class="form-control" id="nama" name="nama"></td>

                </tr>
                <tr>
                    <td>DIVISI</td>
                    <td>:</td>
                    <td>
                        <input type="text" class="form-control" id="divisi" name="divisi">
                    </td>
                </tr>
                <tr>
                    <td>GAJI PERBULAN</td>
                    <td>:</td>
                    <td>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="Number" name="gaji" class="form-control" id="gaji">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>NPWP</td>
                    <td>:</td>
                    <td>
                        <select name="npwp" id="npwp" class="form-select" aria-label="Default select example">
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                </tr>
                <tr>

                    <td> </td>
                    <td> </td>
                    <td class="tombol">
                        <button type="submit" class="btn btn-outline-dark" name="cek">Cek</button>
                    </td>
                </tr>




            </table>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>