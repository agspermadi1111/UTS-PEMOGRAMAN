-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2021 pada 13.17
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblabsen`
--

CREATE TABLE `tblabsen` (
  `idabsen` int(10) NOT NULL,
  `tglabsen` date DEFAULT NULL,
  `masuk` time DEFAULT NULL,
  `keluar` time DEFAULT NULL,
  `kodedosen` varchar(10) DEFAULT NULL,
  `sesi` varchar(2) DEFAULT NULL,
  `kelassesi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblabsen`
--

INSERT INTO `tblabsen` (`idabsen`, `tglabsen`, `masuk`, `keluar`, `kodedosen`, `sesi`, `kelassesi`) VALUES
(23213, '2021-04-26', '07:09:00', '09:00:00', 'SI044019', '2', 'pagi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbldosen`
--

CREATE TABLE `tbldosen` (
  `kodedosen` varchar(10) NOT NULL,
  `nids` varchar(15) DEFAULT NULL,
  `nipy` varchar(15) DEFAULT NULL,
  `namadosen` varchar(20) DEFAULT NULL,
  `kodeprodi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbldosen`
--

INSERT INTO `tbldosen` (`kodedosen`, `nids`, `nipy`, `namadosen`, `kodeprodi`) VALUES
('SI044019', '001114', '014445', 'Reza Ilyasa M.Kom.', 'PI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbljadwal`
--

CREATE TABLE `tbljadwal` (
  `id` int(10) NOT NULL,
  `jadwalid` int(4) DEFAULT NULL,
  `kodedosen` varchar(10) DEFAULT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `thnakademik` varchar(10) DEFAULT NULL,
  `semester` varchar(5) NOT NULL,
  `kodemk` varchar(15) DEFAULT NULL,
  `sesi` varchar(2) DEFAULT NULL,
  `jammasuk` time DEFAULT NULL,
  `jamkeluar` time DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `ruang` varchar(10) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `kelassesi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmatkul`
--

CREATE TABLE `tblmatkul` (
  `kodemk` varchar(15) NOT NULL,
  `namamk` varchar(30) DEFAULT NULL,
  `sks` int(2) DEFAULT NULL,
  `smt` int(1) DEFAULT NULL,
  `kodeprodi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblmatkul`
--

INSERT INTO `tblmatkul` (`kodemk`, `namamk`, `sks`, `smt`, `kodeprodi`) VALUES
('PI 1', 'PEMOGRAMAN INTERNET1', 4, 4, 'PI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblprodi`
--

CREATE TABLE `tblprodi` (
  `kodeprodi` varchar(10) NOT NULL,
  `namaprodi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblprodi`
--

INSERT INTO `tblprodi` (`kodeprodi`, `namaprodi`) VALUES
('BI', 'Business Intelegence'),
('PI', 'Pemograman Internet ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tblabsen`
--
ALTER TABLE `tblabsen`
  ADD PRIMARY KEY (`idabsen`),
  ADD KEY `kodedosen` (`kodedosen`);

--
-- Indeks untuk tabel `tbldosen`
--
ALTER TABLE `tbldosen`
  ADD PRIMARY KEY (`kodedosen`);

--
-- Indeks untuk tabel `tbljadwal`
--
ALTER TABLE `tbljadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kodedosen` (`kodedosen`),
  ADD KEY `kodemk` (`kodemk`);

--
-- Indeks untuk tabel `tblmatkul`
--
ALTER TABLE `tblmatkul`
  ADD PRIMARY KEY (`kodemk`),
  ADD KEY `kodeprodi` (`kodeprodi`);

--
-- Indeks untuk tabel `tblprodi`
--
ALTER TABLE `tblprodi`
  ADD PRIMARY KEY (`kodeprodi`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tblabsen`
--
ALTER TABLE `tblabsen`
  ADD CONSTRAINT `tblabsen_ibfk_1` FOREIGN KEY (`kodedosen`) REFERENCES `tbldosen` (`kodedosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbljadwal`
--
ALTER TABLE `tbljadwal`
  ADD CONSTRAINT `tbljadwal_ibfk_1` FOREIGN KEY (`kodedosen`) REFERENCES `tbldosen` (`kodedosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbljadwal_ibfk_2` FOREIGN KEY (`kodemk`) REFERENCES `tblmatkul` (`kodemk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tblmatkul`
--
ALTER TABLE `tblmatkul`
  ADD CONSTRAINT `tblmatkul_ibfk_1` FOREIGN KEY (`kodeprodi`) REFERENCES `tblprodi` (`kodeprodi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
