<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Tambah Data Nilai</title>
</head>
<body>

    <h3>Tambah Data Nilai</h3>

    <a href="/eas">Kembali</a>

    <br>
    <br>

    <form action="/eas/store" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nrp" class="control-label col-sm-2">NRP</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="nrp" placeholder="Masukkan NRP">
            </div>
        </div>
        <div class="form-group">
            <label for="nilai" class="control-label col-sm-2">Nilai</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="nilai" placeholder="Masukkan Nilai(Angka)">
            </div>
        </div>
        <div class="form-group">
            <label for="sks" class="control-label col-sm-2">SKS</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="sks" placeholder="Masukkan sks">
            </div>
        </div>
        <div class="container">
            <button type="submit" class="btn btn-success">
                Tambah Data Nilai
            </button>
        </div>
    </form>

</body>
</html>
