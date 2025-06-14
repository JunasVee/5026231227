<!DOCTYPE html>
<html>

<head>
    <title>Tambah Keranjang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>

    <h3>Tambah Keranjang Pembelian</h3>

    <a href="/latihan1"> Kembali</a>

    <br />
    <br />

    <form action="/latihan1/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="kodebarang">
                Kode Barang
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="kodebarang" name="kodebarang" placeholder="kode barang">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="jumlah">
                Jumlah
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="jumlah" name="jumlah" placeholder="Masukkan jumlah">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="harga">
                Harga
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="harga" name="harga" placeholder="Masukkan harga">
            </div>
        </div>
        <div class="container">
            <button type="submit" class="btn btn-success">
                Masukkan Keranjang
            </button>
        </div>
    </form>

</body>

</html>
