-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2020 pada 05.43
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `woc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `som`
--

CREATE TABLE `som` (
  `nosc` varchar(20) NOT NULL,
  `nosom` int(20) NOT NULL,
  `statesom` varchar(100) NOT NULL,
  `tasksom` varchar(100) NOT NULL,
  `wfm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `som`
--

INSERT INTO `som` (`nosc`, `nosom`, `statesom`, `tasksom`, `wfm`) VALUES
('SC504590481', 279192442, 'Waitfortomcompleted 	', 'GetTechnicalOrderTask', 'WO24808496'),
('SC504629097', 281672418, 'Waitfortomcompleted', 'GetTechnicalOrderTask 	', 'WO24848785');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tom`
--

CREATE TABLE `tom` (
  `nosc` varchar(20) NOT NULL,
  `notom` int(20) NOT NULL,
  `statetom` varchar(100) NOT NULL,
  `tasktom` varchar(100) NOT NULL,
  `wfm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tom`
--

INSERT INTO `tom` (`nosc`, `notom`, `statetom`, `tasktom`, `wfm`) VALUES
('SC504590481', 279275238, 'Accepted', 'TOM_ProvisionTechnicalOrderFulfillment order entry task', 'WO24808496'),
('SC504590481', 280759406, 'Accepted', 'WorkForceTask', 'WO24808496'),
('SC504629097', 281672502, 'Accepted', 'TOM_ProvisionTechnicalOrderFulfillment order entry task', 'WO24848785'),
('SC504629097', 281792538, 'Accepted', 'WorkForceTask', 'WO24848785');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `role`) VALUES
(9, 'user1', 'dXNlcjE=', 'user1', 'user'),
(11, 'admin', 'YWRtaW4=', 'Admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `som`
--
ALTER TABLE `som`
  ADD PRIMARY KEY (`nosc`);

--
-- Indeks untuk tabel `tom`
--
ALTER TABLE `tom`
  ADD PRIMARY KEY (`notom`),
  ADD KEY `nosc` (`nosc`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tom`
--
ALTER TABLE `tom`
  ADD CONSTRAINT `tom_ibfk_1` FOREIGN KEY (`nosc`) REFERENCES `som` (`nosc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
