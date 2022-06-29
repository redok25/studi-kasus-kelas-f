<?php include('header.php') ?>

<body>

    <?php include('navbar.php') ?>

    <!-- Konten -->
    <div class="container row mx-auto mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 style="float: left;">Tambah Kontak</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="inputNama" class="form-label">Nama</label>
                            <input type="text" placeholder="Input disini ..." class="form-control" id="inputNama">
                        </div>

                        <div class="mb-3">
                            <label for="inputNoHP" class="form-label">No Handhphone</label>
                            <input type="text" placeholder="Input disini ..." class="form-control" id="inputNoHP">
                        </div>

                        <div class="mb-3">
                            <label for="inputNama" class="form-label">Alamat</label>
                            <textarea placeholder="Input disini ..." name="alamat" id="inputAlamat" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>