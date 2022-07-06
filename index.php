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
                            <?php
                            $data = $conn->query("SELECT * FROM `kontak`");
                            $no = 1;
                            ?>
                            <?php while ($d = $data->fetch_assoc()) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $d['nama'] ?></td>
                                    <td><?= $d['no_hp'] ?></td>
                                    <td><?= $d['alamat'] ?></td>
                                    <td>
                                        <a href="edit-kontak.php?id=<?= $d['id'] ?>" class="btn btn-success"><i class="fa-solid fa-pen"></i> Edit</a>
                                        <a href="proses/hapus-kontak.php?id=<?= $d['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="test-copilot.js"></script>
</body>

</html>