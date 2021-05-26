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
    <a href="absensi.php">Kembali</a>
    <br><br>
        <form action="proces.php" method="post">
        <div class="col-3">
            <div class="mb-3">
                <label class="form-label">ID JADWAL</label>
                <input type="number" name="jdwl" class="form-control">
            </div>
            <div class="mb-3">
                    <label class="form-label">KODE DOSEN</label>
                    <select name="dosen" class="form-select">
                        <?php
                            $result = $model->tampil_dosen();
                            if (!empty($result)) {
                                foreach ($result as $data) : ?>
                        <option value="<?= $data->kodedosen ?>"><?= $data->kodedosen ?> - <?=$data->namadosen?></option>
                        <?php endforeach; } ?>
                    </select>
            </div>
            <div class="mb-3">
                <label class="form-label">HARI</label>
                <input type="text" name="hari" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">TAHUN AKADEMIK</label>
                <input type="text" name="tahun" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">SEMESTER</label>
                <input type="text" name="smt" class="form-control">
            </div>
            <div class="mb-3">
                    <label class="form-label">KODE MATAKULIAH</label>
                    <select name="matkul" class="form-select">
                        <?php
                            $result = $model->tampil_matkul();
                            if (!empty($result)) {
                                foreach ($result as $data) : ?>
                        <option value="<?= $data->kodemk ?>"><?= $data->kodemk ?> - <?=$data->namamk?></option>
                        <?php endforeach; } ?>
                    </select>
            </div>
            <div class="mb-3">
                <label class="form-label">SESI</label>
                <input type="text" name="sesi" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">JAM MASUK</label>
                <input type="time" name="masuk" class="form-control timepicker">
            </div>
            <div class="mb-3">
                <label class="form-label">JAM KELUAR</label>
                <input type="time" name="keluar" class="form-control timepicker">
            </div>
            <div class="mb-3">
                <label class="form-label">KELAS</label>
                <input type="text" name="kelas" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">RUANG</label>
                <input type="text" name="ruang" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">STATUS</label>
                <input type="number" name="sts" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">KELAS SESI</label>
                <input type="text" name="kls" class="form-control">
            </div>

            <button type="submit" name="submit_jadwal" class="btn btn-success">SUBMIT</button>
            <button type="reset" class="btn btn-danger">CANCEL</button>
        </div>
        </form>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</Body>
</html>