-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Des 2016 pada 08.55
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket_kai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kereta`
--

CREATE TABLE IF NOT EXISTS `kereta` (
  `no_ka` varchar(8) NOT NULL,
  `nama_ka` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `harga` int(6) NOT NULL,
  `stasiun` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kereta`
--

INSERT INTO `kereta` (`no_ka`, `nama_ka`, `jurusan`, `kelas`, `harga`, `stasiun`) VALUES
('Ka 01', 'KA Argo Bromo Anggrek', 'Surabaya Pasar Turi - Gambir', 'Eksekutif', 450000, 'Surabaya Pasar Turi, Semarang Tawang, Cirebon, Gambir,'),
('Ka 05', 'KA Argo Wilis', 'Surabaya Gubeng - Bandung', 'Eksekutif', 345000, 'Bandung, Kroya, Kutoarjo, Yogyakarta, Malang, Surabaya Gubeng,'),
('Ka 07', 'KA Argo Lawu', 'Bandung - Solo Balapan', 'Eksekutif', 310000, 'Solo Balapan, Yogyakarta, Kutoarjo, Kebumen, Kroya, Bandung,'),
('Ka 09', 'KA Argo Dwipangga', 'Solo Balapan - Gambir', 'Eksekutif', 320000, 'Solo Balapan, Yogyakarta, Kutoarjo, Purwokerto, Cirebon, Jatinegara, Gambir,'),
('Ka 11', 'KA Argo Sindoro', 'Semarang Tawang - Gambir', 'Eksekutif', 230000, 'Semarang Tawang, Pekalongan, Tegal, Cirebon, Jatinegara, Gambir,'),
('Ka 13', 'KA Argo Muria', 'Semarang Tawang - Gambir', 'Eksekutif', 230000, 'Semarang Tawang, Pekalongan, Tegal, Cirebon, Bekasi, Jatinegara, Gambir,'),
('Ka 139', 'KA Sawunggalih Utama', 'Kutoarjo - Pasar Senen', 'Bisnis', 230000, 'Kutoarjo, Kebumen, Karanganyar, Gombong, Kroya, Purwokerto, Bumiayu, Ciledug, Cirebon, Jatinegara, Pasar Senen,'),
('Ka 145', 'KA Kutojaya Selatan', 'Kutoarjo - Kiaracondong', 'Ekonomi', 45000, 'Kutoarjo, Kebumen, Karanganyar, Gombong, Kroya, Maos, Kawunganten, Gandrungmangun, Sidareja, Banjar, Tasikmalaya, Cipeundeuy, Kiaracondong,'),
('Ka 15', 'KA Argo Jati', 'Gambir - Cirebon', 'Eksekutif', 140000, 'Cirebon, Jatibarang, Jatinegara, Gambir,'),
('Ka 151', 'KA Jayabaya', 'Malang - Pasar Senen', 'Ekonomi', 120000, 'Malang, Lawang, Sidoarjo, Surabaya Gubeng, Surabaya Pasar Turi, Bojonegoro, Cepu, Randublatung, Ngrombo, Semarang Poncol, Weleri, Pekalongan, Pemalang, Tegal, Cirebon, Jatibarang, Cikampek, Bekasi, Jatinegara, Pasar Senen,'),
('Ka 157', 'KA Menoreh', 'Semarang Tawang - Pasar Senen', 'Ekonomi', 120000, 'Semarang Tawang, Weleri, Pekalongan, Pemalang, Tegal, Brebes, Cirebon Prujakan, Jatibarang, Jatinegara, Pasar Senen,'),
('Ka 173', 'KA Gaya Baru Malam Selatan', 'Surabaya Gubeng - Pasar Senen', 'Ekonomi', 120000, 'Surabaya Gubeng, Mojokerto, Jombang, Madiun, Sragen, Purwosari, Klaten, Lempuyangan, Wates, Kutoarjo, Gombong, Purwokerto, Ketanggungan, Ciledug, Cirebon Prujakan, Jatibarang, Pegadenbaru, Bekasi, Jatinegara, Pasar Senen,'),
('Ka 177', 'KA Kertajaya', 'Surabaya Pasar Turi - Pasar Senen', 'Ekonomi', 140000, 'Surabaya Pasar Turi, Lamongan, Babat, Bojonegoro, Cepu, Randublatung, Ngrombo, Semarang Tawang, Weleri, Pekalongan, Tegal, Cirebon Prujakan, Jatibarang, Haurgeulis, Jatinegara, Pasar Senen,'),
('Ka 19', 'KA Argo Parahyangan', 'Bandung - Gambir', 'Eksekutif', 75000, 'Bandung, Cimahi, Jatinegara, Manggarai, Bekasi, Purwakarta, Gambir,'),
('Ka 191', 'KA Kutojaya Utara', 'Kutoarjo - Pasar Senen', 'Ekonomi', 40000, 'Kutoarjo, Kebumen, Karanganyar, Gombong, Sumpiuh, Kroya, Randegan, Purwokerto, Bumiayu, Cirebon Prujakan, Bekasi, Jatinegara, Pasar Senen,'),
('Ka 31', 'KA Gajayana', 'Malang - Gambir', 'Eksekutif', 400000, 'Gambir, Cirebon, Purwokerto, Kutoarjo, Yogyakarta, Solo Balapan, Madiun, Kediri, Tulungagung, Blitar, Wlingi, Kepanjen, Malang Kota Lama, Malang,'),
('Ka 33', 'KA Bima', 'Malang - Gambir', 'Eksekutif', 395000, 'Malang, Lawang, Sidoarjo, Surabaya Gubeng, Mojokerto, Jombang, Wilangan, Madiun, Solo Balapan, Yogyakarta, Kutowinangun, Karanganyar, Sumpiuh, Purwokerto, Cirebon, Jatinegara, Gambir,'),
('Ka 35', 'KA Sembrani', 'Surabaya Pasar Turi - Gambir', 'Eksekutif', 450000, 'Surabaya Pasar Turi, Lamongan, Bojonegoro, Cepu, Semarang Tawang, Pekalongan, Tegal, Cirebon, Jatinegara, Gambir,'),
('Ka 37', 'KA Turangga', 'Surabaya Gubeng - Bandung', 'Eksekutif', 425000, 'Surabaya Gubeng, Mojokerto, Jombang, Nganjuk, Madiun, Solo Balapan, Yogyakarta, Kutoarjo, Sumpiuh, Kroya, Banjar, Tasikmalaya, Cipeundeuy, Bandung,'),
('Ka 39', 'KA Taksaka', 'Yogyakarta - Gambir', 'Eksekutif', 250000, 'Yogyakarta, Kutoarjo, Gombong, Purwokerto, Cirebon, Jatinegara, Gambir,'),
('Ka 55', 'KA Bangunkarta', 'Surabaya Gubeng - Gambir', 'Eksekutif', 325000, 'Surabaya Gubeng, Mojokerto, Jombang, Nganjuk, Madiun, Paron, Semarang Tawang, Pekalongan, Pemalang, Tegal, Cirebon, Jatinegara, Gambir,'),
('Ka 57', 'KA Purwojaya', 'Cilacap - Gambir', 'Bisnis', 230000, 'Cilacap, Maos, Kroya, Purwokerto, Cirebon, Bekasi, Jatinegara, Gambir,'),
('Ka 63', 'KA Tegal Bahari', 'Tegal - Gambir', 'Bisnis', 120000, 'Tegal, Brebes, Tanjung, Losari, Babakan, Cirebon, Jatibarang, Bekasi, Jatinegara, Gambir,'),
('Ka 73', 'KA Harina', 'Surabaya Pasar Turi - Bandung', 'Bisnis', 250000, 'Surabaya Pasar Turi, Lamongan, Babat, Bojonegoro, Cepu, Ngrombo, Semarang Tawang, Pekalongan, Tegal, Cirebon, Cikampek, Purwakarta, Cimahi, Bandung,'),
('Ka 77', 'KA Gumarang', 'Surabaya Pasar Turi - Pasar Senen', 'Bisnis', 225000, 'Surabaya Pasar Turi, Lamongan, Babat, Bojonegoro, Cepu, Ngrombo, Semarang Tawang, Pekalongan, Pemalang, Tegal, Cirebon, Jatibarang, Bekasi, Jatinegara, Pasar Senen,'),
('Ka 78', 'KA Mutiara Timur', 'Surabaya Gubeng - Banyuwangi', 'Eksekutif', 220000, 'Surabaya Gubeng, Sidoarjo, Bangil, Probolinggo, Tanggul, Rambipuji, Jember, Kalisat, Kalibaru, Kalisetail, Temuguruh, Rogojampi, Karangasem, Banyuwangi,'),
('Ka 79', 'KA Lodaya', 'Bandung - Solo Balapan', 'Bisnis', 210000, 'Solo Balapan, Klaten, Yogyakarta, Wates, Kutoarjo, Kebumen, Sidareja, Banjar, Tasikmalaya, Cipeundeuy, Kiaracondong, Bandung,'),
('Ka 83', 'KA Sancaka', 'Surabaya Gubeng - Yogyakarta', 'Eksekutif', 180000, 'Surabaya Gubeng, Boharan, Mojokerto, Jombang, Nganjuk, Wilangan, Madiun, Solo Balapan, Klaten, Yogyakarta,'),
('Ka 86', 'KA Malabar', 'Malang - Bandung', 'Eksekutif', 360000, 'Malang, Kepanjen, Wlingi, Blitar, Tulungagung, Kediri, Nganjuk, Madiun, Paron, Solo Balapan, Yogyakarta, Kutoarjo, Karanganyar, Banjar, Tasikmalaya, Cipeundeuy, Kiaracondong, Bandung,'),
('Ka 87', 'KA Malioboro Ekspres', 'Yogyakarta - Malang', 'Eksekutif', 225000, 'Yogyakarta, Solo Balapan, Madiun, Nganjuk, Kediri, Tulungagung, Blitar, Wlingi, Kepanjen, Malang,'),
('Ka 90', 'KA Ciremai', 'Cirebon - Bandung', 'Bisnis', 75000, 'Cirebon, Jatibarang, Haurgeulis, Cikampek, Purwakarta, Cimahi, Bandung'),
('Ka 93', 'KA Mutiara Selatan', 'Surabaya Gubeng - Bandung', 'Bisnis', 285000, 'Surabaya Gubeng, Mojokerto, Jombang, Sembung, Nganjuk, Madiun, Solo Balapan, Yogyakarta, Kutoarjo, Kebumen, Gombong, Maos, Banjar, Ciamis, Tasikmalaya, Cipeundeuy, Kiaracondong, Bandung,');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subyek` varchar(25) NOT NULL,
  `komentar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`nama`, `email`, `subyek`, `komentar`) VALUES
('Dwitya Kurnia Widi Hastawa', 'dwityakurnia@gmail.com', 'Kritik', 'ABCD'),
('Thalia Intan Pratiwi', 'thaliaintan@rocketmail.com', 'Pertanyaan', 'Siapa nama pacar anda?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `kode_pesan` varchar(15) NOT NULL,
  `aktif` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `no_id` int(20) NOT NULL,
  `sta_awal` varchar(25) NOT NULL,
  `sta_tuju` varchar(25) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `nama_ka` varchar(50) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `gerbong` int(2) NOT NULL,
  `no_kursi` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`kode_pesan`, `aktif`, `nama`, `telepon`, `no_id`, `sta_awal`, `sta_tuju`, `tanggal`, `nama_ka`, `kelas`, `gerbong`, `no_kursi`) VALUES
('4hmSRNnUtn8uCm7', 'sudah', 'Dwitya Kurnia Widi H.', '085292702172', 2147483647, 'Gambir', 'Surabaya Pasar Turi', '24 Februari 2016', 'KA Argo Bromo Anggrek', 'Eksekutif', 2, 'D27'),
('VT5cw0VemiYLMem', 'sudah', 'Aziz Afandi', '085327394678', 123, 'Yogyakarta', 'Solo Balapan', '06 Maret 2016', 'KA Lodaya', 'Bisnis', 4, 'A11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `negara` varchar(25) NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `nama`, `username`, `password`, `alamat`, `kota`, `negara`, `kode_pos`, `email`, `login_status`) VALUES
(1, 'Dwitya Kurnia Widi Hastawa', 'admin', 'dadali', 'Besole, Rt 02/03 Bayan, Purworejo', 'Purworejo', 'Indonesia', '54212', 'dwityakurnia@gmail.com', 'Admin'),
(249, 'Aziz Afandi', 'ngandul123', '123', 'ngandul jenar wetan purwodadi purworejo', 'Purworejo', 'Indonesia', '0231', 'azizafandi00@gmail.com', 'Staff'),
(1132, 'Desia Kristanti', 'desia', 'desia', 'Senepo, RT 01/04, Bandungkidul, Purworejo', 'Purworejo', 'Indonesia', '54212', 'desiakristanti@gmail.com', 'Staff'),
(1360, 'Thalia Intan Pratiwi', 'thalia', 'tip', 'Ketawang, Rt. 02/04, Ketawang, Purworejo', 'Purworejo', 'Indonesia', '54213', 'thaliaintan@rocketmail.com', 'Staff'),
(2098, 'Safira Mirza Rahman', 'safira', 'fira', 'Kembangarum, Rt 02/03, Kutoarjo', 'Purworejo', 'Indonesia', '54213', 'raehmandhe@ymail.com', 'Guest'),
(2938, 'Pramudita Galih Ristanti', 'pramudita', 'dita', 'Pituruh, Rt 01/04, Pituruh', 'Purworejo', 'Indonesia', '54341', 'pramuditagalih@gmail.com', 'Guest'),
(3384, 'Wahyu Awan', 'wawan', '222', 'Jln. Pramuka no. 132, Wonosari, Gunung Kidul', 'Wonosari', 'Indonesia', '54212', 'wahyuawan@yahoo.com', 'Guest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kereta`
--
ALTER TABLE `kereta`
  ADD PRIMARY KEY (`no_ka`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`kode_pesan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
