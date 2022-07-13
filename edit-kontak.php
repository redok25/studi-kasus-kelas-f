<?php
include('header.php');
include('hak-akses.php');
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM `kontak` WHERE id = '$id' ");
$data = $data->fetch_assoc();

?>

<body>
    <?php include('navbar.php') ?>

    <!-- Konten -->
    <div class="container row mx-auto mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 style="float: left;">Edit Kontak</h3>
                </div>
                <div class="card-body">
                    <form action="proses/edit-kontak.php" method="POST">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <div class="mb-3">
                            <label for="inputNama" class="form-label">Nama</label>
                            <input value="<?= $data['nama'] ?>" type="text" placeholder="Input disini ..." class="form-control" id="inputNama" name="nama">
                        </div>

                        <div class="mb-3">
                            <label for="inputNoHP" class="form-label">No Handhphone</label>
                            <input value="<?= $data['no_hp'] ?>" type="text" placeholder="Input disini ..." class="form-control" id="inputNoHP" name="no_hp">
                        </div>

                        <div class="mb-3">
                            <label for="inputNama" class="form-label">Alamat</label>
                            <textarea placeholder="Input disini ..." name="alamat" id="inputAlamat" class="form-control"><?= $data['alamat'] ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-pen"></i> Edit Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>