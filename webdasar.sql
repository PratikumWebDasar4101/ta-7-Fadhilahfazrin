-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Okt 2018 pada 16.23
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` text NOT NULL,
  `jenis_kel` text NOT NULL,
  `prodi` text NOT NULL,
  `fakultas` text NOT NULL,
  `asal` text NOT NULL,
  `moto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jenis_kel`, `prodi`, `fakultas`, `asal`, `moto`) VALUES
('6701167890', 'Zuhal', 'laki-laki', 'MP', 'FKB', 'Solok', 'Biar hitam tapi manis'),
('6701170001', 'Fadhilah', 'perempuan', 'PH', 'FRI', 'Bandung', 'Apapun, asal bisa nafas'),
('6701170007', 'Berliana', 'perempuan', 'IF', 'FEB', 'Cilacap', 'Dipikir sambil jungkok'),
('6701175004', 'Debby', 'perempuan', 'MP', 'FEB', 'Klaten', 'Aku jombs otw taken'),
('6701176008', 'Maulina', 'perempuan', 'SM', 'FIT', 'Solo', 'Cantik sih aku'),
('6701179701', 'Fadlih', 'laki-laki', 'MP', 'FIK', 'Singkawang', 'Apaa apaa weh'),
('6701180001', 'Fazrin', 'laki-laki', 'TK', 'FEB', 'Jogjakarta', 'Gausah Kepo Deh');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
