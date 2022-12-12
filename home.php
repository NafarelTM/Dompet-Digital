<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOMPET DIGITAL</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<section class="header">
    <a href="home.php" class="logo">Dompet Digital</a>
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="dashboard.php">Dashboard</a>
    </nav>
</section>
<div class="container">
    <h1 class="mt-5 mb-4">Form Input</h1>
    <div class="mb-3 row">
        <label for="tglTransaksi" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="tglTransaksi">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">Pemasukan</option>
                <option value="2">Makan</option>
                <option value="3">Transportasi</option>
                <option value="4">Kebutuhan lain-lain</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nominal" class="col-sm-2 col-form-label">Nominal</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="nominal">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan (jika ada)</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="keterangan">
        </div>
    </div>
    <button type="button" class="btn btn-primary">Submit</button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="script.js"></script>    
</body>
</html>