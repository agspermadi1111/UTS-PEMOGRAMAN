<?php
    include 'koneksi.php';

    class Model extends Connection{

        public function __construct(){
            $this->conn = $this->get_connection();
        }
        //prodi
        public function insert_prodi($kode, $nama){
            $sql = "INSERT INTO tblprodi (kodeprodi, namaprodi) VALUES ('$kode', '$nama')";
            $this->conn->query($sql);
        }
        public function tampil_prodi(){
            $sql = "SELECT * FROM tblprodi";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris[] = $obj;
            }
            if (!empty($baris)) {
                return $baris;
            }   
        }
        public function edit_prodi($id){
            $sql = "SELECT * FROM tblprodi WHERE kodeprodi = '$id'";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris = $obj;
            }
            return $baris;
        }
        public function update_prodi($kode,$nama){
            $sql = "UPDATE tblprodi set namaprodi = '$nama' WHERE kodeprodi = '$kode'";
            $this->conn->query($sql);
        }
        public function delete_prodi($id){
            $sql = "DELETE FROM tblprodi WHERE kodeprodi='$id'";
            $this->conn->query($sql);
        }

        //matkul
        public function tampil_matkul(){
            $sql = "SELECT * FROM tblmatkul";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris[] = $obj;
            }
            if (!empty($baris)) {
                return $baris;
            }   
        }
        public function insert_matkul($kode, $nama, $sks, $smt, $prodi){
            $sql = "INSERT INTO tblmatkul (kodemk, namamk, sks, smt, kodeprodi)
            VALUES ('$kode', '$nama', '$sks', '$smt', '$prodi')";
            $this->conn->query($sql);
        }
        public function edit_matkul($id){
            $sql = "SELECT * FROM tblmatkul WHERE kodemk = '$id'";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris = $obj;
            }
            return $baris;
        }
        public function update_matkul($kode, $nama, $sks, $smt, $prodi){
            $sql = "UPDATE tblmatkul set namamk = '$nama', sks = '$sks', smt = '$smt' ,
            kodeprodi = '$prodi' WHERE kodemk = '$kode'";
            $this->conn->query($sql);
        }
        public function delete_matkul($id){
            $sql = "DELETE FROM tblmatkul WHERE kodemk='$id'";
            $this->conn->query($sql);
        }

        //dosen
        public function tampil_dosen(){
            $sql = "SELECT * FROM tbldosen";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris[] = $obj;
            }
            if (!empty($baris)) {
                return $baris;
            }   
        }
        public function insert_dosen($kode, $nids, $nipy, $nama, $prodi){
            $sql = "INSERT INTO tbldosen (kodedosen, nids,nipy, namadosen, kodeprodi)
            VALUES ('$kode', '$nids', '$nipy', '$nama', '$prodi')";
            $this->conn->query($sql);
        }
        public function edit_dosen($id){
            $sql = "SELECT * FROM tbldosen WHERE kodedosen = '$id'";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris = $obj;
            }
            return $baris;
        }
        public function update_dosen($kode, $nids, $nipy, $nama, $prodi){
            $sql = "UPDATE tbldosen set nids = '$nids', nipy = '$nipy' , namadosen = '$nama',
            kodeprodi = '$prodi' WHERE kodedosen = '$kode'";
            $this->conn->query($sql);
        }
        public function delete_dosen($id){
            $sql = "DELETE FROM tbldosen WHERE kodedosen='$id'";
            $this->conn->query($sql);
        }

        //absensi
        public function tampil_absen(){
            $sql = "SELECT * FROM tblabsen";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris[] = $obj;
            }
            if (!empty($baris)) {
                return $baris;
            }   
        }
        public function insert_absen($idabsen, $tgl, $masuk, $keluar, $dosen, $sesi, $kelas){
            $sql = "INSERT INTO tblabsen (idabsen,tglabsen, masuk, keluar, kodedosen, sesi, kelassesi)
            VALUES ('$idabsen', '$tgl', '$masuk', '$keluar', '$dosen', '$sesi', '$kelas')";
            $this->conn->query($sql);
        }
        public function edit_absen($id){
            $sql = "SELECT * FROM tblabsen WHERE idabsen = '$id'";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris = $obj;
            }
            return $baris;
        }

        //jadwal
        public function tampil_jadwal(){
            $sql = "SELECT * FROM tbljadwal";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris[] = $obj;
            }
            if (!empty($baris)) {
                return $baris;
            }   
        }
        public function insert_jadwal($jadwal, $dosen, $hari, $tahun, $smt, $matkul, $sesi, $masuk, $keluar, $kelas, $ruang, $status, $kelassesi){
            $sql = "INSERT INTO tbljadwal (jadwalid, kodedosen, hari, thnakademik, semester, kodemk, sesi, jammasuk, jamkeluar, kelas, ruang, status, kelassesi)
            VALUES ('$jadwal', '$dosen', '$hari', '$tahun', '$smt', '$matkul', '$sesi', '$masuk', '$keluar', '$kelas', '$ruang', '$status', '$kelassesi')";
            $this->conn->query($sql);
        }
    }
?>