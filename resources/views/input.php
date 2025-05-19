<html>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>

        function validasi() {
            var nrp = document.getElementById("nrp").value;
            var nama = document.getElementById("nama").value;

            if (nama.length < 1) {
                //alert("Nama harus diisi") ;
                swal("Nama harus diisi");
                document.getElementById("nama").focus();
                return false;
            }

            if (nrp.length < 10) {
                //alert("NRP harus diisi") ;
                swal("NRP dibawah 10 digit");
                document.getElementById("nrp").focus();
                return false;
            } else if (nrp.length > 10) {
                swal("NRP di atas 10 digit");
                document.getElementById("nrp").focus();
                return false;
            } else {
                return;
            }


            return true;

            //defaultnya return true
        }
    </script>
</head>

<body>
    <div class="container">
        <p>
        <form id="formDaftar" method="get" action="https://google.co.id" onsubmit="return validasi()">
            NRP :
            <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Isikan 10 digit NRP, HARUS DIISI">
            <br>
            Nama :
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan Nama, HARUS DIISI">
            <br>
            <input type="submit" class="btn btn-success" value="Daftar">
        </form>
        </p>
    </div>
</body>

</html>
