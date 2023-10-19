<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana WAD | Rico Wijaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <form action="latihan3.php" method="post">
            <label for="angka_pertama" class="form-label">Angka Pertama</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control" name="angka_pertama" aria-describedby="basic-addon1">
                </div>
                
                <label for="angka_kedua" class="form-label">Angka Kedua</label>
                <select class="form-select" name="angka_kedua" aria-label="Default select example">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>

                <label for="operasi" class="form-label mt-3">Operasi</label>
                <select class="form-select" name="operasi" aria-label="Default select example">
                    <option value="+">Pertambahan</option>
                    <option value="-">Pengurangan</option>
                    <option value="*">Perkalian</option>
                    <option value="/">Pembagian</option>
                    <option value="**">Perpangkatan</option>
                </select>
                <input type="submit" name="submit" value="Hitung" class="btn btn-primary w-100 mt-5" />
        </form>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>