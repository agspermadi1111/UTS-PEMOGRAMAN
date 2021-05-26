<?php
    include 'model.php';

    //prodi
    if (isset($_POST['submit_prodi'])) {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];

        $model = new Model();
        $model->insert_prodi($kode, $nama);
        header('location:prodi.php');
    }
    if (isset($_POST['edit_prodi'])) {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];

        $model = new Model();
        $model->update_prodi($kode, $nama);
        header('location:prodi.php');
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $model = new Model();
        $model->delete_prodi($id);
        header('location:prodi.php');
    }

    //matkul
    if (isset($_POST['submit_matkul'])) {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $sks = $_POST['sks'];
        $smt = $_POST['smt'];
        $prodi = $_POST['prodi'];

        $model = new Model();
        $model->insert_matkul($kode, $nama, $sks, $smt, $prodi);
        header('location:matkul.php');
    }
    if (isset($_POST['edit_matkul'])) {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $sks = $_POST['sks'];
        $smt = $_POST['smt'];
        $prodi = $_POST['prodi'];

        $model = new Model();
        $model->update_matkul($kode, $nama, $sks, $smt, $prodi);
        header('location:matkul.php');
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $model = new Model();
        $model->delete_matkul($id);
        header('location:matkul.php');
    }

    //dosen
    if (isset($_POST['submit_dosen'])) {
        $kode = $_POST['kode'];
        $nids = $_POST['nids'];
        $nipy = $_POST['nipy'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];

        $model = new Model();
        $model->insert_dosen($kode, $nids, $nipy, $nama, $prodi);
        header('location:dosen.php');
    }
    if (isset($_POST['edit_dosen'])) {
        $kode = $_POST['kode'];
        $nids = $_POST['nids'];
        $nipy = $_POST['nipy'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];

        $model = new Model();
        $model->update_dosen($kode, $nids, $nipy, $nama, $prodi);
        header('location:dosen.php');
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $model = new Model();
        $model->delete_dosen($id);
        header('location:dosen.php');
    }

    //absensi
    if (isset($_POST['submit_absen'])) {
        $idabsen = $_POST['idabsen'];
        $tgl = $_POST['tgl'];
        $masuk = $_POST['masuk'];
        $keluar = $_POST['keluar'];
        $dosen = $_POST['dosen'];
        $sesi = $_POST['sesi'];
        $kelas = $_POST['kelas'];

        $model = new Model();
        $model->insert_absen($idabsen, $tgl, $masuk, $keluar, $dosen, $sesi, $kelas);
        header('location:absensi.php');
    }

    //jadwal
    if (isset($_POST['submit_jadwal'])) {
        $jadwal = $_POST['id'];
        $jadwal = $_POST['jdwl'];
        $dosen = $_POST['dosen'];
        $hari = $_POST['hari'];
        $tahun = $_POST['tahun'];
        $smt = $_POST['smt'];
        $matkul = $_POST['matkul'];
        $sesi = $_POST['sesi'];
        $masuk = $_POST['masuk'];
        $keluar = $_POST['keluar'];
        $kelas = $_POST['kelas'];
        $ruang = $_POST['ruang'];
        $status = $_POST['status'];
        $kelassesi = $_POST['kls'];

        $model = new Model();
        $model->insert_jadwal($id, $jadwal, $dosen, $hari, $tahun, $smt, $matkul, $sesi, $masuk, $keluar, $kelas, $ruang, $status, $kelassesi);
        header('location:jadwal.php');
    }
?>