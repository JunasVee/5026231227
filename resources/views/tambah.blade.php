<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama">
                    Nama
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="nama"
                           name="nama"
                           placeholder="Masukkan nama">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="jabatan">
                    Jabatan
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="jabatan"
                           name="jabatan"
                           placeholder="Masukkan jabatan">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="umur">
                    Umur
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="umur"
                           name="umur"
                           placeholder="Masukkan umur">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="alamat">
                    Alamat
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="alamat"
                           name="alamat"
                           placeholder="Masukkan alamat">
                </div>
            </div>
            <div class="container">
                <button type="submit" class="btn btn-success">
                    Tambah
                </button>
            </div>
	</form>

</body>
</html>
