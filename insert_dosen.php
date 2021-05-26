<?php
    include 'model.php';
    $model = new Model();

?>
<html>
    <head>
        <title>TAMBAH DATA MATKUL</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous">
    </head>
<Body>
        <?php
            include 'navbar.php';
        ?>
    <div class="container-fluid">
    <h1>Tambah</h1>
    <a href="dosen.php">Kembali</a>
    <br><br>
        <form action="proces.php" method="post">
        <div class="col-3">
            <div class="mb-3">
                <label class="form-label">KODE DOSEN</label>
                <input type="text" name="kode" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">NIDS</label>
                <input type="number" name="nids" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">NIPY</label>
                <input type="number" name="nipy" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">NAMA DOSEN</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="mb-3">
                    <label class="form-label">KODE PROGRAM STUDI</label>
                    <select name="prodi" class="form-select">
                        <?php
                            $result = $model->tampil_prodi();
                            if (!empty($result)) {
                                foreach ($result as $data) : ?>
                        <option value="<?= $data->kodeprodi ?>"><?= $data->kodeprodi ?> - <?=$data->namaprodi?></option>
                        <?php endforeach; } ?>
                    </select>
            </div>

            <button type="submit" name="submit_dosen" class="btn btn-success">SUBMIT</button>
            <button type="reset" class="btn btn-danger">CANCEL</button>
        </div>
        </form>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</Body>
</html>