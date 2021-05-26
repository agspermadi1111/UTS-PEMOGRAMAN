<?php
    include 'model.php';
    $model = new Model();
    $index = 1;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Data PROGRAM STUDI</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous">
    </head>
<body>
        <?php
            include 'navbar.php';
        ?>
    <div class="container-fluid">
        <h1 align="center">DATA PROGRAM STUDI</h1>
        <a href="insert_matkul.php"> Tambah Data</a><br>
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>KODE MATAKULIAH</th>
                    <th>NAMA MATAKULIAH</th>
                    <th>SKS</th>
                    <th>SEMESTER</th>
                    <th>KODE PRODI</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = $model->tampil_matkul();
                    if (!empty($result)) {
                        foreach ($result as $data) : ?>
                <tr>
                    <td><?= $index++ ?></td>
                    <td><?= $data->kodemk ?></td>
                    <td><?= $data->namamk ?></td>
                    <td><?= $data->sks ?></td>
                    <td><?= $data->smt ?></td>
                    <td><?= $data->kodeprodi ?></td>
                    <td>
                        <a name="edit" id="edit" href="edit_matkul.php?id=<?=$data->kodemk?>">Edit</a>
                        <a name="delete" id="delete" href="proces.php?id=<?=$data->kodemk?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach;
                    }else { ?>
                <tr>
                    <td colspan="9">Belum Ada Data Pada Tabel Data Matakuliah</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
</body>
</html> 