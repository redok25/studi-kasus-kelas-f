<?php include('header.php') ?>

<body>
    <?php include('navbar.php') ?>

    <!-- Konten -->
    <div class="container row mx-auto mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 style="float: left;">Data Kontak</h3>
                    <a href="tambah-kontak.php" style="float:right;" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah Kontak</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No Handphone</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Anton</td>
                                <td>0851572132</td>
                                <td>Yogyakarta</td>
                                <td>
                                    <a href="edit-kontak.php" class="btn btn-success"><i class="fa-solid fa-pen"></i> Edit</a>
                                    <a href="hapus-kontak.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Hapus</a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Anton</td>
                                <td>0851572132</td>
                                <td>Yogyakarta</td>
                                <td>
                                    <a href="edit-kontak.php" class="btn btn-success"><i class="fa-solid fa-pen"></i> Edit</a>
                                    <a href="hapus-kontak.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Hapus</a>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Anton</td>
                                <td>0851572132</td>
                                <td>Yogyakarta</td>
                                <td>
                                    <a href="edit-kontak.php" class="btn btn-success"><i class="fa-solid fa-pen"></i> Edit</a>
                                    <a href="hapus-kontak.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Hapus</a>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Anton</td>
                                <td>0851572132</td>
                                <td>Yogyakarta</td>
                                <td>
                                    <a href="edit-kontak.php" class="btn btn-success"><i class="fa-solid fa-pen"></i> Edit</a>
                                    <a href="hapus-kontak.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Hapus</a>
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>Anton</td>
                                <td>0851572132</td>
                                <td>Yogyakarta</td>
                                <td>
                                    <a href="edit-kontak.php" class="btn btn-success"><i class="fa-solid fa-pen"></i> Edit</a>
                                    <a href="hapus-kontak.php" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>