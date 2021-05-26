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
        <a href="insert_prodi.php"> Tambah Data</a><br>
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>KODE PROGRAM STUDI</th>
                    <th>NAMA PROGRAM STUDI</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = $model->tampil_prodi();
                    if (!empty($result)) {
                        foreach ($result as $data) : ?>
                <tr>
                    <td><?= $index++ ?></td>
                    <td><?= $data->kodeprodi ?></td>
                    <td><?= $data->namaprodi ?></td>
                    <td>
                        <a name="edit" id="edit" href="edit_prodi.php?id=<?=$data->kodeprodi?>">Edit</a>
                        <a name="delete" id="delete" href="proces.php?id=<?=$data->kodeprodi?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach;
                    }else { ?>
                <tr>
                    <td colspan="9">Belum Ada Data Pada Tabel Data Program Studi</td>
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