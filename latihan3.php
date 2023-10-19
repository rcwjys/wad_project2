<?php 
    $angka_pertama = htmlspecialchars($_POST['angka_pertama']);
    $angka_kedua = htmlspecialchars(+$_POST['angka_kedua']);
    $operasi = htmlspecialchars($_POST["operasi"]);

    if (isset($_POST['submit'])) {
        if (! empty($angka_pertama)) {
            $hasil;
            switch ($operasi) {
                case '+':
                    $hasil = $angka_pertama + $angka_kedua;
                    break;
                case '-':
                    $hasil = $angka_pertama - $angka_kedua;
                    break;
                case '*':
                    $hasil = $angka_pertama * $angka_kedua;
                    break;
                case '/':
                    $hasil = $angka_pertama / $angka_kedua;
                    break;
                case '**':
                    $hasil = $angka_pertama ** $angka_kedua;
                    break;
            }
        } else {
            header("Location: latihan2.php");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results | Rico Wijaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header class="d-flex">
        <div class="alert alert-success alert-dismissible w-100 justify-content-between" role="alert">
            <?php echo "Hasil dari <strong>{$angka_pertama} {$operasi} {$angka_kedua} = {$hasil}</strong>";?>
            <div class="back-section">
                <a href="/wad_project2/latihan2.php" type="button" class="btn btn-outline-success mt-3">Kembali</a>
            </div>
        </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>